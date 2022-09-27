<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceComplianceLocalActionLockDeviceWithPasscode extends AndroidDeviceComplianceLocalActionBase implements Parsable 
{
    /**
     * @var string|null $passcode Passcode to reset to Android device. This property is read-only.
    */
    private ?string $passcode = null;
    
    /**
     * @var int|null $passcodeSignInFailureCountBeforeWipe Number of sign in failures before wiping device, the value can be 4-11. Valid values 4 to 11
    */
    private ?int $passcodeSignInFailureCountBeforeWipe = null;
    
    /**
     * Instantiates a new AndroidDeviceComplianceLocalActionLockDeviceWithPasscode and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceComplianceLocalActionLockDeviceWithPasscode');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceComplianceLocalActionLockDeviceWithPasscode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceComplianceLocalActionLockDeviceWithPasscode {
        return new AndroidDeviceComplianceLocalActionLockDeviceWithPasscode();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'passcodeSignInFailureCountBeforeWipe' => function (ParseNode $n) use ($o) { $o->setPasscodeSignInFailureCountBeforeWipe($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the passcode property value. Passcode to reset to Android device. This property is read-only.
     * @return string|null
    */
    public function getPasscode(): ?string {
        return $this->passcode;
    }

    /**
     * Gets the passcodeSignInFailureCountBeforeWipe property value. Number of sign in failures before wiping device, the value can be 4-11. Valid values 4 to 11
     * @return int|null
    */
    public function getPasscodeSignInFailureCountBeforeWipe(): ?int {
        return $this->passcodeSignInFailureCountBeforeWipe;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('passcodeSignInFailureCountBeforeWipe', $this->passcodeSignInFailureCountBeforeWipe);
    }

    /**
     * Sets the passcodeSignInFailureCountBeforeWipe property value. Number of sign in failures before wiping device, the value can be 4-11. Valid values 4 to 11
     *  @param int|null $value Value to set for the passcodeSignInFailureCountBeforeWipe property.
    */
    public function setPasscodeSignInFailureCountBeforeWipe(?int $value ): void {
        $this->passcodeSignInFailureCountBeforeWipe = $value;
    }

}
