<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppTroubleshootingAppStateHistory extends MobileAppTroubleshootingHistoryItem implements Parsable 
{
    /**
     * @var MobileAppActionType|null $actionType Defines the Action Types for an Intune Application.
    */
    private ?MobileAppActionType $actionType = null;
    
    /**
     * @var string|null $errorCode Error code for the failure, empty if no failure.
    */
    private ?string $errorCode = null;
    
    /**
     * @var RunState|null $runState Indicates the type of execution status of the device management script.
    */
    private ?RunState $runState = null;
    
    /**
     * Instantiates a new MobileAppTroubleshootingAppStateHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppTroubleshootingAppStateHistory');
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
        return $this->actionType;
    }

    /**
     * Gets the errorCode property value. Error code for the failure, empty if no failure.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->runState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionType', $this->actionType);
        $writer->writeStringValue('errorCode', $this->errorCode);
        $writer->writeEnumValue('runState', $this->runState);
    }

    /**
     * Sets the actionType property value. Defines the Action Types for an Intune Application.
     *  @param MobileAppActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?MobileAppActionType $value ): void {
        $this->actionType = $value;
    }

    /**
     * Sets the errorCode property value. Error code for the failure, empty if no failure.
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the runState property value. Indicates the type of execution status of the device management script.
     *  @param RunState|null $value Value to set for the runState property.
    */
    public function setRunState(?RunState $value ): void {
        $this->runState = $value;
    }

}
