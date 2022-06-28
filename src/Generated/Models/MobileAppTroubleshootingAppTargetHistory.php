<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppTroubleshootingAppTargetHistory extends MobileAppTroubleshootingHistoryItem implements AdditionalDataHolder, Parsable 
{
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
     * @var string|null $securityGroupId AAD security group id to which it was targeted.
    */
    private ?string $securityGroupId = null;
    
    /**
     * Instantiates a new MobileAppTroubleshootingAppTargetHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'runState' => function (ParseNode $n) use ($o) { $o->setRunState($n->getEnumValue(RunState::class)); },
            'securityGroupId' => function (ParseNode $n) use ($o) { $o->setSecurityGroupId($n->getStringValue()); },
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
        $writer->writeAdditionalData($this->additionalData);
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

    /**
     * Sets the securityGroupId property value. AAD security group id to which it was targeted.
     *  @param string|null $value Value to set for the securityGroupId property.
    */
    public function setSecurityGroupId(?string $value ): void {
        $this->securityGroupId = $value;
    }

}
