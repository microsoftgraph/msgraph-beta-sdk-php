<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\ExecuteAction;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DriverApprovalAction;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('actionName');
        if (is_null($val) || $val instanceof DriverApprovalAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionName'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
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
        $val = $this->getBackingStore()->get('deploymentDate');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentDate'");
    }

    /**
     * Gets the driverIds property value. The driverIds property
     * @return array<string>|null
    */
    public function getDriverIds(): ?array {
        $val = $this->getBackingStore()->get('driverIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driverIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getEnumValue(DriverApprovalAction::class)),
            'deploymentDate' => fn(ParseNode $n) => $o->setDeploymentDate($n->getDateTimeValue()),
            'driverIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDriverIds($val);
            },
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
