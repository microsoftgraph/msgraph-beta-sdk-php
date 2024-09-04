<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminsMfaEnforcedSecurityRequirement extends SecurityRequirement implements Parsable 
{
    /**
     * Instantiates a new AdminsMfaEnforcedSecurityRequirement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminsMfaEnforcedSecurityRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminsMfaEnforcedSecurityRequirement {
        return new AdminsMfaEnforcedSecurityRequirement();
    }

    /**
     * Gets the adminsRequiredNotUsingMfaCount property value. The number of admins who are required to use MFA, but haven't completed registration.
     * @return int|null
    */
    public function getAdminsRequiredNotUsingMfaCount(): ?int {
        $val = $this->getBackingStore()->get('adminsRequiredNotUsingMfaCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminsRequiredNotUsingMfaCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adminsRequiredNotUsingMfaCount' => fn(ParseNode $n) => $o->setAdminsRequiredNotUsingMfaCount($n->getIntegerValue()),
            'legacyPerUserMfaStatus' => fn(ParseNode $n) => $o->setLegacyPerUserMfaStatus($n->getEnumValue(PolicyStatus::class)),
            'mfaConditionalAccessPolicyStatus' => fn(ParseNode $n) => $o->setMfaConditionalAccessPolicyStatus($n->getEnumValue(PolicyStatus::class)),
            'mfaEnabledAdminsCount' => fn(ParseNode $n) => $o->setMfaEnabledAdminsCount($n->getIntegerValue()),
            'mfaEnabledUsersCount' => fn(ParseNode $n) => $o->setMfaEnabledUsersCount($n->getIntegerValue()),
            'securityDefaultsStatus' => fn(ParseNode $n) => $o->setSecurityDefaultsStatus($n->getEnumValue(PolicyStatus::class)),
            'totalAdminsCount' => fn(ParseNode $n) => $o->setTotalAdminsCount($n->getIntegerValue()),
            'totalUsersCount' => fn(ParseNode $n) => $o->setTotalUsersCount($n->getIntegerValue()),
            'usersRequiredNotUsingMfaCount' => fn(ParseNode $n) => $o->setUsersRequiredNotUsingMfaCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the legacyPerUserMfaStatus property value. The legacyPerUserMfaStatus property
     * @return PolicyStatus|null
    */
    public function getLegacyPerUserMfaStatus(): ?PolicyStatus {
        $val = $this->getBackingStore()->get('legacyPerUserMfaStatus');
        if (is_null($val) || $val instanceof PolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legacyPerUserMfaStatus'");
    }

    /**
     * Gets the mfaConditionalAccessPolicyStatus property value. The mfaConditionalAccessPolicyStatus property
     * @return PolicyStatus|null
    */
    public function getMfaConditionalAccessPolicyStatus(): ?PolicyStatus {
        $val = $this->getBackingStore()->get('mfaConditionalAccessPolicyStatus');
        if (is_null($val) || $val instanceof PolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaConditionalAccessPolicyStatus'");
    }

    /**
     * Gets the mfaEnabledAdminsCount property value. The number of admins who are using MFA.
     * @return int|null
    */
    public function getMfaEnabledAdminsCount(): ?int {
        $val = $this->getBackingStore()->get('mfaEnabledAdminsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaEnabledAdminsCount'");
    }

    /**
     * Gets the mfaEnabledUsersCount property value. The number of users who are using MFA.
     * @return int|null
    */
    public function getMfaEnabledUsersCount(): ?int {
        $val = $this->getBackingStore()->get('mfaEnabledUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaEnabledUsersCount'");
    }

    /**
     * Gets the securityDefaultsStatus property value. The securityDefaultsStatus property
     * @return PolicyStatus|null
    */
    public function getSecurityDefaultsStatus(): ?PolicyStatus {
        $val = $this->getBackingStore()->get('securityDefaultsStatus');
        if (is_null($val) || $val instanceof PolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityDefaultsStatus'");
    }

    /**
     * Gets the totalAdminsCount property value. The total number of admins in the partner's tenant.
     * @return int|null
    */
    public function getTotalAdminsCount(): ?int {
        $val = $this->getBackingStore()->get('totalAdminsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalAdminsCount'");
    }

    /**
     * Gets the totalUsersCount property value. The total number of users in the partner's tenant.
     * @return int|null
    */
    public function getTotalUsersCount(): ?int {
        $val = $this->getBackingStore()->get('totalUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUsersCount'");
    }

    /**
     * Gets the usersRequiredNotUsingMfaCount property value. The number of users who are required to use MFA, but haven't completed registration.
     * @return int|null
    */
    public function getUsersRequiredNotUsingMfaCount(): ?int {
        $val = $this->getBackingStore()->get('usersRequiredNotUsingMfaCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usersRequiredNotUsingMfaCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('adminsRequiredNotUsingMfaCount', $this->getAdminsRequiredNotUsingMfaCount());
        $writer->writeEnumValue('legacyPerUserMfaStatus', $this->getLegacyPerUserMfaStatus());
        $writer->writeEnumValue('mfaConditionalAccessPolicyStatus', $this->getMfaConditionalAccessPolicyStatus());
        $writer->writeIntegerValue('mfaEnabledAdminsCount', $this->getMfaEnabledAdminsCount());
        $writer->writeIntegerValue('mfaEnabledUsersCount', $this->getMfaEnabledUsersCount());
        $writer->writeEnumValue('securityDefaultsStatus', $this->getSecurityDefaultsStatus());
        $writer->writeIntegerValue('totalAdminsCount', $this->getTotalAdminsCount());
        $writer->writeIntegerValue('totalUsersCount', $this->getTotalUsersCount());
        $writer->writeIntegerValue('usersRequiredNotUsingMfaCount', $this->getUsersRequiredNotUsingMfaCount());
    }

    /**
     * Sets the adminsRequiredNotUsingMfaCount property value. The number of admins who are required to use MFA, but haven't completed registration.
     * @param int|null $value Value to set for the adminsRequiredNotUsingMfaCount property.
    */
    public function setAdminsRequiredNotUsingMfaCount(?int $value): void {
        $this->getBackingStore()->set('adminsRequiredNotUsingMfaCount', $value);
    }

    /**
     * Sets the legacyPerUserMfaStatus property value. The legacyPerUserMfaStatus property
     * @param PolicyStatus|null $value Value to set for the legacyPerUserMfaStatus property.
    */
    public function setLegacyPerUserMfaStatus(?PolicyStatus $value): void {
        $this->getBackingStore()->set('legacyPerUserMfaStatus', $value);
    }

    /**
     * Sets the mfaConditionalAccessPolicyStatus property value. The mfaConditionalAccessPolicyStatus property
     * @param PolicyStatus|null $value Value to set for the mfaConditionalAccessPolicyStatus property.
    */
    public function setMfaConditionalAccessPolicyStatus(?PolicyStatus $value): void {
        $this->getBackingStore()->set('mfaConditionalAccessPolicyStatus', $value);
    }

    /**
     * Sets the mfaEnabledAdminsCount property value. The number of admins who are using MFA.
     * @param int|null $value Value to set for the mfaEnabledAdminsCount property.
    */
    public function setMfaEnabledAdminsCount(?int $value): void {
        $this->getBackingStore()->set('mfaEnabledAdminsCount', $value);
    }

    /**
     * Sets the mfaEnabledUsersCount property value. The number of users who are using MFA.
     * @param int|null $value Value to set for the mfaEnabledUsersCount property.
    */
    public function setMfaEnabledUsersCount(?int $value): void {
        $this->getBackingStore()->set('mfaEnabledUsersCount', $value);
    }

    /**
     * Sets the securityDefaultsStatus property value. The securityDefaultsStatus property
     * @param PolicyStatus|null $value Value to set for the securityDefaultsStatus property.
    */
    public function setSecurityDefaultsStatus(?PolicyStatus $value): void {
        $this->getBackingStore()->set('securityDefaultsStatus', $value);
    }

    /**
     * Sets the totalAdminsCount property value. The total number of admins in the partner's tenant.
     * @param int|null $value Value to set for the totalAdminsCount property.
    */
    public function setTotalAdminsCount(?int $value): void {
        $this->getBackingStore()->set('totalAdminsCount', $value);
    }

    /**
     * Sets the totalUsersCount property value. The total number of users in the partner's tenant.
     * @param int|null $value Value to set for the totalUsersCount property.
    */
    public function setTotalUsersCount(?int $value): void {
        $this->getBackingStore()->set('totalUsersCount', $value);
    }

    /**
     * Sets the usersRequiredNotUsingMfaCount property value. The number of users who are required to use MFA, but haven't completed registration.
     * @param int|null $value Value to set for the usersRequiredNotUsingMfaCount property.
    */
    public function setUsersRequiredNotUsingMfaCount(?int $value): void {
        $this->getBackingStore()->set('usersRequiredNotUsingMfaCount', $value);
    }

}
