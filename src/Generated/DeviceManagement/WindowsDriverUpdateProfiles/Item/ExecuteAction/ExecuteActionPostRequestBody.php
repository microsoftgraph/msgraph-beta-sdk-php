<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\ExecuteAction;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DriverApprovalAction;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExecuteActionPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DriverApprovalAction|null $actionName The actionName property
    */
    private ?DriverApprovalAction $actionName = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $deploymentDate The deploymentDate property
    */
    private ?DateTime $deploymentDate = null;
    
    /**
     * @var array<string>|null $driverIds The driverIds property
    */
    private ?array $driverIds = null;
    
    /**
     * Instantiates a new executeActionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExecuteActionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExecuteActionPostRequestBody {
        return new ExecuteActionPostRequestBody();
    }

    /**
     * Gets the actionName property value. The actionName property
     * @return DriverApprovalAction|null
    */
    public function getActionName(): ?DriverApprovalAction {
        return $this->actionName;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deploymentDate property value. The deploymentDate property
     * @return DateTime|null
    */
    public function getDeploymentDate(): ?DateTime {
        return $this->deploymentDate;
    }

    /**
     * Gets the driverIds property value. The driverIds property
     * @return array<string>|null
    */
    public function getDriverIds(): ?array {
        return $this->driverIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => function (ParseNode $n) use ($o) { $o->setActionName($n->getEnumValue(DriverApprovalAction::class)); },
            'deploymentDate' => function (ParseNode $n) use ($o) { $o->setDeploymentDate($n->getDateTimeValue()); },
            'driverIds' => function (ParseNode $n) use ($o) { $o->setDriverIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionName', $this->actionName);
        $writer->writeDateTimeValue('deploymentDate', $this->deploymentDate);
        $writer->writeCollectionOfPrimitiveValues('driverIds', $this->driverIds);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionName property value. The actionName property
     *  @param DriverApprovalAction|null $value Value to set for the actionName property.
    */
    public function setActionName(?DriverApprovalAction $value ): void {
        $this->actionName = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deploymentDate property value. The deploymentDate property
     *  @param DateTime|null $value Value to set for the deploymentDate property.
    */
    public function setDeploymentDate(?DateTime $value ): void {
        $this->deploymentDate = $value;
    }

    /**
     * Sets the driverIds property value. The driverIds property
     *  @param array<string>|null $value Value to set for the driverIds property.
    */
    public function setDriverIds(?array $value ): void {
        $this->driverIds = $value;
    }

}
