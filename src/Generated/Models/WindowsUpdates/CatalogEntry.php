<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CatalogEntry extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $deployableUntilDateTime The date on which the content is no longer available to deploy using the service. Read-only.
    */
    private ?DateTime $deployableUntilDateTime = null;
    
    /**
     * @var string|null $displayName The display name of the content. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $releaseDateTime The release date for the content. Read-only.
    */
    private ?DateTime $releaseDateTime = null;
    
    /**
     * Instantiates a new catalogEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CatalogEntry {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.softwareUpdateCatalogEntry': return new SoftwareUpdateCatalogEntry();
            }
        }
        return new CatalogEntry();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deployableUntilDateTime property value. The date on which the content is no longer available to deploy using the service. Read-only.
     * @return DateTime|null
    */
    public function getDeployableUntilDateTime(): ?DateTime {
        return $this->deployableUntilDateTime;
    }

    /**
     * Gets the displayName property value. The display name of the content. Read-only.
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
            'deployableUntilDateTime' => function (ParseNode $n) use ($o) { $o->setDeployableUntilDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'releaseDateTime' => function (ParseNode $n) use ($o) { $o->setReleaseDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the releaseDateTime property value. The release date for the content. Read-only.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        return $this->releaseDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deployableUntilDateTime', $this->deployableUntilDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('releaseDateTime', $this->releaseDateTime);
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
     * Sets the deployableUntilDateTime property value. The date on which the content is no longer available to deploy using the service. Read-only.
     *  @param DateTime|null $value Value to set for the deployableUntilDateTime property.
    */
    public function setDeployableUntilDateTime(?DateTime $value ): void {
        $this->deployableUntilDateTime = $value;
    }

    /**
     * Sets the displayName property value. The display name of the content. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the releaseDateTime property value. The release date for the content. Read-only.
     *  @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value ): void {
        $this->releaseDateTime = $value;
    }

}
