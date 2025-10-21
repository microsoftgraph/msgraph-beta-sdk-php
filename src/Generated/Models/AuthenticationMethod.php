<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethod extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethod {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.emailAuthenticationMethod': return new EmailAuthenticationMethod();
                case '#microsoft.graph.externalAuthenticationMethod': return new ExternalAuthenticationMethod();
                case '#microsoft.graph.fido2AuthenticationMethod': return new Fido2AuthenticationMethod();
                case '#microsoft.graph.hardwareOathAuthenticationMethod': return new HardwareOathAuthenticationMethod();
                case '#microsoft.graph.microsoftAuthenticatorAuthenticationMethod': return new MicrosoftAuthenticatorAuthenticationMethod();
                case '#microsoft.graph.passwordAuthenticationMethod': return new PasswordAuthenticationMethod();
                case '#microsoft.graph.passwordlessMicrosoftAuthenticatorAuthenticationMethod': return new PasswordlessMicrosoftAuthenticatorAuthenticationMethod();
                case '#microsoft.graph.phoneAuthenticationMethod': return new PhoneAuthenticationMethod();
                case '#microsoft.graph.platformCredentialAuthenticationMethod': return new PlatformCredentialAuthenticationMethod();
                case '#microsoft.graph.qrCodePinAuthenticationMethod': return new QrCodePinAuthenticationMethod();
                case '#microsoft.graph.softwareOathAuthenticationMethod': return new SoftwareOathAuthenticationMethod();
                case '#microsoft.graph.temporaryAccessPassAuthenticationMethod': return new TemporaryAccessPassAuthenticationMethod();
                case '#microsoft.graph.windowsHelloForBusinessAuthenticationMethod': return new WindowsHelloForBusinessAuthenticationMethod();
            }
        }
        return new AuthenticationMethod();
    }

    /**
     * Gets the createdDateTime property value. The date and time the authentication method was registered to the user. Read-only. Optional. This optional value is null if the authentication method doesn't populate it. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastUsedDateTime' => fn(ParseNode $n) => $o->setLastUsedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastUsedDateTime property value. The date and time the authentication method was last used by the user. Read-only. Optional. This optional value is null if the authentication method doesn't populate it. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUsedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUsedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUsedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('lastUsedDateTime', $this->getLastUsedDateTime());
    }

    /**
     * Sets the createdDateTime property value. The date and time the authentication method was registered to the user. Read-only. Optional. This optional value is null if the authentication method doesn't populate it. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastUsedDateTime property value. The date and time the authentication method was last used by the user. Read-only. Optional. This optional value is null if the authentication method doesn't populate it. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUsedDateTime property.
    */
    public function setLastUsedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUsedDateTime', $value);
    }

}
