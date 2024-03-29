<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\OverrideComplianceState;

use Microsoft\Graph\Beta\Generated\Models\AdministratorConfiguredDeviceComplianceState;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OverrideComplianceStatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OverrideComplianceStatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OverrideComplianceStatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OverrideComplianceStatePostRequestBody {
        return new OverrideComplianceStatePostRequestBody();
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
     * Gets the complianceState property value. Administrator configured device compliance state Enum
     * @return AdministratorConfiguredDeviceComplianceState|null
    */
    public function getComplianceState(): ?AdministratorConfiguredDeviceComplianceState {
        $val = $this->getBackingStore()->get('complianceState');
        if (is_null($val) || $val instanceof AdministratorConfiguredDeviceComplianceState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'complianceState' => fn(ParseNode $n) => $o->setComplianceState($n->getEnumValue(AdministratorConfiguredDeviceComplianceState::class)),
            'remediationUrl' => fn(ParseNode $n) => $o->setRemediationUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the remediationUrl property value. The remediationUrl property
     * @return string|null
    */
    public function getRemediationUrl(): ?string {
        $val = $this->getBackingStore()->get('remediationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('complianceState', $this->getComplianceState());
        $writer->writeStringValue('remediationUrl', $this->getRemediationUrl());
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
     * Sets the complianceState property value. Administrator configured device compliance state Enum
     * @param AdministratorConfiguredDeviceComplianceState|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?AdministratorConfiguredDeviceComplianceState $value): void {
        $this->getBackingStore()->set('complianceState', $value);
    }

    /**
     * Sets the remediationUrl property value. The remediationUrl property
     * @param string|null $value Value to set for the remediationUrl property.
    */
    public function setRemediationUrl(?string $value): void {
        $this->getBackingStore()->set('remediationUrl', $value);
    }

}
