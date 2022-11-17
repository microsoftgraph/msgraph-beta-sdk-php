<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserRegistrationDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new userRegistrationDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userRegistrationDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationDetails {
        return new UserRegistrationDetails();
    }

    /**
     * Gets the defaultMfaMethod property value. The method the user or admin selected as default for performing multi-factor authentication for the user. The possible values are: none, mobilePhone, alternateMobilePhone, officePhone, microsoftAuthenticatorPush, softwareOneTimePasscode, unknownFutureValue.
     * @return DefaultMfaMethodType|null
    */
    public function getDefaultMfaMethod(): ?DefaultMfaMethodType {
        return $this->getBackingStore()->get('defaultMfaMethod');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultMfaMethod' => fn(ParseNode $n) => $o->setDefaultMfaMethod($n->getEnumValue(DefaultMfaMethodType::class)),
            'isAdmin' => fn(ParseNode $n) => $o->setIsAdmin($n->getBooleanValue()),
            'isMfaCapable' => fn(ParseNode $n) => $o->setIsMfaCapable($n->getBooleanValue()),
            'isMfaRegistered' => fn(ParseNode $n) => $o->setIsMfaRegistered($n->getBooleanValue()),
            'isPasswordlessCapable' => fn(ParseNode $n) => $o->setIsPasswordlessCapable($n->getBooleanValue()),
            'isSsprCapable' => fn(ParseNode $n) => $o->setIsSsprCapable($n->getBooleanValue()),
            'isSsprEnabled' => fn(ParseNode $n) => $o->setIsSsprEnabled($n->getBooleanValue()),
            'isSsprRegistered' => fn(ParseNode $n) => $o->setIsSsprRegistered($n->getBooleanValue()),
            'methodsRegistered' => fn(ParseNode $n) => $o->setMethodsRegistered($n->getCollectionOfPrimitiveValues()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(SignInUserType::class)),
        ]);
    }

    /**
     * Gets the isAdmin property value. Whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of.
     * @return bool|null
    */
    public function getIsAdmin(): ?bool {
        return $this->getBackingStore()->get('isAdmin');
    }

    /**
     * Gets the isMfaCapable property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsMfaCapable(): ?bool {
        return $this->getBackingStore()->get('isMfaCapable');
    }

    /**
     * Gets the isMfaRegistered property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method may not necessarily be allowed by the authentication methods policy.  Supports $filter (eq).
     * @return bool|null
    */
    public function getIsMfaRegistered(): ?bool {
        return $this->getBackingStore()->get('isMfaRegistered');
    }

    /**
     * Gets the isPasswordlessCapable property value. Whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsPasswordlessCapable(): ?bool {
        return $this->getBackingStore()->get('isPasswordlessCapable');
    }

    /**
     * Gets the isSsprCapable property value. Whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprCapable(): ?bool {
        return $this->getBackingStore()->get('isSsprCapable');
    }

    /**
     * Gets the isSsprEnabled property value. Whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprEnabled(): ?bool {
        return $this->getBackingStore()->get('isSsprEnabled');
    }

    /**
     * Gets the isSsprRegistered property value. Whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprRegistered(): ?bool {
        return $this->getBackingStore()->get('isSsprRegistered');
    }

    /**
     * Gets the methodsRegistered property value. Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
     * @return array<string>|null
    */
    public function getMethodsRegistered(): ?array {
        return $this->getBackingStore()->get('methodsRegistered');
    }

    /**
     * Gets the userDisplayName property value. The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderBy.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userPrincipalName property value. The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderBy.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the userType property value. Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
     * @return SignInUserType|null
    */
    public function getUserType(): ?SignInUserType {
        return $this->getBackingStore()->get('userType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('defaultMfaMethod', $this->getDefaultMfaMethod());
        $writer->writeBooleanValue('isAdmin', $this->getIsAdmin());
        $writer->writeBooleanValue('isMfaCapable', $this->getIsMfaCapable());
        $writer->writeBooleanValue('isMfaRegistered', $this->getIsMfaRegistered());
        $writer->writeBooleanValue('isPasswordlessCapable', $this->getIsPasswordlessCapable());
        $writer->writeBooleanValue('isSsprCapable', $this->getIsSsprCapable());
        $writer->writeBooleanValue('isSsprEnabled', $this->getIsSsprEnabled());
        $writer->writeBooleanValue('isSsprRegistered', $this->getIsSsprRegistered());
        $writer->writeCollectionOfPrimitiveValues('methodsRegistered', $this->getMethodsRegistered());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the defaultMfaMethod property value. The method the user or admin selected as default for performing multi-factor authentication for the user. The possible values are: none, mobilePhone, alternateMobilePhone, officePhone, microsoftAuthenticatorPush, softwareOneTimePasscode, unknownFutureValue.
     *  @param DefaultMfaMethodType|null $value Value to set for the defaultMfaMethod property.
    */
    public function setDefaultMfaMethod(?DefaultMfaMethodType $value): void {
        $this->getBackingStore()->set('defaultMfaMethod', $value);
    }

    /**
     * Sets the isAdmin property value. Whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of.
     *  @param bool|null $value Value to set for the isAdmin property.
    */
    public function setIsAdmin(?bool $value): void {
        $this->getBackingStore()->set('isAdmin', $value);
    }

    /**
     * Sets the isMfaCapable property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isMfaCapable property.
    */
    public function setIsMfaCapable(?bool $value): void {
        $this->getBackingStore()->set('isMfaCapable', $value);
    }

    /**
     * Sets the isMfaRegistered property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method may not necessarily be allowed by the authentication methods policy.  Supports $filter (eq).
     *  @param bool|null $value Value to set for the isMfaRegistered property.
    */
    public function setIsMfaRegistered(?bool $value): void {
        $this->getBackingStore()->set('isMfaRegistered', $value);
    }

    /**
     * Sets the isPasswordlessCapable property value. Whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isPasswordlessCapable property.
    */
    public function setIsPasswordlessCapable(?bool $value): void {
        $this->getBackingStore()->set('isPasswordlessCapable', $value);
    }

    /**
     * Sets the isSsprCapable property value. Whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isSsprCapable property.
    */
    public function setIsSsprCapable(?bool $value): void {
        $this->getBackingStore()->set('isSsprCapable', $value);
    }

    /**
     * Sets the isSsprEnabled property value. Whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isSsprEnabled property.
    */
    public function setIsSsprEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSsprEnabled', $value);
    }

    /**
     * Sets the isSsprRegistered property value. Whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isSsprRegistered property.
    */
    public function setIsSsprRegistered(?bool $value): void {
        $this->getBackingStore()->set('isSsprRegistered', $value);
    }

    /**
     * Sets the methodsRegistered property value. Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
     *  @param array<string>|null $value Value to set for the methodsRegistered property.
    */
    public function setMethodsRegistered(?array $value): void {
        $this->getBackingStore()->set('methodsRegistered', $value);
    }

    /**
     * Sets the userDisplayName property value. The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderBy.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderBy.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
     *  @param SignInUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?SignInUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
