<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserRegistrationDetails extends Entity 
{
    /** @var bool|null $isMfaCapable Whether the user has registered a strong authentication method for multi-factor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq). */
    private ?bool $isMfaCapable = null;
    
    /** @var bool|null $isMfaRegistered Whether the user has registered a strong authentication method for multi-factor authentication. The method may not necessarily be allowed by the authentication methods policy.  Supports $filter (eq). */
    private ?bool $isMfaRegistered = null;
    
    /** @var bool|null $isPasswordlessCapable Whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq). */
    private ?bool $isPasswordlessCapable = null;
    
    /** @var bool|null $isSsprCapable Whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq). */
    private ?bool $isSsprCapable = null;
    
    /** @var bool|null $isSsprEnabled Whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq). */
    private ?bool $isSsprEnabled = null;
    
    /** @var bool|null $isSsprRegistered Whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq). */
    private ?bool $isSsprRegistered = null;
    
    /** @var array<string>|null $methodsRegistered Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq). */
    private ?array $methodsRegistered = null;
    
    /** @var string|null $userDisplayName The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderBy. */
    private ?string $userDisplayName = null;
    
    /** @var string|null $userPrincipalName The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderBy. */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new userRegistrationDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationDetails
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationDetails {
        return new UserRegistrationDetails();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'isMfaCapable' => function (self $o, ParseNode $n) { $o->setIsMfaCapable($n->getBooleanValue()); },
            'isMfaRegistered' => function (self $o, ParseNode $n) { $o->setIsMfaRegistered($n->getBooleanValue()); },
            'isPasswordlessCapable' => function (self $o, ParseNode $n) { $o->setIsPasswordlessCapable($n->getBooleanValue()); },
            'isSsprCapable' => function (self $o, ParseNode $n) { $o->setIsSsprCapable($n->getBooleanValue()); },
            'isSsprEnabled' => function (self $o, ParseNode $n) { $o->setIsSsprEnabled($n->getBooleanValue()); },
            'isSsprRegistered' => function (self $o, ParseNode $n) { $o->setIsSsprRegistered($n->getBooleanValue()); },
            'methodsRegistered' => function (self $o, ParseNode $n) { $o->setMethodsRegistered($n->getCollectionOfPrimitiveValues()); },
            'userDisplayName' => function (self $o, ParseNode $n) { $o->setUserDisplayName($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isMfaCapable property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsMfaCapable(): ?bool {
        return $this->isMfaCapable;
    }

    /**
     * Gets the isMfaRegistered property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method may not necessarily be allowed by the authentication methods policy.  Supports $filter (eq).
     * @return bool|null
    */
    public function getIsMfaRegistered(): ?bool {
        return $this->isMfaRegistered;
    }

    /**
     * Gets the isPasswordlessCapable property value. Whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsPasswordlessCapable(): ?bool {
        return $this->isPasswordlessCapable;
    }

    /**
     * Gets the isSsprCapable property value. Whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprCapable(): ?bool {
        return $this->isSsprCapable;
    }

    /**
     * Gets the isSsprEnabled property value. Whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprEnabled(): ?bool {
        return $this->isSsprEnabled;
    }

    /**
     * Gets the isSsprRegistered property value. Whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsSsprRegistered(): ?bool {
        return $this->isSsprRegistered;
    }

    /**
     * Gets the methodsRegistered property value. Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
     * @return array<string>|null
    */
    public function getMethodsRegistered(): ?array {
        return $this->methodsRegistered;
    }

    /**
     * Gets the userDisplayName property value. The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderBy.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderBy.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isMfaCapable', $this->isMfaCapable);
        $writer->writeBooleanValue('isMfaRegistered', $this->isMfaRegistered);
        $writer->writeBooleanValue('isPasswordlessCapable', $this->isPasswordlessCapable);
        $writer->writeBooleanValue('isSsprCapable', $this->isSsprCapable);
        $writer->writeBooleanValue('isSsprEnabled', $this->isSsprEnabled);
        $writer->writeBooleanValue('isSsprRegistered', $this->isSsprRegistered);
        $writer->writeCollectionOfPrimitiveValues('methodsRegistered', $this->methodsRegistered);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the isMfaCapable property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isMfaCapable property.
    */
    public function setIsMfaCapable(?bool $value ): void {
        $this->isMfaCapable = $value;
    }

    /**
     * Sets the isMfaRegistered property value. Whether the user has registered a strong authentication method for multi-factor authentication. The method may not necessarily be allowed by the authentication methods policy.  Supports $filter (eq).
     *  @param bool|null $value Value to set for the isMfaRegistered property.
    */
    public function setIsMfaRegistered(?bool $value ): void {
        $this->isMfaRegistered = $value;
    }

    /**
     * Sets the isPasswordlessCapable property value. Whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isPasswordlessCapable property.
    */
    public function setIsPasswordlessCapable(?bool $value ): void {
        $this->isPasswordlessCapable = $value;
    }

    /**
     * Sets the isSsprCapable property value. Whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isSsprCapable property.
    */
    public function setIsSsprCapable(?bool $value ): void {
        $this->isSsprCapable = $value;
    }

    /**
     * Sets the isSsprEnabled property value. Whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isSsprEnabled property.
    */
    public function setIsSsprEnabled(?bool $value ): void {
        $this->isSsprEnabled = $value;
    }

    /**
     * Sets the isSsprRegistered property value. Whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isSsprRegistered property.
    */
    public function setIsSsprRegistered(?bool $value ): void {
        $this->isSsprRegistered = $value;
    }

    /**
     * Sets the methodsRegistered property value. Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
     *  @param array<string>|null $value Value to set for the methodsRegistered property.
    */
    public function setMethodsRegistered(?array $value ): void {
        $this->methodsRegistered = $value;
    }

    /**
     * Sets the userDisplayName property value. The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderBy.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderBy.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
