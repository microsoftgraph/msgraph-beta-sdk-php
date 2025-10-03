<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OidcInboundClaimMappingOverride implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OidcInboundClaimMappingOverride and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OidcInboundClaimMappingOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OidcInboundClaimMappingOverride {
        return new OidcInboundClaimMappingOverride();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the address property value. End-user's preferred postal address. The value of the address member is a JSON RFC8259 structure containing some or all of the members defined in the resource type
     * @return OidcAddressInboundClaims|null
    */
    public function getAddress(): ?OidcAddressInboundClaims {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || $val instanceof OidcAddressInboundClaims) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the email property value. End-user's preferred e-mail address. Its value MUST conform to the RFC 5322 addr-spec syntax.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * Gets the email_verified property value. True if the end-user's e-mail address has been verified by the identity provider; otherwise, false. When this claim value is true, this means that your identity provider took affirmative steps to ensure that this e-mail address was controlled by the end-user at the time the verification was performed. If this claim value is false, or not mapped with any claim of the identity provider, the user is asked to verify email during sign-up if email is required in the user flow.
     * @return string|null
    */
    public function getEmailVerified(): ?string {
        $val = $this->getBackingStore()->get('email_verified');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email_verified'");
    }

    /**
     * Gets the family_name property value. Surname(s) or family name of the end-user.
     * @return string|null
    */
    public function getFamilyName(): ?string {
        $val = $this->getBackingStore()->get('family_name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'family_name'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([OidcAddressInboundClaims::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'email_verified' => fn(ParseNode $n) => $o->setEmailVerified($n->getStringValue()),
            'family_name' => fn(ParseNode $n) => $o->setFamilyName($n->getStringValue()),
            'given_name' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'phone_number' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phone_number_verified' => fn(ParseNode $n) => $o->setPhoneNumberVerified($n->getStringValue()),
            'sub' => fn(ParseNode $n) => $o->setSub($n->getStringValue()),
        ];
    }

    /**
     * Gets the given_name property value. Given name(s) or first name(s) of the end-user.
     * @return string|null
    */
    public function getGivenName(): ?string {
        $val = $this->getBackingStore()->get('given_name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'given_name'");
    }

    /**
     * Gets the name property value. End-user's full name in displayable form including all name parts, possibly including titles and suffixes, ordered according to the end-user's locale and preferences.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the phone_number property value. The claim provides the phone number for the user.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phone_number');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phone_number'");
    }

    /**
     * Gets the phone_number_verified property value. True if the end-user's phone number has been verified; otherwise, false. When this claim value is true, this means that your identity provider took affirmative steps to verify the phone number.
     * @return string|null
    */
    public function getPhoneNumberVerified(): ?string {
        $val = $this->getBackingStore()->get('phone_number_verified');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phone_number_verified'");
    }

    /**
     * Gets the sub property value. Subject - Identifier for the end-user at the Issuer.
     * @return string|null
    */
    public function getSub(): ?string {
        $val = $this->getBackingStore()->get('sub');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sub'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('email_verified', $this->getEmailVerified());
        $writer->writeStringValue('family_name', $this->getFamilyName());
        $writer->writeStringValue('given_name', $this->getGivenName());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('phone_number', $this->getPhoneNumber());
        $writer->writeStringValue('phone_number_verified', $this->getPhoneNumberVerified());
        $writer->writeStringValue('sub', $this->getSub());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the address property value. End-user's preferred postal address. The value of the address member is a JSON RFC8259 structure containing some or all of the members defined in the resource type
     * @param OidcAddressInboundClaims|null $value Value to set for the address property.
    */
    public function setAddress(?OidcAddressInboundClaims $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the email property value. End-user's preferred e-mail address. Its value MUST conform to the RFC 5322 addr-spec syntax.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the email_verified property value. True if the end-user's e-mail address has been verified by the identity provider; otherwise, false. When this claim value is true, this means that your identity provider took affirmative steps to ensure that this e-mail address was controlled by the end-user at the time the verification was performed. If this claim value is false, or not mapped with any claim of the identity provider, the user is asked to verify email during sign-up if email is required in the user flow.
     * @param string|null $value Value to set for the email_verified property.
    */
    public function setEmailVerified(?string $value): void {
        $this->getBackingStore()->set('email_verified', $value);
    }

    /**
     * Sets the family_name property value. Surname(s) or family name of the end-user.
     * @param string|null $value Value to set for the family_name property.
    */
    public function setFamilyName(?string $value): void {
        $this->getBackingStore()->set('family_name', $value);
    }

    /**
     * Sets the given_name property value. Given name(s) or first name(s) of the end-user.
     * @param string|null $value Value to set for the given_name property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('given_name', $value);
    }

    /**
     * Sets the name property value. End-user's full name in displayable form including all name parts, possibly including titles and suffixes, ordered according to the end-user's locale and preferences.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the phone_number property value. The claim provides the phone number for the user.
     * @param string|null $value Value to set for the phone_number property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phone_number', $value);
    }

    /**
     * Sets the phone_number_verified property value. True if the end-user's phone number has been verified; otherwise, false. When this claim value is true, this means that your identity provider took affirmative steps to verify the phone number.
     * @param string|null $value Value to set for the phone_number_verified property.
    */
    public function setPhoneNumberVerified(?string $value): void {
        $this->getBackingStore()->set('phone_number_verified', $value);
    }

    /**
     * Sets the sub property value. Subject - Identifier for the end-user at the Issuer.
     * @param string|null $value Value to set for the sub property.
    */
    public function setSub(?string $value): void {
        $this->getBackingStore()->set('sub', $value);
    }

}
