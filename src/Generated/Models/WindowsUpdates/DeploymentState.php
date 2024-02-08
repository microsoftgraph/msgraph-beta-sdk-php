<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeploymentState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeploymentState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentState {
        return new DeploymentState();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the effectiveValue property value. The effectiveValue property
     * @return DeploymentStateValue|null
    */
    public function getEffectiveValue(): ?DeploymentStateValue {
        $val = $this->getBackingStore()->get('effectiveValue');
        if (is_null($val) || $val instanceof DeploymentStateValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectiveValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'effectiveValue' => fn(ParseNode $n) => $o->setEffectiveValue($n->getEnumValue(DeploymentStateValue::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reasons' => fn(ParseNode $n) => $o->setReasons($n->getCollectionOfObjectValues([DeploymentStateReason::class, 'createFromDiscriminatorValue'])),
            'requestedValue' => fn(ParseNode $n) => $o->setRequestedValue($n->getEnumValue(RequestedDeploymentStateValue::class)),
        ];
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
     * Gets the reasons property value. Specifies the reasons the deployment has its state value. Read-only.
     * @return array<DeploymentStateReason>|null
    */
    public function getReasons(): ?array {
        $val = $this->getBackingStore()->get('reasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeploymentStateReason::class);
            /** @var array<DeploymentStateReason>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reasons'");
    }

    /**
     * Gets the requestedValue property value. The requestedValue property
     * @return RequestedDeploymentStateValue|null
    */
    public function getRequestedValue(): ?RequestedDeploymentStateValue {
        $val = $this->getBackingStore()->get('requestedValue');
        if (is_null($val) || $val instanceof RequestedDeploymentStateValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('effectiveValue', $this->getEffectiveValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('reasons', $this->getReasons());
        $writer->writeEnumValue('requestedValue', $this->getRequestedValue());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the effectiveValue property value. The effectiveValue property
     * @param DeploymentStateValue|null $value Value to set for the effectiveValue property.
    */
    public function setEffectiveValue(?DeploymentStateValue $value): void {
        $this->getBackingStore()->set('effectiveValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reasons property value. Specifies the reasons the deployment has its state value. Read-only.
     * @param array<DeploymentStateReason>|null $value Value to set for the reasons property.
    */
    public function setReasons(?array $value): void {
        $this->getBackingStore()->set('reasons', $value);
    }

    /**
     * Sets the requestedValue property value. The requestedValue property
     * @param RequestedDeploymentStateValue|null $value Value to set for the requestedValue property.
    */
    public function setRequestedValue(?RequestedDeploymentStateValue $value): void {
        $this->getBackingStore()->set('requestedValue', $value);
    }

}
