<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppTroubleshootingAppStateHistory extends MobileAppTroubleshootingHistoryItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var MobileAppActionType|null $actionType Action type for Intune Application. Possible values are: unknown, installCommandSent, installed, uninstalled, userRequestedInstall.
    */
    private ?MobileAppActionType $actionType = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $errorCode Error code for the failure, empty if no failure.
    */
    private ?string $errorCode = null;
    
    /**
     * @var RunState|null $runState Status of the item. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    */
    private ?RunState $runState = null;
    
    /**
     * Instantiates a new MobileAppTroubleshootingAppStateHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the actionType property value. Action type for Intune Application. Possible values are: unknown, installCommandSent, installed, uninstalled, userRequestedInstall.
     * @return MobileAppActionType|null
    */
    public function getActionType(): ?MobileAppActionType {
        return $this->actionType;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'actionType' => function (ParseNode $n) use ($o) { $o->setActionType($n->getEnumValue(MobileAppActionType::class)); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'runState' => function (ParseNode $n) use ($o) { $o->setRunState($n->getEnumValue(RunState::class)); },
        ]);
    }

    /**
     * Gets the runState property value. Status of the item. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionType property value. Action type for Intune Application. Possible values are: unknown, installCommandSent, installed, uninstalled, userRequestedInstall.
     *  @param MobileAppActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?MobileAppActionType $value ): void {
        $this->actionType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the errorCode property value. Error code for the failure, empty if no failure.
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the runState property value. Status of the item. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
     *  @param RunState|null $value Value to set for the runState property.
    */
    public function setRunState(?RunState $value ): void {
        $this->runState = $value;
    }

}
