<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CaseSlaPolicyEntry implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CaseSlaPolicyEntry and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseSlaPolicyEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseSlaPolicyEntry {
        return new CaseSlaPolicyEntry();
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
     * Gets the breachTargetDateTime property value. The date and time the SLA policy is targeted to breach, if applicable. null when the policy is paused or completed. Computed by the service.
     * @return DateTime|null
    */
    public function getBreachTargetDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('breachTargetDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'breachTargetDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'breachTargetDateTime' => fn(ParseNode $n) => $o->setBreachTargetDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyDisplayName' => fn(ParseNode $n) => $o->setPolicyDisplayName($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CaseSlaPolicyStatus::class)),
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
     * Gets the policyDisplayName property value. The display name of the SLA policy. Computed by the service.
     * @return string|null
    */
    public function getPolicyDisplayName(): ?string {
        $val = $this->getBackingStore()->get('policyDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDisplayName'");
    }

    /**
     * Gets the policyId property value. The unique identifier of the SLA policy, assigned by the SLA policy engine. Computed by the service.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the status property value. The status property
     * @return CaseSlaPolicyStatus|null
    */
    public function getStatus(): ?CaseSlaPolicyStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CaseSlaPolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the breachTargetDateTime property value. The date and time the SLA policy is targeted to breach, if applicable. null when the policy is paused or completed. Computed by the service.
     * @param DateTime|null $value Value to set for the breachTargetDateTime property.
    */
    public function setBreachTargetDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('breachTargetDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyDisplayName property value. The display name of the SLA policy. Computed by the service.
     * @param string|null $value Value to set for the policyDisplayName property.
    */
    public function setPolicyDisplayName(?string $value): void {
        $this->getBackingStore()->set('policyDisplayName', $value);
    }

    /**
     * Sets the policyId property value. The unique identifier of the SLA policy, assigned by the SLA policy engine. Computed by the service.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CaseSlaPolicyStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CaseSlaPolicyStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
