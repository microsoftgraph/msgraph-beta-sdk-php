<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppTroubleshootingAppTargetHistory extends MobileAppTroubleshootingHistoryItem implements Parsable 
{
    /**
     * @var string|null $errorCode Error code for the failure, empty if no failure.
    */
    private ?string $errorCode = null;
    
    /**
     * @var RunState|null $runState Indicates the type of execution status of the device management script.
    */
    private ?RunState $runState = null;
    
    /**
     * @var string|null $securityGroupId AAD security group id to which it was targeted.
    */
    private ?string $securityGroupId = null;
    
    /**
     * Instantiates a new MobileAppTroubleshootingAppTargetHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppTroubleshootingAppTargetHistory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppTroubleshootingAppTargetHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppTroubleshootingAppTargetHistory {
        return new MobileAppTroubleshootingAppTargetHistory();
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
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'runState' => function (ParseNode $n) use ($o) { $o->setRunState($n->getEnumValue(RunState::class)); },
            'securityGroupId' => function (ParseNode $n) use ($o) { $o->setSecurityGroupId($n->getStringValue()); },
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
     * Gets the securityGroupId property value. AAD security group id to which it was targeted.
     * @return string|null
    */
    public function getSecurityGroupId(): ?string {
        return $this->securityGroupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('errorCode', $this->errorCode);
        $writer->writeEnumValue('runState', $this->runState);
        $writer->writeStringValue('securityGroupId', $this->securityGroupId);
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

    /**
     * Sets the securityGroupId property value. AAD security group id to which it was targeted.
     *  @param string|null $value Value to set for the securityGroupId property.
    */
    public function setSecurityGroupId(?string $value ): void {
        $this->securityGroupId = $value;
    }

}
