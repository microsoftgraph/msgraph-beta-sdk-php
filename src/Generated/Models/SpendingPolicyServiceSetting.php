<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Desired governance state for a single service within a spending policy.
*/
class SpendingPolicyServiceSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SpendingPolicyServiceSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpendingPolicyServiceSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpendingPolicyServiceSetting {
        return new SpendingPolicyServiceSetting();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parentEtag' => fn(ParseNode $n) => $o->setParentEtag($n->getStringValue()),
            'parentStatus' => fn(ParseNode $n) => $o->setParentStatus($n->getEnumValue(SpendingPolicyStatus::class)),
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ServiceSettingState::class)),
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
     * Gets the parentEtag property value. The containing policy's ETag. Use this value in If-Match for concurrency control onservice-setting changes. Read-only.
     * @return string|null
    */
    public function getParentEtag(): ?string {
        $val = $this->getBackingStore()->get('parentEtag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentEtag'");
    }

    /**
     * Gets the parentStatus property value. Lifecycle status of a spending policy.
     * @return SpendingPolicyStatus|null
    */
    public function getParentStatus(): ?SpendingPolicyStatus {
        $val = $this->getBackingStore()->get('parentStatus');
        if (is_null($val) || $val instanceof SpendingPolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentStatus'");
    }

    /**
     * Gets the serviceId property value. The identifier of the AI service this setting governs, such as cowork or workIQ. Severalbillable services can share one identifier and are governed together. Discover validvalues from the service catalog using a category identifier, not the catalog entry'sown id.
     * @return string|null
    */
    public function getServiceId(): ?string {
        $val = $this->getBackingStore()->get('serviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceId'");
    }

    /**
     * Gets the state property value. Desired state of a governed service within a spending policy.
     * @return ServiceSettingState|null
    */
    public function getState(): ?ServiceSettingState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof ServiceSettingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('parentStatus', $this->getParentStatus());
        $writer->writeStringValue('serviceId', $this->getServiceId());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the parentEtag property value. The containing policy's ETag. Use this value in If-Match for concurrency control onservice-setting changes. Read-only.
     * @param string|null $value Value to set for the parentEtag property.
    */
    public function setParentEtag(?string $value): void {
        $this->getBackingStore()->set('parentEtag', $value);
    }

    /**
     * Sets the parentStatus property value. Lifecycle status of a spending policy.
     * @param SpendingPolicyStatus|null $value Value to set for the parentStatus property.
    */
    public function setParentStatus(?SpendingPolicyStatus $value): void {
        $this->getBackingStore()->set('parentStatus', $value);
    }

    /**
     * Sets the serviceId property value. The identifier of the AI service this setting governs, such as cowork or workIQ. Severalbillable services can share one identifier and are governed together. Discover validvalues from the service catalog using a category identifier, not the catalog entry'sown id.
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

    /**
     * Sets the state property value. Desired state of a governed service within a spending policy.
     * @param ServiceSettingState|null $value Value to set for the state property.
    */
    public function setState(?ServiceSettingState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
