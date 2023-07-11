<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CredentialUserRegistrationsSummary extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CredentialUserRegistrationsSummary {
        return new CredentialUserRegistrationsSummary();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            'mfaAndSsprCapableUserCount' => fn(ParseNode $n) => $o->setMfaAndSsprCapableUserCount($n->getIntegerValue()),
            'mfaConditionalAccessPolicyState' => fn(ParseNode $n) => $o->setMfaConditionalAccessPolicyState($n->getStringValue()),
            'mfaExcludedUserCount' => fn(ParseNode $n) => $o->setMfaExcludedUserCount($n->getIntegerValue()),
            'mfaRegisteredUserCount' => fn(ParseNode $n) => $o->setMfaRegisteredUserCount($n->getIntegerValue()),
            'securityDefaultsEnabled' => fn(ParseNode $n) => $o->setSecurityDefaultsEnabled($n->getBooleanValue()),
            'ssprEnabledUserCount' => fn(ParseNode $n) => $o->setSsprEnabledUserCount($n->getIntegerValue()),
            'ssprRegisteredUserCount' => fn(ParseNode $n) => $o->setSsprRegisteredUserCount($n->getIntegerValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'tenantLicenseType' => fn(ParseNode $n) => $o->setTenantLicenseType($n->getStringValue()),
            'totalUserCount' => fn(ParseNode $n) => $o->setTotalUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRefreshedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRefreshedDateTime'");
    }

    /**
     * Gets the mfaAndSsprCapableUserCount property value. The number of users that are capable of performing multi-factor authentication or self service password reset. Optional. Read-only.
     * @return int|null
    */
    public function getMfaAndSsprCapableUserCount(): ?int {
        $val = $this->getBackingStore()->get('mfaAndSsprCapableUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaAndSsprCapableUserCount'");
    }

    /**
     * Gets the mfaConditionalAccessPolicyState property value. The state of a conditional access policy that enforces multi-factor authentication. Optional. Read-only.
     * @return string|null
    */
    public function getMfaConditionalAccessPolicyState(): ?string {
        $val = $this->getBackingStore()->get('mfaConditionalAccessPolicyState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaConditionalAccessPolicyState'");
    }

    /**
     * Gets the mfaExcludedUserCount property value. The number of users in the multi-factor authentication exclusion security group (Microsoft 365 Lighthouse - MFA exclusions). Optional. Read-only.
     * @return int|null
    */
    public function getMfaExcludedUserCount(): ?int {
        $val = $this->getBackingStore()->get('mfaExcludedUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaExcludedUserCount'");
    }

    /**
     * Gets the mfaRegisteredUserCount property value. The number of users registered for multi-factor authentication. Optional. Read-only.
     * @return int|null
    */
    public function getMfaRegisteredUserCount(): ?int {
        $val = $this->getBackingStore()->get('mfaRegisteredUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaRegisteredUserCount'");
    }

    /**
     * Gets the securityDefaultsEnabled property value. A flag indicating whether Identity Security Defaults is enabled. Optional. Read-only.
     * @return bool|null
    */
    public function getSecurityDefaultsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('securityDefaultsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityDefaultsEnabled'");
    }

    /**
     * Gets the ssprEnabledUserCount property value. The number of users enabled for self service password reset. Optional. Read-only.
     * @return int|null
    */
    public function getSsprEnabledUserCount(): ?int {
        $val = $this->getBackingStore()->get('ssprEnabledUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ssprEnabledUserCount'");
    }

    /**
     * Gets the ssprRegisteredUserCount property value. The number of users registered for self service password reset. Optional. Read-only.
     * @return int|null
    */
    public function getSsprRegisteredUserCount(): ?int {
        $val = $this->getBackingStore()->get('ssprRegisteredUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ssprRegisteredUserCount'");
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        $val = $this->getBackingStore()->get('tenantDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantDisplayName'");
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the tenantLicenseType property value. The tenantLicenseType property
     * @return string|null
    */
    public function getTenantLicenseType(): ?string {
        $val = $this->getBackingStore()->get('tenantLicenseType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantLicenseType'");
    }

    /**
     * Gets the totalUserCount property value. The total number of users in the given managed tenant. Optional. Read-only.
     * @return int|null
    */
    public function getTotalUserCount(): ?int {
        $val = $this->getBackingStore()->get('totalUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
        $writer->writeIntegerValue('mfaAndSsprCapableUserCount', $this->getMfaAndSsprCapableUserCount());
        $writer->writeStringValue('mfaConditionalAccessPolicyState', $this->getMfaConditionalAccessPolicyState());
        $writer->writeIntegerValue('mfaExcludedUserCount', $this->getMfaExcludedUserCount());
        $writer->writeIntegerValue('mfaRegisteredUserCount', $this->getMfaRegisteredUserCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('securityDefaultsEnabled', $this->getSecurityDefaultsEnabled());
        $writer->writeIntegerValue('ssprEnabledUserCount', $this->getSsprEnabledUserCount());
        $writer->writeIntegerValue('ssprRegisteredUserCount', $this->getSsprRegisteredUserCount());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('tenantLicenseType', $this->getTenantLicenseType());
        $writer->writeIntegerValue('totalUserCount', $this->getTotalUserCount());
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

    /**
     * Sets the mfaAndSsprCapableUserCount property value. The number of users that are capable of performing multi-factor authentication or self service password reset. Optional. Read-only.
     * @param int|null $value Value to set for the mfaAndSsprCapableUserCount property.
    */
    public function setMfaAndSsprCapableUserCount(?int $value): void {
        $this->getBackingStore()->set('mfaAndSsprCapableUserCount', $value);
    }

    /**
     * Sets the mfaConditionalAccessPolicyState property value. The state of a conditional access policy that enforces multi-factor authentication. Optional. Read-only.
     * @param string|null $value Value to set for the mfaConditionalAccessPolicyState property.
    */
    public function setMfaConditionalAccessPolicyState(?string $value): void {
        $this->getBackingStore()->set('mfaConditionalAccessPolicyState', $value);
    }

    /**
     * Sets the mfaExcludedUserCount property value. The number of users in the multi-factor authentication exclusion security group (Microsoft 365 Lighthouse - MFA exclusions). Optional. Read-only.
     * @param int|null $value Value to set for the mfaExcludedUserCount property.
    */
    public function setMfaExcludedUserCount(?int $value): void {
        $this->getBackingStore()->set('mfaExcludedUserCount', $value);
    }

    /**
     * Sets the mfaRegisteredUserCount property value. The number of users registered for multi-factor authentication. Optional. Read-only.
     * @param int|null $value Value to set for the mfaRegisteredUserCount property.
    */
    public function setMfaRegisteredUserCount(?int $value): void {
        $this->getBackingStore()->set('mfaRegisteredUserCount', $value);
    }

    /**
     * Sets the securityDefaultsEnabled property value. A flag indicating whether Identity Security Defaults is enabled. Optional. Read-only.
     * @param bool|null $value Value to set for the securityDefaultsEnabled property.
    */
    public function setSecurityDefaultsEnabled(?bool $value): void {
        $this->getBackingStore()->set('securityDefaultsEnabled', $value);
    }

    /**
     * Sets the ssprEnabledUserCount property value. The number of users enabled for self service password reset. Optional. Read-only.
     * @param int|null $value Value to set for the ssprEnabledUserCount property.
    */
    public function setSsprEnabledUserCount(?int $value): void {
        $this->getBackingStore()->set('ssprEnabledUserCount', $value);
    }

    /**
     * Sets the ssprRegisteredUserCount property value. The number of users registered for self service password reset. Optional. Read-only.
     * @param int|null $value Value to set for the ssprRegisteredUserCount property.
    */
    public function setSsprRegisteredUserCount(?int $value): void {
        $this->getBackingStore()->set('ssprRegisteredUserCount', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the tenantLicenseType property value. The tenantLicenseType property
     * @param string|null $value Value to set for the tenantLicenseType property.
    */
    public function setTenantLicenseType(?string $value): void {
        $this->getBackingStore()->set('tenantLicenseType', $value);
    }

    /**
     * Sets the totalUserCount property value. The total number of users in the given managed tenant. Optional. Read-only.
     * @param int|null $value Value to set for the totalUserCount property.
    */
    public function setTotalUserCount(?int $value): void {
        $this->getBackingStore()->set('totalUserCount', $value);
    }

}
