<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2cAuthenticationMethodsPolicy extends Entity implements Parsable 
{
    /**
     * @var bool|null $isEmailPasswordAuthenticationEnabled The tenant admin can configure local accounts using email if the email and password authentication method is enabled.
    */
    private ?bool $isEmailPasswordAuthenticationEnabled = null;
    
    /**
     * @var bool|null $isPhoneOneTimePasswordAuthenticationEnabled The tenant admin can configure local accounts using phone number if the phone number and one-time password authentication method is enabled.
    */
    private ?bool $isPhoneOneTimePasswordAuthenticationEnabled = null;
    
    /**
     * @var bool|null $isUserNameAuthenticationEnabled The tenant admin can configure local accounts using username if the username and password authentication method is enabled.
    */
    private ?bool $isUserNameAuthenticationEnabled = null;
    
    /**
     * Instantiates a new B2cAuthenticationMethodsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.b2cAuthenticationMethodsPolicy');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isEmailPasswordAuthenticationEnabled' => function (ParseNode $n) use ($o) { $o->setIsEmailPasswordAuthenticationEnabled($n->getBooleanValue()); },
            'isPhoneOneTimePasswordAuthenticationEnabled' => function (ParseNode $n) use ($o) { $o->setIsPhoneOneTimePasswordAuthenticationEnabled($n->getBooleanValue()); },
            'isUserNameAuthenticationEnabled' => function (ParseNode $n) use ($o) { $o->setIsUserNameAuthenticationEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isEmailPasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using email if the email and password authentication method is enabled.
     * @return bool|null
    */
    public function getIsEmailPasswordAuthenticationEnabled(): ?bool {
        return $this->isEmailPasswordAuthenticationEnabled;
    }

    /**
     * Gets the isPhoneOneTimePasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using phone number if the phone number and one-time password authentication method is enabled.
     * @return bool|null
    */
    public function getIsPhoneOneTimePasswordAuthenticationEnabled(): ?bool {
        return $this->isPhoneOneTimePasswordAuthenticationEnabled;
    }

    /**
     * Gets the isUserNameAuthenticationEnabled property value. The tenant admin can configure local accounts using username if the username and password authentication method is enabled.
     * @return bool|null
    */
    public function getIsUserNameAuthenticationEnabled(): ?bool {
        return $this->isUserNameAuthenticationEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEmailPasswordAuthenticationEnabled', $this->isEmailPasswordAuthenticationEnabled);
        $writer->writeBooleanValue('isPhoneOneTimePasswordAuthenticationEnabled', $this->isPhoneOneTimePasswordAuthenticationEnabled);
        $writer->writeBooleanValue('isUserNameAuthenticationEnabled', $this->isUserNameAuthenticationEnabled);
    }

    /**
     * Sets the isEmailPasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using email if the email and password authentication method is enabled.
     *  @param bool|null $value Value to set for the isEmailPasswordAuthenticationEnabled property.
    */
    public function setIsEmailPasswordAuthenticationEnabled(?bool $value ): void {
        $this->isEmailPasswordAuthenticationEnabled = $value;
    }

    /**
     * Sets the isPhoneOneTimePasswordAuthenticationEnabled property value. The tenant admin can configure local accounts using phone number if the phone number and one-time password authentication method is enabled.
     *  @param bool|null $value Value to set for the isPhoneOneTimePasswordAuthenticationEnabled property.
    */
    public function setIsPhoneOneTimePasswordAuthenticationEnabled(?bool $value ): void {
        $this->isPhoneOneTimePasswordAuthenticationEnabled = $value;
    }

    /**
     * Sets the isUserNameAuthenticationEnabled property value. The tenant admin can configure local accounts using username if the username and password authentication method is enabled.
     *  @param bool|null $value Value to set for the isUserNameAuthenticationEnabled property.
    */
    public function setIsUserNameAuthenticationEnabled(?bool $value ): void {
        $this->isUserNameAuthenticationEnabled = $value;
    }

}
