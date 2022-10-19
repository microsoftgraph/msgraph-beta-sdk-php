<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CredentialUserRegistrationDetails extends Entity implements Parsable 
{
    /**
     * @var array<RegistrationAuthMethod>|null $authMethods Represents the authentication method that the user has registered. Possible values are: email, mobilePhone, officePhone,  securityQuestion (only used for self-service password reset), appNotification,  appCode, alternateMobilePhone (supported only in registration),  fido,  appPassword,  unknownFutureValue.
    */
    private ?array $authMethods = null;
    
    /**
     * @var bool|null $isCapable Indicates whether the user is ready to perform self-service password reset or MFA.
    */
    private ?bool $isCapable = null;
    
    /**
     * @var bool|null $isEnabled Indicates whether the user enabled to perform self-service password reset.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var bool|null $isMfaRegistered Indicates whether the user is registered for MFA.
    */
    private ?bool $isMfaRegistered = null;
    
    /**
     * @var bool|null $isRegistered Indicates whether the user has registered any authentication methods for self-service password reset.
    */
    private ?bool $isRegistered = null;
    
    /**
     * @var string|null $userDisplayName Provides the user name of the corresponding user.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userPrincipalName Provides the user principal name of the corresponding user.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new CredentialUserRegistrationDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.credentialUserRegistrationDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CredentialUserRegistrationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CredentialUserRegistrationDetails {
        return new CredentialUserRegistrationDetails();
    }

    /**
     * Gets the authMethods property value. Represents the authentication method that the user has registered. Possible values are: email, mobilePhone, officePhone,  securityQuestion (only used for self-service password reset), appNotification,  appCode, alternateMobilePhone (supported only in registration),  fido,  appPassword,  unknownFutureValue.
     * @return array<RegistrationAuthMethod>|null
    */
    public function getAuthMethods(): ?array {
        return $this->authMethods;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authMethods' => fn(ParseNode $n) => $o->setAuthMethods($n->getCollectionOfEnumValues(RegistrationAuthMethod::class)),
            'isCapable' => fn(ParseNode $n) => $o->setIsCapable($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'isMfaRegistered' => fn(ParseNode $n) => $o->setIsMfaRegistered($n->getBooleanValue()),
            'isRegistered' => fn(ParseNode $n) => $o->setIsRegistered($n->getBooleanValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isCapable property value. Indicates whether the user is ready to perform self-service password reset or MFA.
     * @return bool|null
    */
    public function getIsCapable(): ?bool {
        return $this->isCapable;
    }

    /**
     * Gets the isEnabled property value. Indicates whether the user enabled to perform self-service password reset.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the isMfaRegistered property value. Indicates whether the user is registered for MFA.
     * @return bool|null
    */
    public function getIsMfaRegistered(): ?bool {
        return $this->isMfaRegistered;
    }

    /**
     * Gets the isRegistered property value. Indicates whether the user has registered any authentication methods for self-service password reset.
     * @return bool|null
    */
    public function getIsRegistered(): ?bool {
        return $this->isRegistered;
    }

    /**
     * Gets the userDisplayName property value. Provides the user name of the corresponding user.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userPrincipalName property value. Provides the user principal name of the corresponding user.
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
        $writer->writeCollectionOfEnumValues('authMethods', $this->authMethods);
        $writer->writeBooleanValue('isCapable', $this->isCapable);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeBooleanValue('isMfaRegistered', $this->isMfaRegistered);
        $writer->writeBooleanValue('isRegistered', $this->isRegistered);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the authMethods property value. Represents the authentication method that the user has registered. Possible values are: email, mobilePhone, officePhone,  securityQuestion (only used for self-service password reset), appNotification,  appCode, alternateMobilePhone (supported only in registration),  fido,  appPassword,  unknownFutureValue.
     *  @param array<RegistrationAuthMethod>|null $value Value to set for the authMethods property.
    */
    public function setAuthMethods(?array $value ): void {
        $this->authMethods = $value;
    }

    /**
     * Sets the isCapable property value. Indicates whether the user is ready to perform self-service password reset or MFA.
     *  @param bool|null $value Value to set for the isCapable property.
    */
    public function setIsCapable(?bool $value ): void {
        $this->isCapable = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether the user enabled to perform self-service password reset.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the isMfaRegistered property value. Indicates whether the user is registered for MFA.
     *  @param bool|null $value Value to set for the isMfaRegistered property.
    */
    public function setIsMfaRegistered(?bool $value ): void {
        $this->isMfaRegistered = $value;
    }

    /**
     * Sets the isRegistered property value. Indicates whether the user has registered any authentication methods for self-service password reset.
     *  @param bool|null $value Value to set for the isRegistered property.
    */
    public function setIsRegistered(?bool $value ): void {
        $this->isRegistered = $value;
    }

    /**
     * Sets the userDisplayName property value. Provides the user name of the corresponding user.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. Provides the user principal name of the corresponding user.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
