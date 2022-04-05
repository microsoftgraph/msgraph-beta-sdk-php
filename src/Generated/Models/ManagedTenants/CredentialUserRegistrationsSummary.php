<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CredentialUserRegistrationsSummary extends Entity 
{
    /** @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only. */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /** @var int|null $mfaAndSsprCapableUserCount The number of users that are capable of performing multi-factor authentication or self service password reset. Optional. Read-only. */
    private ?int $mfaAndSsprCapableUserCount = null;
    
    /** @var string|null $mfaConditionalAccessPolicyState The state of a conditional access policy that enforces multi-factor authentication. Optional. Read-only. */
    private ?string $mfaConditionalAccessPolicyState = null;
    
    /** @var int|null $mfaRegisteredUserCount The number of users registered for multi-factor authentication. Optional. Read-only. */
    private ?int $mfaRegisteredUserCount = null;
    
    /** @var bool|null $securityDefaultsEnabled A flag indicating whether Identity Security Defaults is enabled. Optional. Read-only. */
    private ?bool $securityDefaultsEnabled = null;
    
    /** @var int|null $ssprEnabledUserCount The number of users enabled for self service password reset. Optional. Read-only. */
    private ?int $ssprEnabledUserCount = null;
    
    /** @var int|null $ssprRegisteredUserCount The number of users registered for self service password reset. Optional. Read-only. */
    private ?int $ssprRegisteredUserCount = null;
    
    /** @var string|null $tenantDisplayName The display name for the managed tenant. Required. Read-only. */
    private ?string $tenantDisplayName = null;
    
    /** @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only. */
    private ?string $tenantId = null;
    
    /** @var int|null $totalUserCount The total number of users in the given managed tenant. Optional. Read-only. */
    private ?int $totalUserCount = null;
    
    /**
     * Instantiates a new credentialUserRegistrationsSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CredentialUserRegistrationsSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CredentialUserRegistrationsSummary {
        return new CredentialUserRegistrationsSummary();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'lastRefreshedDateTime' => function (self $o, ParseNode $n) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
            'mfaAndSsprCapableUserCount' => function (self $o, ParseNode $n) { $o->setMfaAndSsprCapableUserCount($n->getIntegerValue()); },
            'mfaConditionalAccessPolicyState' => function (self $o, ParseNode $n) { $o->setMfaConditionalAccessPolicyState($n->getStringValue()); },
            'mfaRegisteredUserCount' => function (self $o, ParseNode $n) { $o->setMfaRegisteredUserCount($n->getIntegerValue()); },
            'securityDefaultsEnabled' => function (self $o, ParseNode $n) { $o->setSecurityDefaultsEnabled($n->getBooleanValue()); },
            'ssprEnabledUserCount' => function (self $o, ParseNode $n) { $o->setSsprEnabledUserCount($n->getIntegerValue()); },
            'ssprRegisteredUserCount' => function (self $o, ParseNode $n) { $o->setSsprRegisteredUserCount($n->getIntegerValue()); },
            'tenantDisplayName' => function (self $o, ParseNode $n) { $o->setTenantDisplayName($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'totalUserCount' => function (self $o, ParseNode $n) { $o->setTotalUserCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the mfaAndSsprCapableUserCount property value. The number of users that are capable of performing multi-factor authentication or self service password reset. Optional. Read-only.
     * @return int|null
    */
    public function getMfaAndSsprCapableUserCount(): ?int {
        return $this->mfaAndSsprCapableUserCount;
    }

    /**
     * Gets the mfaConditionalAccessPolicyState property value. The state of a conditional access policy that enforces multi-factor authentication. Optional. Read-only.
     * @return string|null
    */
    public function getMfaConditionalAccessPolicyState(): ?string {
        return $this->mfaConditionalAccessPolicyState;
    }

    /**
     * Gets the mfaRegisteredUserCount property value. The number of users registered for multi-factor authentication. Optional. Read-only.
     * @return int|null
    */
    public function getMfaRegisteredUserCount(): ?int {
        return $this->mfaRegisteredUserCount;
    }

    /**
     * Gets the securityDefaultsEnabled property value. A flag indicating whether Identity Security Defaults is enabled. Optional. Read-only.
     * @return bool|null
    */
    public function getSecurityDefaultsEnabled(): ?bool {
        return $this->securityDefaultsEnabled;
    }

    /**
     * Gets the ssprEnabledUserCount property value. The number of users enabled for self service password reset. Optional. Read-only.
     * @return int|null
    */
    public function getSsprEnabledUserCount(): ?int {
        return $this->ssprEnabledUserCount;
    }

    /**
     * Gets the ssprRegisteredUserCount property value. The number of users registered for self service password reset. Optional. Read-only.
     * @return int|null
    */
    public function getSsprRegisteredUserCount(): ?int {
        return $this->ssprRegisteredUserCount;
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->tenantDisplayName;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the totalUserCount property value. The total number of users in the given managed tenant. Optional. Read-only.
     * @return int|null
    */
    public function getTotalUserCount(): ?int {
        return $this->totalUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeIntegerValue('mfaAndSsprCapableUserCount', $this->mfaAndSsprCapableUserCount);
        $writer->writeStringValue('mfaConditionalAccessPolicyState', $this->mfaConditionalAccessPolicyState);
        $writer->writeIntegerValue('mfaRegisteredUserCount', $this->mfaRegisteredUserCount);
        $writer->writeBooleanValue('securityDefaultsEnabled', $this->securityDefaultsEnabled);
        $writer->writeIntegerValue('ssprEnabledUserCount', $this->ssprEnabledUserCount);
        $writer->writeIntegerValue('ssprRegisteredUserCount', $this->ssprRegisteredUserCount);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeIntegerValue('totalUserCount', $this->totalUserCount);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the mfaAndSsprCapableUserCount property value. The number of users that are capable of performing multi-factor authentication or self service password reset. Optional. Read-only.
     *  @param int|null $value Value to set for the mfaAndSsprCapableUserCount property.
    */
    public function setMfaAndSsprCapableUserCount(?int $value ): void {
        $this->mfaAndSsprCapableUserCount = $value;
    }

    /**
     * Sets the mfaConditionalAccessPolicyState property value. The state of a conditional access policy that enforces multi-factor authentication. Optional. Read-only.
     *  @param string|null $value Value to set for the mfaConditionalAccessPolicyState property.
    */
    public function setMfaConditionalAccessPolicyState(?string $value ): void {
        $this->mfaConditionalAccessPolicyState = $value;
    }

    /**
     * Sets the mfaRegisteredUserCount property value. The number of users registered for multi-factor authentication. Optional. Read-only.
     *  @param int|null $value Value to set for the mfaRegisteredUserCount property.
    */
    public function setMfaRegisteredUserCount(?int $value ): void {
        $this->mfaRegisteredUserCount = $value;
    }

    /**
     * Sets the securityDefaultsEnabled property value. A flag indicating whether Identity Security Defaults is enabled. Optional. Read-only.
     *  @param bool|null $value Value to set for the securityDefaultsEnabled property.
    */
    public function setSecurityDefaultsEnabled(?bool $value ): void {
        $this->securityDefaultsEnabled = $value;
    }

    /**
     * Sets the ssprEnabledUserCount property value. The number of users enabled for self service password reset. Optional. Read-only.
     *  @param int|null $value Value to set for the ssprEnabledUserCount property.
    */
    public function setSsprEnabledUserCount(?int $value ): void {
        $this->ssprEnabledUserCount = $value;
    }

    /**
     * Sets the ssprRegisteredUserCount property value. The number of users registered for self service password reset. Optional. Read-only.
     *  @param int|null $value Value to set for the ssprRegisteredUserCount property.
    */
    public function setSsprRegisteredUserCount(?int $value ): void {
        $this->ssprRegisteredUserCount = $value;
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value ): void {
        $this->tenantDisplayName = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the totalUserCount property value. The total number of users in the given managed tenant. Optional. Read-only.
     *  @param int|null $value Value to set for the totalUserCount property.
    */
    public function setTotalUserCount(?int $value ): void {
        $this->totalUserCount = $value;
    }

}
