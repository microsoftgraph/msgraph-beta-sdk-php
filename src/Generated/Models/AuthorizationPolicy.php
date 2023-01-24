<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthorizationPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new AuthorizationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authorizationPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthorizationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthorizationPolicy {
        return new AuthorizationPolicy();
    }

    /**
     * Gets the allowedToSignUpEmailBasedSubscriptions property value. Indicates whether users can sign up for email based subscriptions.
     * @return bool|null
    */
    public function getAllowedToSignUpEmailBasedSubscriptions(): ?bool {
        return $this->getBackingStore()->get('allowedToSignUpEmailBasedSubscriptions');
    }

    /**
     * Gets the allowedToUseSSPR property value. Indicates whether the Self-Serve Password Reset feature can be used by users on the tenant.
     * @return bool|null
    */
    public function getAllowedToUseSSPR(): ?bool {
        return $this->getBackingStore()->get('allowedToUseSSPR');
    }

    /**
     * Gets the allowEmailVerifiedUsersToJoinOrganization property value. Indicates whether a user can join the tenant by email validation.
     * @return bool|null
    */
    public function getAllowEmailVerifiedUsersToJoinOrganization(): ?bool {
        return $this->getBackingStore()->get('allowEmailVerifiedUsersToJoinOrganization');
    }

    /**
     * Gets the allowInvitesFrom property value. Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone. everyone is the default setting for all cloud environments except US Government. See more in the table below.
     * @return AllowInvitesFrom|null
    */
    public function getAllowInvitesFrom(): ?AllowInvitesFrom {
        return $this->getBackingStore()->get('allowInvitesFrom');
    }

    /**
     * Gets the allowUserConsentForRiskyApps property value. Indicates whether user consent for risky apps is allowed. We recommend to keep this as false.
     * @return bool|null
    */
    public function getAllowUserConsentForRiskyApps(): ?bool {
        return $this->getBackingStore()->get('allowUserConsentForRiskyApps');
    }

    /**
     * Gets the blockMsolPowerShell property value. To disable the use of the MSOnline PowerShell module set this property to true. This will also disable user-based access to the legacy service endpoint used by the MSOnline PowerShell module. This does not affect Azure AD Connect or Microsoft Graph.
     * @return bool|null
    */
    public function getBlockMsolPowerShell(): ?bool {
        return $this->getBackingStore()->get('blockMsolPowerShell');
    }

    /**
     * Gets the defaultUserRoleOverrides property value. The defaultUserRoleOverrides property
     * @return array<DefaultUserRoleOverride>|null
    */
    public function getDefaultUserRoleOverrides(): ?array {
        return $this->getBackingStore()->get('defaultUserRoleOverrides');
    }

    /**
     * Gets the defaultUserRolePermissions property value. The defaultUserRolePermissions property
     * @return DefaultUserRolePermissions|null
    */
    public function getDefaultUserRolePermissions(): ?DefaultUserRolePermissions {
        return $this->getBackingStore()->get('defaultUserRolePermissions');
    }

    /**
     * Gets the enabledPreviewFeatures property value. List of features enabled for private preview on the tenant.
     * @return array<string>|null
    */
    public function getEnabledPreviewFeatures(): ?array {
        return $this->getBackingStore()->get('enabledPreviewFeatures');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedToSignUpEmailBasedSubscriptions' => fn(ParseNode $n) => $o->setAllowedToSignUpEmailBasedSubscriptions($n->getBooleanValue()),
            'allowedToUseSSPR' => fn(ParseNode $n) => $o->setAllowedToUseSSPR($n->getBooleanValue()),
            'allowEmailVerifiedUsersToJoinOrganization' => fn(ParseNode $n) => $o->setAllowEmailVerifiedUsersToJoinOrganization($n->getBooleanValue()),
            'allowInvitesFrom' => fn(ParseNode $n) => $o->setAllowInvitesFrom($n->getEnumValue(AllowInvitesFrom::class)),
            'allowUserConsentForRiskyApps' => fn(ParseNode $n) => $o->setAllowUserConsentForRiskyApps($n->getBooleanValue()),
            'blockMsolPowerShell' => fn(ParseNode $n) => $o->setBlockMsolPowerShell($n->getBooleanValue()),
            'defaultUserRoleOverrides' => fn(ParseNode $n) => $o->setDefaultUserRoleOverrides($n->getCollectionOfObjectValues([DefaultUserRoleOverride::class, 'createFromDiscriminatorValue'])),
            'defaultUserRolePermissions' => fn(ParseNode $n) => $o->setDefaultUserRolePermissions($n->getObjectValue([DefaultUserRolePermissions::class, 'createFromDiscriminatorValue'])),
            'enabledPreviewFeatures' => fn(ParseNode $n) => $o->setEnabledPreviewFeatures($n->getCollectionOfPrimitiveValues()),
            'guestUserRoleId' => fn(ParseNode $n) => $o->setGuestUserRoleId($n->getStringValue()),
            'permissionGrantPolicyIdsAssignedToDefaultUserRole' => fn(ParseNode $n) => $o->setPermissionGrantPolicyIdsAssignedToDefaultUserRole($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the guestUserRoleId property value. Represents role templateId for the role that should be granted to guest user. Refer to List unifiedRoleDefinitions to find the list of available role templates. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
     * @return string|null
    */
    public function getGuestUserRoleId(): ?string {
        return $this->getBackingStore()->get('guestUserRoleId');
    }

    /**
     * Gets the permissionGrantPolicyIdsAssignedToDefaultUserRole property value. Indicates if user consent to apps is allowed, and if it is, which app consent policy (permissionGrantPolicy) governs the permission for users to grant consent. Values should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     * @return array<string>|null
    */
    public function getPermissionGrantPolicyIdsAssignedToDefaultUserRole(): ?array {
        return $this->getBackingStore()->get('permissionGrantPolicyIdsAssignedToDefaultUserRole');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowedToSignUpEmailBasedSubscriptions', $this->getAllowedToSignUpEmailBasedSubscriptions());
        $writer->writeBooleanValue('allowedToUseSSPR', $this->getAllowedToUseSSPR());
        $writer->writeBooleanValue('allowEmailVerifiedUsersToJoinOrganization', $this->getAllowEmailVerifiedUsersToJoinOrganization());
        $writer->writeEnumValue('allowInvitesFrom', $this->getAllowInvitesFrom());
        $writer->writeBooleanValue('allowUserConsentForRiskyApps', $this->getAllowUserConsentForRiskyApps());
        $writer->writeBooleanValue('blockMsolPowerShell', $this->getBlockMsolPowerShell());
        $writer->writeCollectionOfObjectValues('defaultUserRoleOverrides', $this->getDefaultUserRoleOverrides());
        $writer->writeObjectValue('defaultUserRolePermissions', $this->getDefaultUserRolePermissions());
        $writer->writeCollectionOfPrimitiveValues('enabledPreviewFeatures', $this->getEnabledPreviewFeatures());
        $writer->writeStringValue('guestUserRoleId', $this->getGuestUserRoleId());
        $writer->writeCollectionOfPrimitiveValues('permissionGrantPolicyIdsAssignedToDefaultUserRole', $this->getPermissionGrantPolicyIdsAssignedToDefaultUserRole());
    }

    /**
     * Sets the allowedToSignUpEmailBasedSubscriptions property value. Indicates whether users can sign up for email based subscriptions.
     * @param bool|null $value Value to set for the allowedToSignUpEmailBasedSubscriptions property.
    */
    public function setAllowedToSignUpEmailBasedSubscriptions(?bool $value): void {
        $this->getBackingStore()->set('allowedToSignUpEmailBasedSubscriptions', $value);
    }

    /**
     * Sets the allowedToUseSSPR property value. Indicates whether the Self-Serve Password Reset feature can be used by users on the tenant.
     * @param bool|null $value Value to set for the allowedToUseSSPR property.
    */
    public function setAllowedToUseSSPR(?bool $value): void {
        $this->getBackingStore()->set('allowedToUseSSPR', $value);
    }

    /**
     * Sets the allowEmailVerifiedUsersToJoinOrganization property value. Indicates whether a user can join the tenant by email validation.
     * @param bool|null $value Value to set for the allowEmailVerifiedUsersToJoinOrganization property.
    */
    public function setAllowEmailVerifiedUsersToJoinOrganization(?bool $value): void {
        $this->getBackingStore()->set('allowEmailVerifiedUsersToJoinOrganization', $value);
    }

    /**
     * Sets the allowInvitesFrom property value. Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone. everyone is the default setting for all cloud environments except US Government. See more in the table below.
     * @param AllowInvitesFrom|null $value Value to set for the allowInvitesFrom property.
    */
    public function setAllowInvitesFrom(?AllowInvitesFrom $value): void {
        $this->getBackingStore()->set('allowInvitesFrom', $value);
    }

    /**
     * Sets the allowUserConsentForRiskyApps property value. Indicates whether user consent for risky apps is allowed. We recommend to keep this as false.
     * @param bool|null $value Value to set for the allowUserConsentForRiskyApps property.
    */
    public function setAllowUserConsentForRiskyApps(?bool $value): void {
        $this->getBackingStore()->set('allowUserConsentForRiskyApps', $value);
    }

    /**
     * Sets the blockMsolPowerShell property value. To disable the use of the MSOnline PowerShell module set this property to true. This will also disable user-based access to the legacy service endpoint used by the MSOnline PowerShell module. This does not affect Azure AD Connect or Microsoft Graph.
     * @param bool|null $value Value to set for the blockMsolPowerShell property.
    */
    public function setBlockMsolPowerShell(?bool $value): void {
        $this->getBackingStore()->set('blockMsolPowerShell', $value);
    }

    /**
     * Sets the defaultUserRoleOverrides property value. The defaultUserRoleOverrides property
     * @param array<DefaultUserRoleOverride>|null $value Value to set for the defaultUserRoleOverrides property.
    */
    public function setDefaultUserRoleOverrides(?array $value): void {
        $this->getBackingStore()->set('defaultUserRoleOverrides', $value);
    }

    /**
     * Sets the defaultUserRolePermissions property value. The defaultUserRolePermissions property
     * @param DefaultUserRolePermissions|null $value Value to set for the defaultUserRolePermissions property.
    */
    public function setDefaultUserRolePermissions(?DefaultUserRolePermissions $value): void {
        $this->getBackingStore()->set('defaultUserRolePermissions', $value);
    }

    /**
     * Sets the enabledPreviewFeatures property value. List of features enabled for private preview on the tenant.
     * @param array<string>|null $value Value to set for the enabledPreviewFeatures property.
    */
    public function setEnabledPreviewFeatures(?array $value): void {
        $this->getBackingStore()->set('enabledPreviewFeatures', $value);
    }

    /**
     * Sets the guestUserRoleId property value. Represents role templateId for the role that should be granted to guest user. Refer to List unifiedRoleDefinitions to find the list of available role templates. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
     * @param string|null $value Value to set for the guestUserRoleId property.
    */
    public function setGuestUserRoleId(?string $value): void {
        $this->getBackingStore()->set('guestUserRoleId', $value);
    }

    /**
     * Sets the permissionGrantPolicyIdsAssignedToDefaultUserRole property value. Indicates if user consent to apps is allowed, and if it is, which app consent policy (permissionGrantPolicy) governs the permission for users to grant consent. Values should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     * @param array<string>|null $value Value to set for the permissionGrantPolicyIdsAssignedToDefaultUserRole property.
    */
    public function setPermissionGrantPolicyIdsAssignedToDefaultUserRole(?array $value): void {
        $this->getBackingStore()->set('permissionGrantPolicyIdsAssignedToDefaultUserRole', $value);
    }

}
