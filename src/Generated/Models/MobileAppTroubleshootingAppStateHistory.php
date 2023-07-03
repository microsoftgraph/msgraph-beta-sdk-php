<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppTroubleshootingAppStateHistory extends MobileAppTroubleshootingHistoryItem implements Parsable 
{
    /**
     * Instantiates a new MobileAppTroubleshootingAppStateHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppTroubleshootingAppStateHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppTroubleshootingAppStateHistory {
        return new MobileAppTroubleshootingAppStateHistory();
    }

    /**
     * Gets the actionType property value. Defines the Action Types for an Intune Application.
     * @return MobileAppActionType|null
    */
    public function getActionType(): ?MobileAppActionType {
        $val = $this->getBackingStore()->get('actionType');
        if (is_null($val) || $val instanceof MobileAppActionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionType'");
    }

    /**
     * Gets the errorCode property value. Error code for the failure, empty if no failure.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(MobileAppActionType::class)),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'runState' => fn(ParseNode $n) => $o->setRunState($n->getEnumValue(RunState::class)),
        ]);
    }

    /**
     * Gets the runState property value. Indicates the type of execution status of the device management script.
     * @return RunState|null
    */
    public function getRunState(): ?RunState {
        $val = $this->getBackingStore()->get('runState');
        if (is_null($val) || $val instanceof RunState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionType', $this->getActionType());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeEnumValue('runState', $this->getRunState());
    }

    /**
     * Sets the actionType property value. Defines the Action Types for an Intune Application.
     * @param MobileAppActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?MobileAppActionType $value): void {
        $this->getBackingStore()->set('actionType', $value);
    }

    /**
     * Sets the errorCode property value. Error code for the failure, empty if no failure.
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the runState property value. Indicates the type of execution status of the device management script.
     * @param RunState|null $value Value to set for the runState property.
    */
    public function setRunState(?RunState $value): void {
        $this->getBackingStore()->set('runState', $value);
    }

}
