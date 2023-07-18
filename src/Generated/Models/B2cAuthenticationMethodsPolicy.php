<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2cAuthenticationMethodsPolicy extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new b2cAuthenticationMethodsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return B2cAuthenticationMethodsPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): B2cAuthenticationMethodsPolicy {
        return new B2cAuthenticationMethodsPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isEmailPasswordAuthenticationEnabled' => fn(ParseNode $n) => $o->setIsEmailPasswordAuthenticationEnabled($n->getBooleanValue()),
            'isPhoneOneTimePasswordAuthenticationEnabled' => fn(ParseNode $n) => $o->setIsPhoneOneTimePasswordAuthenticationEnabled($n->getBooleanValue()),
            'isUserNameAuthenticationEnabled' => fn(ParseNode $n) => $o->setIsUserNameAuthenticationEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isEmailPasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using email if the email and password authentication method is enabled.
     * @return bool|null
    */
    public function getIsEmailPasswordAuthenticationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEmailPasswordAuthenticationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEmailPasswordAuthenticationEnabled'");
    }

    /**
     * Gets the isPhoneOneTimePasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using phone number if the phone number and one-time password authentication method is enabled.
     * @return bool|null
    */
    public function getIsPhoneOneTimePasswordAuthenticationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isPhoneOneTimePasswordAuthenticationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPhoneOneTimePasswordAuthenticationEnabled'");
    }

    /**
     * Gets the isUserNameAuthenticationEnabled property value. The tenant admin can configure local accounts using username if the username and password authentication method is enabled.
     * @return bool|null
    */
    public function getIsUserNameAuthenticationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isUserNameAuthenticationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUserNameAuthenticationEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEmailPasswordAuthenticationEnabled', $this->getIsEmailPasswordAuthenticationEnabled());
        $writer->writeBooleanValue('isPhoneOneTimePasswordAuthenticationEnabled', $this->getIsPhoneOneTimePasswordAuthenticationEnabled());
        $writer->writeBooleanValue('isUserNameAuthenticationEnabled', $this->getIsUserNameAuthenticationEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the isEmailPasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using email if the email and password authentication method is enabled.
     * @param bool|null $value Value to set for the isEmailPasswordAuthenticationEnabled property.
    */
    public function setIsEmailPasswordAuthenticationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEmailPasswordAuthenticationEnabled', $value);
    }

    /**
     * Sets the isPhoneOneTimePasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using phone number if the phone number and one-time password authentication method is enabled.
     * @param bool|null $value Value to set for the isPhoneOneTimePasswordAuthenticationEnabled property.
    */
    public function setIsPhoneOneTimePasswordAuthenticationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPhoneOneTimePasswordAuthenticationEnabled', $value);
    }

    /**
     * Sets the isUserNameAuthenticationEnabled property value. The tenant admin can configure local accounts using username if the username and password authentication method is enabled.
     * @param bool|null $value Value to set for the isUserNameAuthenticationEnabled property.
    */
    public function setIsUserNameAuthenticationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isUserNameAuthenticationEnabled', $value);
    }

}
