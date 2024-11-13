<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Apply;

use Microsoft\Graph\Beta\Generated\Models\CloudPcPolicySettingType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplyPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplyPostRequestBody {
        return new ApplyPostRequestBody();
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
            'policySettings' => fn(ParseNode $n) => $o->setPolicySettings($n->getEnumValue(CloudPcPolicySettingType::class)),
            'reservePercentage' => fn(ParseNode $n) => $o->setReservePercentage($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the policySettings property value. The policySettings property
     * @return CloudPcPolicySettingType|null
    */
    public function getPolicySettings(): ?CloudPcPolicySettingType {
        $val = $this->getBackingStore()->get('policySettings');
        if (is_null($val) || $val instanceof CloudPcPolicySettingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policySettings'");
    }

    /**
     * Gets the reservePercentage property value. The reservePercentage property
     * @return int|null
    */
    public function getReservePercentage(): ?int {
        $val = $this->getBackingStore()->get('reservePercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reservePercentage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('policySettings', $this->getPolicySettings());
        $writer->writeIntegerValue('reservePercentage', $this->getReservePercentage());
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
     * Sets the policySettings property value. The policySettings property
     * @param CloudPcPolicySettingType|null $value Value to set for the policySettings property.
    */
    public function setPolicySettings(?CloudPcPolicySettingType $value): void {
        $this->getBackingStore()->set('policySettings', $value);
    }

    /**
     * Sets the reservePercentage property value. The reservePercentage property
     * @param int|null $value Value to set for the reservePercentage property.
    */
    public function setReservePercentage(?int $value): void {
        $this->getBackingStore()->set('reservePercentage', $value);
    }

}
