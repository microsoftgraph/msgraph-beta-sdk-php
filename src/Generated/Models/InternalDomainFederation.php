<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InternalDomainFederation extends SamlOrWsFedProvider 
{
    /** @var string|null $activeSignInUri The activeSignInUri property */
    private ?string $activeSignInUri = null;
    
    /** @var FederatedIdpMfaBehavior|null $federatedIdpMfaBehavior The federatedIdpMfaBehavior property */
    private ?FederatedIdpMfaBehavior $federatedIdpMfaBehavior = null;
    
    /** @var bool|null $isSignedAuthenticationRequestRequired The isSignedAuthenticationRequestRequired property */
    private ?bool $isSignedAuthenticationRequestRequired = null;
    
    /** @var string|null $nextSigningCertificate The nextSigningCertificate property */
    private ?string $nextSigningCertificate = null;
    
    /** @var PromptLoginBehavior|null $promptLoginBehavior The promptLoginBehavior property */
    private ?PromptLoginBehavior $promptLoginBehavior = null;
    
    /** @var SigningCertificateUpdateStatus|null $signingCertificateUpdateStatus The signingCertificateUpdateStatus property */
    private ?SigningCertificateUpdateStatus $signingCertificateUpdateStatus = null;
    
    /** @var string|null $signOutUri The signOutUri property */
    private ?string $signOutUri = null;
    
    /**
     * Instantiates a new internalDomainFederation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InternalDomainFederation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InternalDomainFederation {
        return new InternalDomainFederation();
    }

    /**
     * Gets the activeSignInUri property value. The activeSignInUri property
     * @return string|null
    */
    public function getActiveSignInUri(): ?string {
        return $this->activeSignInUri;
    }

    /**
     * Gets the federatedIdpMfaBehavior property value. The federatedIdpMfaBehavior property
     * @return FederatedIdpMfaBehavior|null
    */
    public function getFederatedIdpMfaBehavior(): ?FederatedIdpMfaBehavior {
        return $this->federatedIdpMfaBehavior;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activeSignInUri' => function (self $o, ParseNode $n) { $o->setActiveSignInUri($n->getStringValue()); },
            'federatedIdpMfaBehavior' => function (self $o, ParseNode $n) { $o->setFederatedIdpMfaBehavior($n->getEnumValue(FederatedIdpMfaBehavior::class)); },
            'isSignedAuthenticationRequestRequired' => function (self $o, ParseNode $n) { $o->setIsSignedAuthenticationRequestRequired($n->getBooleanValue()); },
            'nextSigningCertificate' => function (self $o, ParseNode $n) { $o->setNextSigningCertificate($n->getStringValue()); },
            'promptLoginBehavior' => function (self $o, ParseNode $n) { $o->setPromptLoginBehavior($n->getEnumValue(PromptLoginBehavior::class)); },
            'signingCertificateUpdateStatus' => function (self $o, ParseNode $n) { $o->setSigningCertificateUpdateStatus($n->getObjectValue(SigningCertificateUpdateStatus::class)); },
            'signOutUri' => function (self $o, ParseNode $n) { $o->setSignOutUri($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isSignedAuthenticationRequestRequired property value. The isSignedAuthenticationRequestRequired property
     * @return bool|null
    */
    public function getIsSignedAuthenticationRequestRequired(): ?bool {
        return $this->isSignedAuthenticationRequestRequired;
    }

    /**
     * Gets the nextSigningCertificate property value. The nextSigningCertificate property
     * @return string|null
    */
    public function getNextSigningCertificate(): ?string {
        return $this->nextSigningCertificate;
    }

    /**
     * Gets the promptLoginBehavior property value. The promptLoginBehavior property
     * @return PromptLoginBehavior|null
    */
    public function getPromptLoginBehavior(): ?PromptLoginBehavior {
        return $this->promptLoginBehavior;
    }

    /**
     * Gets the signingCertificateUpdateStatus property value. The signingCertificateUpdateStatus property
     * @return SigningCertificateUpdateStatus|null
    */
    public function getSigningCertificateUpdateStatus(): ?SigningCertificateUpdateStatus {
        return $this->signingCertificateUpdateStatus;
    }

    /**
     * Gets the signOutUri property value. The signOutUri property
     * @return string|null
    */
    public function getSignOutUri(): ?string {
        return $this->signOutUri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeSignInUri', $this->activeSignInUri);
        $writer->writeEnumValue('federatedIdpMfaBehavior', $this->federatedIdpMfaBehavior);
        $writer->writeBooleanValue('isSignedAuthenticationRequestRequired', $this->isSignedAuthenticationRequestRequired);
        $writer->writeStringValue('nextSigningCertificate', $this->nextSigningCertificate);
        $writer->writeEnumValue('promptLoginBehavior', $this->promptLoginBehavior);
        $writer->writeObjectValue('signingCertificateUpdateStatus', $this->signingCertificateUpdateStatus);
        $writer->writeStringValue('signOutUri', $this->signOutUri);
    }

    /**
     * Sets the activeSignInUri property value. The activeSignInUri property
     *  @param string|null $value Value to set for the activeSignInUri property.
    */
    public function setActiveSignInUri(?string $value ): void {
        $this->activeSignInUri = $value;
    }

    /**
     * Sets the federatedIdpMfaBehavior property value. The federatedIdpMfaBehavior property
     *  @param FederatedIdpMfaBehavior|null $value Value to set for the federatedIdpMfaBehavior property.
    */
    public function setFederatedIdpMfaBehavior(?FederatedIdpMfaBehavior $value ): void {
        $this->federatedIdpMfaBehavior = $value;
    }

    /**
     * Sets the isSignedAuthenticationRequestRequired property value. The isSignedAuthenticationRequestRequired property
     *  @param bool|null $value Value to set for the isSignedAuthenticationRequestRequired property.
    */
    public function setIsSignedAuthenticationRequestRequired(?bool $value ): void {
        $this->isSignedAuthenticationRequestRequired = $value;
    }

    /**
     * Sets the nextSigningCertificate property value. The nextSigningCertificate property
     *  @param string|null $value Value to set for the nextSigningCertificate property.
    */
    public function setNextSigningCertificate(?string $value ): void {
        $this->nextSigningCertificate = $value;
    }

    /**
     * Sets the promptLoginBehavior property value. The promptLoginBehavior property
     *  @param PromptLoginBehavior|null $value Value to set for the promptLoginBehavior property.
    */
    public function setPromptLoginBehavior(?PromptLoginBehavior $value ): void {
        $this->promptLoginBehavior = $value;
    }

    /**
     * Sets the signingCertificateUpdateStatus property value. The signingCertificateUpdateStatus property
     *  @param SigningCertificateUpdateStatus|null $value Value to set for the signingCertificateUpdateStatus property.
    */
    public function setSigningCertificateUpdateStatus(?SigningCertificateUpdateStatus $value ): void {
        $this->signingCertificateUpdateStatus = $value;
    }

    /**
     * Sets the signOutUri property value. The signOutUri property
     *  @param string|null $value Value to set for the signOutUri property.
    */
    public function setSignOutUri(?string $value ): void {
        $this->signOutUri = $value;
    }

}
