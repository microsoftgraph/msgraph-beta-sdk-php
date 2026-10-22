<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LifecyclePolicySubjectEnforcement implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new LifecyclePolicySubjectEnforcement and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicySubjectEnforcement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicySubjectEnforcement {
        return new LifecyclePolicySubjectEnforcement();
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
            'isLocked' => fn(ParseNode $n) => $o->setIsLocked($n->getBooleanValue()),
            'isTerminal' => fn(ParseNode $n) => $o->setIsTerminal($n->getBooleanValue()),
            'lastAction' => fn(ParseNode $n) => $o->setLastAction($n->getEnumValue(LifecyclePolicyEnforcementActionState::class)),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'nextAction' => fn(ParseNode $n) => $o->setNextAction($n->getEnumValue(LifecyclePolicyNextEnforcementAction::class)),
            'nextActionDateTime' => fn(ParseNode $n) => $o->setNextActionDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(LifecyclePolicyEnforcementStatus::class)),
        ];
    }

    /**
     * Gets the isLocked property value. Indicates whether enforcement is locked.
     * @return bool|null
    */
    public function getIsLocked(): ?bool {
        $val = $this->getBackingStore()->get('isLocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLocked'");
    }

    /**
     * Gets the isTerminal property value. Indicates whether enforcement reached a terminal state.
     * @return bool|null
    */
    public function getIsTerminal(): ?bool {
        $val = $this->getBackingStore()->get('isTerminal');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTerminal'");
    }

    /**
     * Gets the lastAction property value. The lastAction property
     * @return LifecyclePolicyEnforcementActionState|null
    */
    public function getLastAction(): ?LifecyclePolicyEnforcementActionState {
        $val = $this->getBackingStore()->get('lastAction');
        if (is_null($val) || $val instanceof LifecyclePolicyEnforcementActionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAction'");
    }

    /**
     * Gets the lastActionDateTime property value. The date and time when the last enforcement action completed.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionDateTime'");
    }

    /**
     * Gets the nextAction property value. The next enforcement action. The possible values are: nonComplianceNotification, firstNotification, secondNotification, finalNotification, disable, disableNotification, delete, unknownFutureValue.
     * @return LifecyclePolicyNextEnforcementAction|null
    */
    public function getNextAction(): ?LifecyclePolicyNextEnforcementAction {
        $val = $this->getBackingStore()->get('nextAction');
        if (is_null($val) || $val instanceof LifecyclePolicyNextEnforcementAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextAction'");
    }

    /**
     * Gets the nextActionDateTime property value. The date and time when the next enforcement action is scheduled.
     * @return DateTime|null
    */
    public function getNextActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('nextActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextActionDateTime'");
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
     * Gets the status property value. The status property
     * @return LifecyclePolicyEnforcementStatus|null
    */
    public function getStatus(): ?LifecyclePolicyEnforcementStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof LifecyclePolicyEnforcementStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isLocked', $this->getIsLocked());
        $writer->writeBooleanValue('isTerminal', $this->getIsTerminal());
        $writer->writeEnumValue('lastAction', $this->getLastAction());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeEnumValue('nextAction', $this->getNextAction());
        $writer->writeDateTimeValue('nextActionDateTime', $this->getNextActionDateTime());
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
     * Sets the isLocked property value. Indicates whether enforcement is locked.
     * @param bool|null $value Value to set for the isLocked property.
    */
    public function setIsLocked(?bool $value): void {
        $this->getBackingStore()->set('isLocked', $value);
    }

    /**
     * Sets the isTerminal property value. Indicates whether enforcement reached a terminal state.
     * @param bool|null $value Value to set for the isTerminal property.
    */
    public function setIsTerminal(?bool $value): void {
        $this->getBackingStore()->set('isTerminal', $value);
    }

    /**
     * Sets the lastAction property value. The lastAction property
     * @param LifecyclePolicyEnforcementActionState|null $value Value to set for the lastAction property.
    */
    public function setLastAction(?LifecyclePolicyEnforcementActionState $value): void {
        $this->getBackingStore()->set('lastAction', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The date and time when the last enforcement action completed.
     * @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the nextAction property value. The next enforcement action. The possible values are: nonComplianceNotification, firstNotification, secondNotification, finalNotification, disable, disableNotification, delete, unknownFutureValue.
     * @param LifecyclePolicyNextEnforcementAction|null $value Value to set for the nextAction property.
    */
    public function setNextAction(?LifecyclePolicyNextEnforcementAction $value): void {
        $this->getBackingStore()->set('nextAction', $value);
    }

    /**
     * Sets the nextActionDateTime property value. The date and time when the next enforcement action is scheduled.
     * @param DateTime|null $value Value to set for the nextActionDateTime property.
    */
    public function setNextActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('nextActionDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param LifecyclePolicyEnforcementStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LifecyclePolicyEnforcementStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
