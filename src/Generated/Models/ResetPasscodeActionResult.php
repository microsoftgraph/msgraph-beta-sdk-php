<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResetPasscodeActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * @var int|null $errorCode RotateBitLockerKeys action error code. Valid values 0 to 2147483647
    */
    private ?int $errorCode = null;
    
    /**
     * @var string|null $passcode Newly generated passcode for the device
    */
    private ?string $passcode = null;
    
    /**
     * Instantiates a new ResetPasscodeActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.resetPasscodeActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResetPasscodeActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResetPasscodeActionResult {
        return new ResetPasscodeActionResult();
    }

    /**
     * Gets the errorCode property value. RotateBitLockerKeys action error code. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'passcode' => function (ParseNode $n) use ($o) { $o->setPasscode($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the passcode property value. Newly generated passcode for the device
     * @return string|null
    */
    public function getPasscode(): ?string {
        return $this->passcode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeStringValue('passcode', $this->passcode);
    }

    /**
     * Sets the errorCode property value. RotateBitLockerKeys action error code. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the passcode property value. Newly generated passcode for the device
     *  @param string|null $value Value to set for the passcode property.
    */
    public function setPasscode(?string $value ): void {
        $this->passcode = $value;
    }

}
