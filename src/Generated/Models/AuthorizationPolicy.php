<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthorizationPolicy extends PolicyBase implements Parsable 
{
    /**
     * @var bool|null $allowedToSignUpEmailBasedSubscriptions Indicates whether users can sign up for email based subscriptions.
    */
    private ?bool $allowedToSignUpEmailBasedSubscriptions = null;
    
    /**
     * @var bool|null $allowedToUseSSPR Indicates whether the Self-Serve Password Reset feature can be used by users on the tenant.
    */
    private ?bool $allowedToUseSSPR = null;
    
    /**
     * @var bool|null $allowEmailVerifiedUsersToJoinOrganization Indicates whether a user can join the tenant by email validation.
    */
    private ?bool $allowEmailVerifiedUsersToJoinOrganization = null;
    
    /**
     * @var AllowInvitesFrom|null $allowInvitesFrom Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. See more in the table below.
    */
    private ?AllowInvitesFrom $allowInvitesFrom = null;
    
    /**
     * @var bool|null $blockMsolPowerShell To disable the use of MSOL PowerShell set this property to true. This will also disable user-based access to the legacy service endpoint used by MSOL PowerShell. This does not affect Azure AD Connect or Microsoft Graph.
    */
    private ?bool $blockMsolPowerShell = null;
    
    /**
     * @var array<DefaultUserRoleOverride>|null $defaultUserRoleOverrides The defaultUserRoleOverrides property
    */
    private ?array $defaultUserRoleOverrides = null;
    
    /**
     * @var DefaultUserRolePermissions|null $defaultUserRolePermissions The defaultUserRolePermissions property
    */
    private ?DefaultUserRolePermissions $defaultUserRolePermissions = null;
    
    /**
     * @var array<string>|null $enabledPreviewFeatures List of features enabled for private preview on the tenant.
    */
    private ?array $enabledPreviewFeatures = null;
    
    /**
     * @var string|null $guestUserRoleId Represents role templateId for the role that should be granted to guest user. Refer to List unifiedRoleDefinitions to find the list of available role templates. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
    */
    private ?string $guestUserRoleId = null;
    
    /**
     * @var array<string>|null $permissionGrantPolicyIdsAssignedToDefaultUserRole Indicates if user consent to apps is allowed, and if it is, which app consent policy (permissionGrantPolicy) governs the permission for users to grant consent. Values should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
    */
    private ?array $permissionGrantPolicyIdsAssignedToDefaultUserRole = null;
    
    /**
     * Instantiates a new AuthorizationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->allowedToSignUpEmailBasedSubscriptions;
    }

    /**
     * Gets the allowedToUseSSPR property value. Indicates whether the Self-Serve Password Reset feature can be used by users on the tenant.
     * @return bool|null
    */
    public function getAllowedToUseSSPR(): ?bool {
        return $this->allowedToUseSSPR;
    }

    /**
     * Gets the allowEmailVerifiedUsersToJoinOrganization property value. Indicates whether a user can join the tenant by email validation.
     * @return bool|null
    */
    public function getAllowEmailVerifiedUsersToJoinOrganization(): ?bool {
        return $this->allowEmailVerifiedUsersToJoinOrganization;
    }

    /**
     * Gets the allowInvitesFrom property value. Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. See more in the table below.
     * @return AllowInvitesFrom|null
    */
    public function getAllowInvitesFrom(): ?AllowInvitesFrom {
        return $this->allowInvitesFrom;
    }

    /**
     * Gets the blockMsolPowerShell property value. To disable the use of MSOL PowerShell set this property to true. This will also disable user-based access to the legacy service endpoint used by MSOL PowerShell. This does not affect Azure AD Connect or Microsoft Graph.
     * @return bool|null
    */
    public function getBlockMsolPowerShell(): ?bool {
        return $this->blockMsolPowerShell;
    }

    /**
     * Gets the defaultUserRoleOverrides property value. The defaultUserRoleOverrides property
     * @return array<DefaultUserRoleOverride>|null
    */
    public function getDefaultUserRoleOverrides(): ?array {
        return $this->defaultUserRoleOverrides;
    }

    /**
     * Gets the defaultUserRolePermissions property value. The defaultUserRolePermissions property
     * @return DefaultUserRolePermissions|null
    */
    public function getDefaultUserRolePermissions(): ?DefaultUserRolePermissions {
        return $this->defaultUserRolePermissions;
    }

    /**
     * Gets the enabledPreviewFeatures property value. List of features enabled for private preview on the tenant.
     * @return array<string>|null
    */
    public function getEnabledPreviewFeatures(): ?array {
        return $this->enabledPreviewFeatures;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedToSignUpEmailBasedSubscriptions' => function (ParseNode $n) use ($o) { $o->setAllowedToSignUpEmailBasedSubscriptions($n->getBooleanValue()); },
            'allowedToUseSSPR' => function (ParseNode $n) use ($o) { $o->setAllowedToUseSSPR($n->getBooleanValue()); },
            'allowEmailVerifiedUsersToJoinOrganization' => function (ParseNode $n) use ($o) { $o->setAllowEmailVerifiedUsersToJoinOrganization($n->getBooleanValue()); },
            'allowInvitesFrom' => function (ParseNode $n) use ($o) { $o->setAllowInvitesFrom($n->getEnumValue(AllowInvitesFrom::class)); },
            'blockMsolPowerShell' => function (ParseNode $n) use ($o) { $o->setBlockMsolPowerShell($n->getBooleanValue()); },
            'defaultUserRoleOverrides' => function (ParseNode $n) use ($o) { $o->setDefaultUserRoleOverrides($n->getCollectionOfObjectValues(array(DefaultUserRoleOverride::class, 'createFromDiscriminatorValue'))); },
            'defaultUserRolePermissions' => function (ParseNode $n) use ($o) { $o->setDefaultUserRolePermissions($n->getObjectValue(array(DefaultUserRolePermissions::class, 'createFromDiscriminatorValue'))); },
            'enabledPreviewFeatures' => function (ParseNode $n) use ($o) { $o->setEnabledPreviewFeatures($n->getCollectionOfPrimitiveValues()); },
            'guestUserRoleId' => function (ParseNode $n) use ($o) { $o->setGuestUserRoleId($n->getStringValue()); },
            'permissionGrantPolicyIdsAssignedToDefaultUserRole' => function (ParseNode $n) use ($o) { $o->setPermissionGrantPolicyIdsAssignedToDefaultUserRole($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the guestUserRoleId property value. Represents role templateId for the role that should be granted to guest user. Refer to List unifiedRoleDefinitions to find the list of available role templates. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
     * @return string|null
    */
    public function getGuestUserRoleId(): ?string {
        return $this->guestUserRoleId;
    }

    /**
     * Gets the permissionGrantPolicyIdsAssignedToDefaultUserRole property value. Indicates if user consent to apps is allowed, and if it is, which app consent policy (permissionGrantPolicy) governs the permission for users to grant consent. Values should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     * @return array<string>|null
    */
    public function getPermissionGrantPolicyIdsAssignedToDefaultUserRole(): ?array {
        return $this->permissionGrantPolicyIdsAssignedToDefaultUserRole;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowedToSignUpEmailBasedSubscriptions', $this->allowedToSignUpEmailBasedSubscriptions);
        $writer->writeBooleanValue('allowedToUseSSPR', $this->allowedToUseSSPR);
        $writer->writeBooleanValue('allowEmailVerifiedUsersToJoinOrganization', $this->allowEmailVerifiedUsersToJoinOrganization);
        $writer->writeEnumValue('allowInvitesFrom', $this->allowInvitesFrom);
        $writer->writeBooleanValue('blockMsolPowerShell', $this->blockMsolPowerShell);
        $writer->writeCollectionOfObjectValues('defaultUserRoleOverrides', $this->defaultUserRoleOverrides);
        $writer->writeObjectValue('defaultUserRolePermissions', $this->defaultUserRolePermissions);
        $writer->writeCollectionOfPrimitiveValues('enabledPreviewFeatures', $this->enabledPreviewFeatures);
        $writer->writeStringValue('guestUserRoleId', $this->guestUserRoleId);
        $writer->writeCollectionOfPrimitiveValues('permissionGrantPolicyIdsAssignedToDefaultUserRole', $this->permissionGrantPolicyIdsAssignedToDefaultUserRole);
    }

    /**
     * Sets the allowedToSignUpEmailBasedSubscriptions property value. Indicates whether users can sign up for email based subscriptions.
     *  @param bool|null $value Value to set for the allowedToSignUpEmailBasedSubscriptions property.
    */
    public function setAllowedToSignUpEmailBasedSubscriptions(?bool $value ): void {
        $this->allowedToSignUpEmailBasedSubscriptions = $value;
    }

    /**
     * Sets the allowedToUseSSPR property value. Indicates whether the Self-Serve Password Reset feature can be used by users on the tenant.
     *  @param bool|null $value Value to set for the allowedToUseSSPR property.
    */
    public function setAllowedToUseSSPR(?bool $value ): void {
        $this->allowedToUseSSPR = $value;
    }

    /**
     * Sets the allowEmailVerifiedUsersToJoinOrganization property value. Indicates whether a user can join the tenant by email validation.
     *  @param bool|null $value Value to set for the allowEmailVerifiedUsersToJoinOrganization property.
    */
    public function setAllowEmailVerifiedUsersToJoinOrganization(?bool $value ): void {
        $this->allowEmailVerifiedUsersToJoinOrganization = $value;
    }

    /**
     * Sets the allowInvitesFrom property value. Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. See more in the table below.
     *  @param AllowInvitesFrom|null $value Value to set for the allowInvitesFrom property.
    */
    public function setAllowInvitesFrom(?AllowInvitesFrom $value ): void {
        $this->allowInvitesFrom = $value;
    }

    /**
     * Sets the blockMsolPowerShell property value. To disable the use of MSOL PowerShell set this property to true. This will also disable user-based access to the legacy service endpoint used by MSOL PowerShell. This does not affect Azure AD Connect or Microsoft Graph.
     *  @param bool|null $value Value to set for the blockMsolPowerShell property.
    */
    public function setBlockMsolPowerShell(?bool $value ): void {
        $this->blockMsolPowerShell = $value;
    }

    /**
     * Sets the defaultUserRoleOverrides property value. The defaultUserRoleOverrides property
     *  @param array<DefaultUserRoleOverride>|null $value Value to set for the defaultUserRoleOverrides property.
    */
    public function setDefaultUserRoleOverrides(?array $value ): void {
        $this->defaultUserRoleOverrides = $value;
    }

    /**
     * Sets the defaultUserRolePermissions property value. The defaultUserRolePermissions property
     *  @param DefaultUserRolePermissions|null $value Value to set for the defaultUserRolePermissions property.
    */
    public function setDefaultUserRolePermissions(?DefaultUserRolePermissions $value ): void {
        $this->defaultUserRolePermissions = $value;
    }

    /**
     * Sets the enabledPreviewFeatures property value. List of features enabled for private preview on the tenant.
     *  @param array<string>|null $value Value to set for the enabledPreviewFeatures property.
    */
    public function setEnabledPreviewFeatures(?array $value ): void {
        $this->enabledPreviewFeatures = $value;
    }

    /**
     * Sets the guestUserRoleId property value. Represents role templateId for the role that should be granted to guest user. Refer to List unifiedRoleDefinitions to find the list of available role templates. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
     *  @param string|null $value Value to set for the guestUserRoleId property.
    */
    public function setGuestUserRoleId(?string $value ): void {
        $this->guestUserRoleId = $value;
    }

    /**
     * Sets the permissionGrantPolicyIdsAssignedToDefaultUserRole property value. Indicates if user consent to apps is allowed, and if it is, which app consent policy (permissionGrantPolicy) governs the permission for users to grant consent. Values should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     *  @param array<string>|null $value Value to set for the permissionGrantPolicyIdsAssignedToDefaultUserRole property.
    */
    public function setPermissionGrantPolicyIdsAssignedToDefaultUserRole(?array $value ): void {
        $this->permissionGrantPolicyIdsAssignedToDefaultUserRole = $value;
    }

}
