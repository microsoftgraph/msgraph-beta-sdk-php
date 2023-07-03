<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkloadAction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WorkloadAction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkloadAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkloadAction {
        return new WorkloadAction();
    }

    /**
     * Gets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     * @return string|null
    */
    public function getActionId(): ?string {
        $val = $this->getBackingStore()->get('actionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionId'");
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
     * Gets the category property value. The category for the workload action. Possible values are: automated, manual, unknownFutureValue. Optional. Read-only.
     * @return WorkloadActionCategory|null
    */
    public function getCategory(): ?WorkloadActionCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof WorkloadActionCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the description property value. The description for the workload action. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name for the workload action. Optional. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionId' => fn(ParseNode $n) => $o->setActionId($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(WorkloadActionCategory::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'licenses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLicenses($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([Setting::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the licenses property value. The licenses property
     * @return array<string>|null
    */
    public function getLicenses(): ?array {
        $val = $this->getBackingStore()->get('licenses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenses'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the service property value. The service associated with workload action. Optional. Read-only.
     * @return string|null
    */
    public function getService(): ?string {
        $val = $this->getBackingStore()->get('service');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'service'");
    }

    /**
     * Gets the settings property value. The collection of settings associated with the workload action. Optional. Read-only.
     * @return array<Setting>|null
    */
    public function getSettings(): ?array {
        $val = $this->getBackingStore()->get('settings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Setting::class);
            /** @var array<Setting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionId', $this->getActionId());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('licenses', $this->getLicenses());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     * @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value): void {
        $this->getBackingStore()->set('actionId', $value);
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
     * Sets the category property value. The category for the workload action. Possible values are: automated, manual, unknownFutureValue. Optional. Read-only.
     * @param WorkloadActionCategory|null $value Value to set for the category property.
    */
    public function setCategory(?WorkloadActionCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the description property value. The description for the workload action. Optional. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the workload action. Optional. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the licenses property value. The licenses property
     * @param array<string>|null $value Value to set for the licenses property.
    */
    public function setLicenses(?array $value): void {
        $this->getBackingStore()->set('licenses', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the service property value. The service associated with workload action. Optional. Read-only.
     * @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the settings property value. The collection of settings associated with the workload action. Optional. Read-only.
     * @param array<Setting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
