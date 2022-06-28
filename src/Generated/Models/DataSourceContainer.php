<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\CaseIndexOperation;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\DataSourceContainerStatus;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\DataSourceHoldStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataSourceContainer extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $createdDateTime Created date and time of the dataSourceContainer entity.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName Display name of the dataSourceContainer entity.
    */
    private ?string $displayName = null;
    
    /**
     * @var DataSourceHoldStatus|null $holdStatus The holdStatus property
    */
    private ?DataSourceHoldStatus $holdStatus = null;
    
    /**
     * @var CaseIndexOperation|null $lastIndexOperation The lastIndexOperation property
    */
    private ?CaseIndexOperation $lastIndexOperation = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last modified date and time of the dataSourceContainer.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $releasedDateTime Date and time that the dataSourceContainer was released from the case.
    */
    private ?DateTime $releasedDateTime = null;
    
    /**
     * @var DataSourceContainerStatus|null $status Latest status of the dataSourceContainer. Possible values are: Active, Released.
    */
    private ?DataSourceContainerStatus $status = null;
    
    /**
     * Instantiates a new DataSourceContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSourceContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSourceContainer {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.ediscovery.custodian': return new Custodian();
                case '#microsoft.graph.ediscovery.noncustodialDataSource': return new NoncustodialDataSource();
            }
        }
        return new DataSourceContainer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDateTime property value. Created date and time of the dataSourceContainer entity.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. Display name of the dataSourceContainer entity.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'holdStatus' => function (ParseNode $n) use ($o) { $o->setHoldStatus($n->getEnumValue(DataSourceHoldStatus::class)); },
            'lastIndexOperation' => function (ParseNode $n) use ($o) { $o->setLastIndexOperation($n->getObjectValue(array(CaseIndexOperation::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'releasedDateTime' => function (ParseNode $n) use ($o) { $o->setReleasedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DataSourceContainerStatus::class)); },
        ]);
    }

    /**
     * Gets the holdStatus property value. The holdStatus property
     * @return DataSourceHoldStatus|null
    */
    public function getHoldStatus(): ?DataSourceHoldStatus {
        return $this->holdStatus;
    }

    /**
     * Gets the lastIndexOperation property value. The lastIndexOperation property
     * @return CaseIndexOperation|null
    */
    public function getLastIndexOperation(): ?CaseIndexOperation {
        return $this->lastIndexOperation;
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified date and time of the dataSourceContainer.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the releasedDateTime property value. Date and time that the dataSourceContainer was released from the case.
     * @return DateTime|null
    */
    public function getReleasedDateTime(): ?DateTime {
        return $this->releasedDateTime;
    }

    /**
     * Gets the status property value. Latest status of the dataSourceContainer. Possible values are: Active, Released.
     * @return DataSourceContainerStatus|null
    */
    public function getStatus(): ?DataSourceContainerStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('holdStatus', $this->holdStatus);
        $writer->writeObjectValue('lastIndexOperation', $this->lastIndexOperation);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('releasedDateTime', $this->releasedDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdDateTime property value. Created date and time of the dataSourceContainer entity.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. Display name of the dataSourceContainer entity.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the holdStatus property value. The holdStatus property
     *  @param DataSourceHoldStatus|null $value Value to set for the holdStatus property.
    */
    public function setHoldStatus(?DataSourceHoldStatus $value ): void {
        $this->holdStatus = $value;
    }

    /**
     * Sets the lastIndexOperation property value. The lastIndexOperation property
     *  @param CaseIndexOperation|null $value Value to set for the lastIndexOperation property.
    */
    public function setLastIndexOperation(?CaseIndexOperation $value ): void {
        $this->lastIndexOperation = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified date and time of the dataSourceContainer.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the releasedDateTime property value. Date and time that the dataSourceContainer was released from the case.
     *  @param DateTime|null $value Value to set for the releasedDateTime property.
    */
    public function setReleasedDateTime(?DateTime $value ): void {
        $this->releasedDateTime = $value;
    }

    /**
     * Sets the status property value. Latest status of the dataSourceContainer. Possible values are: Active, Released.
     *  @param DataSourceContainerStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DataSourceContainerStatus $value ): void {
        $this->status = $value;
    }

}
