<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\MicrosoftGraphExecuteAction;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DriverApprovalAction;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExecuteActionPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new executeActionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the actionName property value. An enum type to represent approval actions of single or list of drivers.
     * @return DriverApprovalAction|null
    */
    public function getActionName(): ?DriverApprovalAction {
        return $this->getBackingStore()->get('actionName');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deploymentDate property value. The deploymentDate property
     * @return DateTime|null
    */
    public function getDeploymentDate(): ?DateTime {
        return $this->getBackingStore()->get('deploymentDate');
    }

    /**
     * Gets the driverIds property value. The driverIds property
     * @return array<string>|null
    */
    public function getDriverIds(): ?array {
        return $this->getBackingStore()->get('driverIds');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getEnumValue(DriverApprovalAction::class)),
            'deploymentDate' => fn(ParseNode $n) => $o->setDeploymentDate($n->getDateTimeValue()),
            'driverIds' => fn(ParseNode $n) => $o->setDriverIds($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionName', $this->getActionName());
        $writer->writeDateTimeValue('deploymentDate', $this->getDeploymentDate());
        $writer->writeCollectionOfPrimitiveValues('driverIds', $this->getDriverIds());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionName property value. An enum type to represent approval actions of single or list of drivers.
     * @param DriverApprovalAction|null $value Value to set for the actionName property.
    */
    public function setActionName(?DriverApprovalAction $value): void {
        $this->getBackingStore()->set('actionName', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deploymentDate property value. The deploymentDate property
     * @param DateTime|null $value Value to set for the deploymentDate property.
    */
    public function setDeploymentDate(?DateTime $value): void {
        $this->getBackingStore()->set('deploymentDate', $value);
    }

    /**
     * Sets the driverIds property value. The driverIds property
     * @param array<string>|null $value Value to set for the driverIds property.
    */
    public function setDriverIds(?array $value): void {
        $this->getBackingStore()->set('driverIds', $value);
    }

}
