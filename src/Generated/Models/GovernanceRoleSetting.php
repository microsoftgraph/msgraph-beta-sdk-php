<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new governanceRoleSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRoleSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleSetting {
        return new GovernanceRoleSetting();
    }

    /**
     * Gets the adminEligibleSettings property value. The rule settings that are evaluated when an administrator tries to add an eligible role assignment.
     * @return array<GovernanceRuleSetting>|null
    */
    public function getAdminEligibleSettings(): ?array {
        return $this->getBackingStore()->get('adminEligibleSettings');
    }

    /**
     * Gets the adminMemberSettings property value. The rule settings that are evaluated when an administrator tries to add a direct member role assignment.
     * @return array<GovernanceRuleSetting>|null
    */
    public function getAdminMemberSettings(): ?array {
        return $this->getBackingStore()->get('adminMemberSettings');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adminEligibleSettings' => fn(ParseNode $n) => $o->setAdminEligibleSettings($n->getCollectionOfObjectValues([GovernanceRuleSetting::class, 'createFromDiscriminatorValue'])),
            'adminMemberSettings' => fn(ParseNode $n) => $o->setAdminMemberSettings($n->getCollectionOfObjectValues([GovernanceRuleSetting::class, 'createFromDiscriminatorValue'])),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'lastUpdatedBy' => fn(ParseNode $n) => $o->setLastUpdatedBy($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([GovernanceResource::class, 'createFromDiscriminatorValue'])),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'roleDefinition' => fn(ParseNode $n) => $o->setRoleDefinition($n->getObjectValue([GovernanceRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'userEligibleSettings' => fn(ParseNode $n) => $o->setUserEligibleSettings($n->getCollectionOfObjectValues([GovernanceRuleSetting::class, 'createFromDiscriminatorValue'])),
            'userMemberSettings' => fn(ParseNode $n) => $o->setUserMemberSettings($n->getCollectionOfObjectValues([GovernanceRuleSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isDefault property value. Read-only. Indicate if the roleSetting is a default roleSetting
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->getBackingStore()->get('isDefault');
    }

    /**
     * Gets the lastUpdatedBy property value. Read-only. The display name of the administrator who last updated the roleSetting.
     * @return string|null
    */
    public function getLastUpdatedBy(): ?string {
        return $this->getBackingStore()->get('lastUpdatedBy');
    }

    /**
     * Gets the lastUpdatedDateTime property value. Read-only. The time when the role setting was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the resource property value. Read-only. The associated resource for this role setting.
     * @return GovernanceResource|null
    */
    public function getResource(): ?GovernanceResource {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resourceId property value. Required. The id of the resource that the role setting is associated with.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->getBackingStore()->get('resourceId');
    }

    /**
     * Gets the roleDefinition property value. Read-only. The role definition that is enforced with this role setting.
     * @return GovernanceRoleDefinition|null
    */
    public function getRoleDefinition(): ?GovernanceRoleDefinition {
        return $this->getBackingStore()->get('roleDefinition');
    }

    /**
     * Gets the roleDefinitionId property value. Required. The id of the role definition that the role setting is associated with.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->getBackingStore()->get('roleDefinitionId');
    }

    /**
     * Gets the userEligibleSettings property value. The rule settings that are evaluated when a user tries to add an eligible role assignment. The setting is not supported for now.
     * @return array<GovernanceRuleSetting>|null
    */
    public function getUserEligibleSettings(): ?array {
        return $this->getBackingStore()->get('userEligibleSettings');
    }

    /**
     * Gets the userMemberSettings property value. The rule settings that are evaluated when a user tries to activate his role assignment.
     * @return array<GovernanceRuleSetting>|null
    */
    public function getUserMemberSettings(): ?array {
        return $this->getBackingStore()->get('userMemberSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('adminEligibleSettings', $this->getAdminEligibleSettings());
        $writer->writeCollectionOfObjectValues('adminMemberSettings', $this->getAdminMemberSettings());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeStringValue('lastUpdatedBy', $this->getLastUpdatedBy());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeObjectValue('roleDefinition', $this->getRoleDefinition());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
        $writer->writeCollectionOfObjectValues('userEligibleSettings', $this->getUserEligibleSettings());
        $writer->writeCollectionOfObjectValues('userMemberSettings', $this->getUserMemberSettings());
    }

    /**
     * Sets the adminEligibleSettings property value. The rule settings that are evaluated when an administrator tries to add an eligible role assignment.
     *  @param array<GovernanceRuleSetting>|null $value Value to set for the adminEligibleSettings property.
    */
    public function setAdminEligibleSettings(?array $value): void {
        $this->getBackingStore()->set('adminEligibleSettings', $value);
    }

    /**
     * Sets the adminMemberSettings property value. The rule settings that are evaluated when an administrator tries to add a direct member role assignment.
     *  @param array<GovernanceRuleSetting>|null $value Value to set for the adminMemberSettings property.
    */
    public function setAdminMemberSettings(?array $value): void {
        $this->getBackingStore()->set('adminMemberSettings', $value);
    }

    /**
     * Sets the isDefault property value. Read-only. Indicate if the roleSetting is a default roleSetting
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the lastUpdatedBy property value. Read-only. The display name of the administrator who last updated the roleSetting.
     *  @param string|null $value Value to set for the lastUpdatedBy property.
    */
    public function setLastUpdatedBy(?string $value): void {
        $this->getBackingStore()->set('lastUpdatedBy', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Read-only. The time when the role setting was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the resource property value. Read-only. The associated resource for this role setting.
     *  @param GovernanceResource|null $value Value to set for the resource property.
    */
    public function setResource(?GovernanceResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceId property value. Required. The id of the resource that the role setting is associated with.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the roleDefinition property value. Read-only. The role definition that is enforced with this role setting.
     *  @param GovernanceRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?GovernanceRoleDefinition $value): void {
        $this->getBackingStore()->set('roleDefinition', $value);
    }

    /**
     * Sets the roleDefinitionId property value. Required. The id of the role definition that the role setting is associated with.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

    /**
     * Sets the userEligibleSettings property value. The rule settings that are evaluated when a user tries to add an eligible role assignment. The setting is not supported for now.
     *  @param array<GovernanceRuleSetting>|null $value Value to set for the userEligibleSettings property.
    */
    public function setUserEligibleSettings(?array $value): void {
        $this->getBackingStore()->set('userEligibleSettings', $value);
    }

    /**
     * Sets the userMemberSettings property value. The rule settings that are evaluated when a user tries to activate his role assignment.
     *  @param array<GovernanceRuleSetting>|null $value Value to set for the userMemberSettings property.
    */
    public function setUserMemberSettings(?array $value): void {
        $this->getBackingStore()->set('userMemberSettings', $value);
    }

}
