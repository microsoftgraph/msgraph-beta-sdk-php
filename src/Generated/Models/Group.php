<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Group extends DirectoryObject implements Parsable 
{
    /**
     * @var array<DirectoryObject>|null $acceptedSenders The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
    */
    private ?array $acceptedSenders = null;
    
    /**
     * @var GroupAccessType|null $accessType The accessType property
    */
    private ?GroupAccessType $accessType = null;
    
    /**
     * @var bool|null $allowExternalSenders Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    */
    private ?bool $allowExternalSenders = null;
    
    /**
     * @var array<AppRoleAssignment>|null $appRoleAssignments Represents the app roles a group has been granted for an application. Supports $expand.
    */
    private ?array $appRoleAssignments = null;
    
    /**
     * @var array<AssignedLabel>|null $assignedLabels The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select.
    */
    private ?array $assignedLabels = null;
    
    /**
     * @var array<AssignedLicense>|null $assignedLicenses The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
    */
    private ?array $assignedLicenses = null;
    
    /**
     * @var bool|null $autoSubscribeNewMembers Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    */
    private ?bool $autoSubscribeNewMembers = null;
    
    /**
     * @var Calendar|null $calendar The group's calendar. Read-only.
    */
    private ?Calendar $calendar = null;
    
    /**
     * @var array<Event>|null $calendarView The calendar view for the calendar. Read-only.
    */
    private ?array $calendarView = null;
    
    /**
     * @var string|null $classification Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
    */
    private ?string $classification = null;
    
    /**
     * @var array<Conversation>|null $conversations The group's conversations.
    */
    private ?array $conversations = null;
    
    /**
     * @var string|null $createdByAppId App ID of the app used to create the group. Can be null for some groups. Returned by default. Read-only. Supports $filter (eq, ne, not, in, startsWith).
    */
    private ?string $createdByAppId = null;
    
    /**
     * @var DateTime|null $createdDateTime Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DirectoryObject|null $createdOnBehalfOf The user (or application) that created the group. Note: This is not set if the user is an administrator. Read-only.
    */
    private ?DirectoryObject $createdOnBehalfOf = null;
    
    /**
     * @var string|null $description An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the group. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    */
    private ?string $displayName = null;
    
    /**
     * @var Drive|null $drive The group's default drive. Read-only.
    */
    private ?Drive $drive = null;
    
    /**
     * @var array<Drive>|null $drives The group's drives. Read-only.
    */
    private ?array $drives = null;
    
    /**
     * @var array<Endpoint>|null $endpoints Endpoints for the group. Read-only. Nullable.
    */
    private ?array $endpoints = null;
    
    /**
     * @var array<Event>|null $events The group's events.
    */
    private ?array $events = null;
    
    /**
     * @var DateTime|null $expirationDateTime Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the group. Read-only. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var array<GroupLifecyclePolicy>|null $groupLifecyclePolicies The collection of lifecycle policies for this group. Read-only. Nullable.
    */
    private ?array $groupLifecyclePolicies = null;
    
    /**
     * @var array<string>|null $groupTypes Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
    */
    private ?array $groupTypes = null;
    
    /**
     * @var bool|null $hasMembersWithLicenseErrors Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true).  Supports $filter (eq).
    */
    private ?bool $hasMembersWithLicenseErrors = null;
    
    /**
     * @var bool|null $hideFromAddressLists true if the group is not displayed in certain parts of the Outlook user interface: in the Address Book, in address lists for selecting message recipients, and in the Browse Groups dialog for searching groups; false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    */
    private ?bool $hideFromAddressLists = null;
    
    /**
     * @var bool|null $hideFromOutlookClients true if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web, false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    */
    private ?bool $hideFromOutlookClients = null;
    
    /**
     * @var array<string>|null $infoCatalogs Identifies the info segments assigned to the group. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
    */
    private ?array $infoCatalogs = null;
    
    /**
     * @var bool|null $isArchived When a group is associated with a team, this property determines whether the team is in read-only mode.
    */
    private ?bool $isArchived = null;
    
    /**
     * @var bool|null $isAssignableToRole Indicates whether this group can be assigned to an Azure Active Directory role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global administrator and Privileged role administrator roles can set this property. The caller must be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsReturned by default. Supports $filter (eq, ne, not).
    */
    private ?bool $isAssignableToRole = null;
    
    /**
     * @var bool|null $isFavorite The isFavorite property
    */
    private ?bool $isFavorite = null;
    
    /**
     * @var bool|null $isManagementRestricted The isManagementRestricted property
    */
    private ?bool $isManagementRestricted = null;
    
    /**
     * @var bool|null $isSubscribedByMail Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    */
    private ?bool $isSubscribedByMail = null;
    
    /**
     * @var LicenseProcessingState|null $licenseProcessingState Indicates status of the group license assignment to all members of the group. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete. Returned only on $select. Read-only.
    */
    private ?LicenseProcessingState $licenseProcessingState = null;
    
    /**
     * @var string|null $mail The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $mail = null;
    
    /**
     * @var bool|null $mailEnabled Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not, and eq on null values).
    */
    private ?bool $mailEnabled = null;
    
    /**
     * @var string|null $mailNickname The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : . <> , SPACE. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith).
    */
    private ?string $mailNickname = null;
    
    /**
     * @var string|null $mdmAppId The mdmAppId property
    */
    private ?string $mdmAppId = null;
    
    /**
     * @var array<DirectoryObject>|null $memberOf Groups and administrative units that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
    */
    private ?array $memberOf = null;
    
    /**
     * @var array<DirectoryObject>|null $members Members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
    */
    private ?array $members = null;
    
    /**
     * @var string|null $membershipRule The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
    */
    private ?string $membershipRule = null;
    
    /**
     * @var string|null $membershipRuleProcessingState Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
    */
    private ?string $membershipRuleProcessingState = null;
    
    /**
     * @var MembershipRuleProcessingStatus|null $membershipRuleProcessingStatus Describes the processing status for rules-based dynamic groups. The property is null for non-rule based dynamic groups or if the dynamic group processing has been paused. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). Read-only.
    */
    private ?MembershipRuleProcessingStatus $membershipRuleProcessingStatus = null;
    
    /**
     * @var array<DirectoryObject>|null $membersWithLicenseErrors A list of group members with license errors from this group-based license assignment. Read-only.
    */
    private ?array $membersWithLicenseErrors = null;
    
    /**
     * @var Onenote|null $onenote The onenote property
    */
    private ?Onenote $onenote = null;
    
    /**
     * @var string|null $onPremisesDomainName Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
    */
    private ?string $onPremisesDomainName = null;
    
    /**
     * @var DateTime|null $onPremisesLastSyncDateTime Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
    */
    private ?DateTime $onPremisesLastSyncDateTime = null;
    
    /**
     * @var string|null $onPremisesNetBiosName Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
    */
    private ?string $onPremisesNetBiosName = null;
    
    /**
     * @var array<OnPremisesProvisioningError>|null $onPremisesProvisioningErrors Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
    */
    private ?array $onPremisesProvisioningErrors = null;
    
    /**
     * @var string|null $onPremisesSamAccountName Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
    */
    private ?string $onPremisesSamAccountName = null;
    
    /**
     * @var string|null $onPremisesSecurityIdentifier Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
    */
    private ?string $onPremisesSecurityIdentifier = null;
    
    /**
     * @var bool|null $onPremisesSyncEnabled true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
    */
    private ?bool $onPremisesSyncEnabled = null;
    
    /**
     * @var string|null $organizationId The organizationId property
    */
    private ?string $organizationId = null;
    
    /**
     * @var array<DirectoryObject>|null $owners The owners of the group who can be users or service principals. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
    */
    private ?array $owners = null;
    
    /**
     * @var array<ResourceSpecificPermissionGrant>|null $permissionGrants The permissions that have been granted for a group to a specific application. Supports $expand.
    */
    private ?array $permissionGrants = null;
    
    /**
     * @var ProfilePhoto|null $photo The group's profile photo.
    */
    private ?ProfilePhoto $photo = null;
    
    /**
     * @var array<ProfilePhoto>|null $photos The profile photos owned by the group. Read-only. Nullable.
    */
    private ?array $photos = null;
    
    /**
     * @var PlannerGroup|null $planner Selective Planner services available to the group. Read-only. Nullable.
    */
    private ?PlannerGroup $planner = null;
    
    /**
     * @var string|null $preferredDataLocation The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
    */
    private ?string $preferredDataLocation = null;
    
    /**
     * @var string|null $preferredLanguage The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
    */
    private ?string $preferredLanguage = null;
    
    /**
     * @var array<string>|null $proxyAddresses Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required for filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, and counting empty collections).
    */
    private ?array $proxyAddresses = null;
    
    /**
     * @var array<DirectoryObject>|null $rejectedSenders The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
    */
    private ?array $rejectedSenders = null;
    
    /**
     * @var DateTime|null $renewedDateTime Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
    */
    private ?DateTime $renewedDateTime = null;
    
    /**
     * @var array<string>|null $resourceBehaviorOptions Specifies the group behaviors that can be set for a Microsoft 365 group during creation. This can be set only as part of creation (POST). Possible values are AllowOnlyMembersToPost, HideGroupInOutlook, SubscribeNewGroupMembers, WelcomeEmailDisabled. For more information, see Set Microsoft 365 group behaviors and provisioning options.
    */
    private ?array $resourceBehaviorOptions = null;
    
    /**
     * @var array<string>|null $resourceProvisioningOptions Specifies the group resources that are provisioned as part of Microsoft 365 group creation, that are not normally part of default group creation. Possible value is Team. For more information, see Set Microsoft 365 group behaviors and provisioning options. Returned by default. Supports $filter (eq, not, startsWith.
    */
    private ?array $resourceProvisioningOptions = null;
    
    /**
     * @var bool|null $securityEnabled Specifies whether the group is a security group. Required.Returned by default. Supports $filter (eq, ne, not, in).
    */
    private ?bool $securityEnabled = null;
    
    /**
     * @var string|null $securityIdentifier Security identifier of the group, used in Windows scenarios. Returned by default.
    */
    private ?string $securityIdentifier = null;
    
    /**
     * @var array<DirectorySetting>|null $settings Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
    */
    private ?array $settings = null;
    
    /**
     * @var array<Site>|null $sites The list of SharePoint sites in this group. Access the default site with /sites/root.
    */
    private ?array $sites = null;
    
    /**
     * @var Team|null $team The team associated with this group.
    */
    private ?Team $team = null;
    
    /**
     * @var string|null $theme Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
    */
    private ?string $theme = null;
    
    /**
     * @var array<ConversationThread>|null $threads The group's conversation threads. Nullable.
    */
    private ?array $threads = null;
    
    /**
     * @var array<DirectoryObject>|null $transitiveMemberOf The transitiveMemberOf property
    */
    private ?array $transitiveMemberOf = null;
    
    /**
     * @var array<DirectoryObject>|null $transitiveMembers The transitiveMembers property
    */
    private ?array $transitiveMembers = null;
    
    /**
     * @var int|null $unseenConversationsCount Count of conversations that have been delivered one or more new posts since the signed-in user's last visit to the group. This property is the same as unseenCount. Returned only on $select.
    */
    private ?int $unseenConversationsCount = null;
    
    /**
     * @var int|null $unseenCount Count of conversations that have received new posts since the signed-in user last visited the group. This property is the same as unseenConversationsCount.Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
    */
    private ?int $unseenCount = null;
    
    /**
     * @var int|null $unseenMessagesCount Count of new posts that have been delivered to the group's conversations since the signed-in user's last visit to the group. Returned only on $select.
    */
    private ?int $unseenMessagesCount = null;
    
    /**
     * @var string|null $visibility Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or Hiddenmembership. Hiddenmembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
    */
    private ?string $visibility = null;
    
    /**
     * @var GroupWritebackConfiguration|null $writebackConfiguration The writebackConfiguration property
    */
    private ?GroupWritebackConfiguration $writebackConfiguration = null;
    
    /**
     * Instantiates a new group and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Group
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Group {
        return new Group();
    }

    /**
     * Gets the acceptedSenders property value. The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
     * @return array<DirectoryObject>|null
    */
    public function getAcceptedSenders(): ?array {
        return $this->acceptedSenders;
    }

    /**
     * Gets the accessType property value. The accessType property
     * @return GroupAccessType|null
    */
    public function getAccessType(): ?GroupAccessType {
        return $this->accessType;
    }

    /**
     * Gets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAllowExternalSenders(): ?bool {
        return $this->allowExternalSenders;
    }

    /**
     * Gets the appRoleAssignments property value. Represents the app roles a group has been granted for an application. Supports $expand.
     * @return array<AppRoleAssignment>|null
    */
    public function getAppRoleAssignments(): ?array {
        return $this->appRoleAssignments;
    }

    /**
     * Gets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select.
     * @return array<AssignedLabel>|null
    */
    public function getAssignedLabels(): ?array {
        return $this->assignedLabels;
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        return $this->assignedLicenses;
    }

    /**
     * Gets the autoSubscribeNewMembers property value. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAutoSubscribeNewMembers(): ?bool {
        return $this->autoSubscribeNewMembers;
    }

    /**
     * Gets the calendar property value. The group's calendar. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        return $this->calendar;
    }

    /**
     * Gets the calendarView property value. The calendar view for the calendar. Read-only.
     * @return array<Event>|null
    */
    public function getCalendarView(): ?array {
        return $this->calendarView;
    }

    /**
     * Gets the classification property value. Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getClassification(): ?string {
        return $this->classification;
    }

    /**
     * Gets the conversations property value. The group's conversations.
     * @return array<Conversation>|null
    */
    public function getConversations(): ?array {
        return $this->conversations;
    }

    /**
     * Gets the createdByAppId property value. App ID of the app used to create the group. Can be null for some groups. Returned by default. Read-only. Supports $filter (eq, ne, not, in, startsWith).
     * @return string|null
    */
    public function getCreatedByAppId(): ?string {
        return $this->createdByAppId;
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the createdOnBehalfOf property value. The user (or application) that created the group. Note: This is not set if the user is an administrator. Read-only.
     * @return DirectoryObject|null
    */
    public function getCreatedOnBehalfOf(): ?DirectoryObject {
        return $this->createdOnBehalfOf;
    }

    /**
     * Gets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the group. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the drive property value. The group's default drive. Read-only.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->drive;
    }

    /**
     * Gets the drives property value. The group's drives. Read-only.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        return $this->drives;
    }

    /**
     * Gets the endpoints property value. Endpoints for the group. Read-only. Nullable.
     * @return array<Endpoint>|null
    */
    public function getEndpoints(): ?array {
        return $this->endpoints;
    }

    /**
     * Gets the events property value. The group's events.
     * @return array<Event>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * Gets the expirationDateTime property value. Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedSenders' => function (ParseNode $n) use ($o) { $o->setAcceptedSenders($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'accessType' => function (ParseNode $n) use ($o) { $o->setAccessType($n->getEnumValue(GroupAccessType::class)); },
            'allowExternalSenders' => function (ParseNode $n) use ($o) { $o->setAllowExternalSenders($n->getBooleanValue()); },
            'appRoleAssignments' => function (ParseNode $n) use ($o) { $o->setAppRoleAssignments($n->getCollectionOfObjectValues(array(AppRoleAssignment::class, 'createFromDiscriminatorValue'))); },
            'assignedLabels' => function (ParseNode $n) use ($o) { $o->setAssignedLabels($n->getCollectionOfObjectValues(array(AssignedLabel::class, 'createFromDiscriminatorValue'))); },
            'assignedLicenses' => function (ParseNode $n) use ($o) { $o->setAssignedLicenses($n->getCollectionOfObjectValues(array(AssignedLicense::class, 'createFromDiscriminatorValue'))); },
            'autoSubscribeNewMembers' => function (ParseNode $n) use ($o) { $o->setAutoSubscribeNewMembers($n->getBooleanValue()); },
            'calendar' => function (ParseNode $n) use ($o) { $o->setCalendar($n->getObjectValue(array(Calendar::class, 'createFromDiscriminatorValue'))); },
            'calendarView' => function (ParseNode $n) use ($o) { $o->setCalendarView($n->getCollectionOfObjectValues(array(Event::class, 'createFromDiscriminatorValue'))); },
            'classification' => function (ParseNode $n) use ($o) { $o->setClassification($n->getStringValue()); },
            'conversations' => function (ParseNode $n) use ($o) { $o->setConversations($n->getCollectionOfObjectValues(array(Conversation::class, 'createFromDiscriminatorValue'))); },
            'createdByAppId' => function (ParseNode $n) use ($o) { $o->setCreatedByAppId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'createdOnBehalfOf' => function (ParseNode $n) use ($o) { $o->setCreatedOnBehalfOf($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'drive' => function (ParseNode $n) use ($o) { $o->setDrive($n->getObjectValue(array(Drive::class, 'createFromDiscriminatorValue'))); },
            'drives' => function (ParseNode $n) use ($o) { $o->setDrives($n->getCollectionOfObjectValues(array(Drive::class, 'createFromDiscriminatorValue'))); },
            'endpoints' => function (ParseNode $n) use ($o) { $o->setEndpoints($n->getCollectionOfObjectValues(array(Endpoint::class, 'createFromDiscriminatorValue'))); },
            'events' => function (ParseNode $n) use ($o) { $o->setEvents($n->getCollectionOfObjectValues(array(Event::class, 'createFromDiscriminatorValue'))); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'groupLifecyclePolicies' => function (ParseNode $n) use ($o) { $o->setGroupLifecyclePolicies($n->getCollectionOfObjectValues(array(GroupLifecyclePolicy::class, 'createFromDiscriminatorValue'))); },
            'groupTypes' => function (ParseNode $n) use ($o) { $o->setGroupTypes($n->getCollectionOfPrimitiveValues()); },
            'hasMembersWithLicenseErrors' => function (ParseNode $n) use ($o) { $o->setHasMembersWithLicenseErrors($n->getBooleanValue()); },
            'hideFromAddressLists' => function (ParseNode $n) use ($o) { $o->setHideFromAddressLists($n->getBooleanValue()); },
            'hideFromOutlookClients' => function (ParseNode $n) use ($o) { $o->setHideFromOutlookClients($n->getBooleanValue()); },
            'infoCatalogs' => function (ParseNode $n) use ($o) { $o->setInfoCatalogs($n->getCollectionOfPrimitiveValues()); },
            'isArchived' => function (ParseNode $n) use ($o) { $o->setIsArchived($n->getBooleanValue()); },
            'isAssignableToRole' => function (ParseNode $n) use ($o) { $o->setIsAssignableToRole($n->getBooleanValue()); },
            'isFavorite' => function (ParseNode $n) use ($o) { $o->setIsFavorite($n->getBooleanValue()); },
            'isManagementRestricted' => function (ParseNode $n) use ($o) { $o->setIsManagementRestricted($n->getBooleanValue()); },
            'isSubscribedByMail' => function (ParseNode $n) use ($o) { $o->setIsSubscribedByMail($n->getBooleanValue()); },
            'licenseProcessingState' => function (ParseNode $n) use ($o) { $o->setLicenseProcessingState($n->getObjectValue(array(LicenseProcessingState::class, 'createFromDiscriminatorValue'))); },
            'mail' => function (ParseNode $n) use ($o) { $o->setMail($n->getStringValue()); },
            'mailEnabled' => function (ParseNode $n) use ($o) { $o->setMailEnabled($n->getBooleanValue()); },
            'mailNickname' => function (ParseNode $n) use ($o) { $o->setMailNickname($n->getStringValue()); },
            'mdmAppId' => function (ParseNode $n) use ($o) { $o->setMdmAppId($n->getStringValue()); },
            'memberOf' => function (ParseNode $n) use ($o) { $o->setMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'membershipRule' => function (ParseNode $n) use ($o) { $o->setMembershipRule($n->getStringValue()); },
            'membershipRuleProcessingState' => function (ParseNode $n) use ($o) { $o->setMembershipRuleProcessingState($n->getStringValue()); },
            'membershipRuleProcessingStatus' => function (ParseNode $n) use ($o) { $o->setMembershipRuleProcessingStatus($n->getObjectValue(array(MembershipRuleProcessingStatus::class, 'createFromDiscriminatorValue'))); },
            'membersWithLicenseErrors' => function (ParseNode $n) use ($o) { $o->setMembersWithLicenseErrors($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'onenote' => function (ParseNode $n) use ($o) { $o->setOnenote($n->getObjectValue(array(Onenote::class, 'createFromDiscriminatorValue'))); },
            'onPremisesDomainName' => function (ParseNode $n) use ($o) { $o->setOnPremisesDomainName($n->getStringValue()); },
            'onPremisesLastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()); },
            'onPremisesNetBiosName' => function (ParseNode $n) use ($o) { $o->setOnPremisesNetBiosName($n->getStringValue()); },
            'onPremisesProvisioningErrors' => function (ParseNode $n) use ($o) { $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues(array(OnPremisesProvisioningError::class, 'createFromDiscriminatorValue'))); },
            'onPremisesSamAccountName' => function (ParseNode $n) use ($o) { $o->setOnPremisesSamAccountName($n->getStringValue()); },
            'onPremisesSecurityIdentifier' => function (ParseNode $n) use ($o) { $o->setOnPremisesSecurityIdentifier($n->getStringValue()); },
            'onPremisesSyncEnabled' => function (ParseNode $n) use ($o) { $o->setOnPremisesSyncEnabled($n->getBooleanValue()); },
            'organizationId' => function (ParseNode $n) use ($o) { $o->setOrganizationId($n->getStringValue()); },
            'owners' => function (ParseNode $n) use ($o) { $o->setOwners($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'permissionGrants' => function (ParseNode $n) use ($o) { $o->setPermissionGrants($n->getCollectionOfObjectValues(array(ResourceSpecificPermissionGrant::class, 'createFromDiscriminatorValue'))); },
            'photo' => function (ParseNode $n) use ($o) { $o->setPhoto($n->getObjectValue(array(ProfilePhoto::class, 'createFromDiscriminatorValue'))); },
            'photos' => function (ParseNode $n) use ($o) { $o->setPhotos($n->getCollectionOfObjectValues(array(ProfilePhoto::class, 'createFromDiscriminatorValue'))); },
            'planner' => function (ParseNode $n) use ($o) { $o->setPlanner($n->getObjectValue(array(PlannerGroup::class, 'createFromDiscriminatorValue'))); },
            'preferredDataLocation' => function (ParseNode $n) use ($o) { $o->setPreferredDataLocation($n->getStringValue()); },
            'preferredLanguage' => function (ParseNode $n) use ($o) { $o->setPreferredLanguage($n->getStringValue()); },
            'proxyAddresses' => function (ParseNode $n) use ($o) { $o->setProxyAddresses($n->getCollectionOfPrimitiveValues()); },
            'rejectedSenders' => function (ParseNode $n) use ($o) { $o->setRejectedSenders($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'renewedDateTime' => function (ParseNode $n) use ($o) { $o->setRenewedDateTime($n->getDateTimeValue()); },
            'resourceBehaviorOptions' => function (ParseNode $n) use ($o) { $o->setResourceBehaviorOptions($n->getCollectionOfPrimitiveValues()); },
            'resourceProvisioningOptions' => function (ParseNode $n) use ($o) { $o->setResourceProvisioningOptions($n->getCollectionOfPrimitiveValues()); },
            'securityEnabled' => function (ParseNode $n) use ($o) { $o->setSecurityEnabled($n->getBooleanValue()); },
            'securityIdentifier' => function (ParseNode $n) use ($o) { $o->setSecurityIdentifier($n->getStringValue()); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getCollectionOfObjectValues(array(DirectorySetting::class, 'createFromDiscriminatorValue'))); },
            'sites' => function (ParseNode $n) use ($o) { $o->setSites($n->getCollectionOfObjectValues(array(Site::class, 'createFromDiscriminatorValue'))); },
            'team' => function (ParseNode $n) use ($o) { $o->setTeam($n->getObjectValue(array(Team::class, 'createFromDiscriminatorValue'))); },
            'theme' => function (ParseNode $n) use ($o) { $o->setTheme($n->getStringValue()); },
            'threads' => function (ParseNode $n) use ($o) { $o->setThreads($n->getCollectionOfObjectValues(array(ConversationThread::class, 'createFromDiscriminatorValue'))); },
            'transitiveMemberOf' => function (ParseNode $n) use ($o) { $o->setTransitiveMemberOf($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'transitiveMembers' => function (ParseNode $n) use ($o) { $o->setTransitiveMembers($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'unseenConversationsCount' => function (ParseNode $n) use ($o) { $o->setUnseenConversationsCount($n->getIntegerValue()); },
            'unseenCount' => function (ParseNode $n) use ($o) { $o->setUnseenCount($n->getIntegerValue()); },
            'unseenMessagesCount' => function (ParseNode $n) use ($o) { $o->setUnseenMessagesCount($n->getIntegerValue()); },
            'visibility' => function (ParseNode $n) use ($o) { $o->setVisibility($n->getStringValue()); },
            'writebackConfiguration' => function (ParseNode $n) use ($o) { $o->setWritebackConfiguration($n->getObjectValue(array(GroupWritebackConfiguration::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     * @return array<GroupLifecyclePolicy>|null
    */
    public function getGroupLifecyclePolicies(): ?array {
        return $this->groupLifecyclePolicies;
    }

    /**
     * Gets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     * @return array<string>|null
    */
    public function getGroupTypes(): ?array {
        return $this->groupTypes;
    }

    /**
     * Gets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true).  Supports $filter (eq).
     * @return bool|null
    */
    public function getHasMembersWithLicenseErrors(): ?bool {
        return $this->hasMembersWithLicenseErrors;
    }

    /**
     * Gets the hideFromAddressLists property value. true if the group is not displayed in certain parts of the Outlook user interface: in the Address Book, in address lists for selecting message recipients, and in the Browse Groups dialog for searching groups; false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromAddressLists(): ?bool {
        return $this->hideFromAddressLists;
    }

    /**
     * Gets the hideFromOutlookClients property value. true if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web, false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromOutlookClients(): ?bool {
        return $this->hideFromOutlookClients;
    }

    /**
     * Gets the infoCatalogs property value. Identifies the info segments assigned to the group. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getInfoCatalogs(): ?array {
        return $this->infoCatalogs;
    }

    /**
     * Gets the isArchived property value. When a group is associated with a team, this property determines whether the team is in read-only mode.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the isAssignableToRole property value. Indicates whether this group can be assigned to an Azure Active Directory role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global administrator and Privileged role administrator roles can set this property. The caller must be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsReturned by default. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsAssignableToRole(): ?bool {
        return $this->isAssignableToRole;
    }

    /**
     * Gets the isFavorite property value. The isFavorite property
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        return $this->isFavorite;
    }

    /**
     * Gets the isManagementRestricted property value. The isManagementRestricted property
     * @return bool|null
    */
    public function getIsManagementRestricted(): ?bool {
        return $this->isManagementRestricted;
    }

    /**
     * Gets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getIsSubscribedByMail(): ?bool {
        return $this->isSubscribedByMail;
    }

    /**
     * Gets the licenseProcessingState property value. Indicates status of the group license assignment to all members of the group. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete. Returned only on $select. Read-only.
     * @return LicenseProcessingState|null
    */
    public function getLicenseProcessingState(): ?LicenseProcessingState {
        return $this->licenseProcessingState;
    }

    /**
     * Gets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->mail;
    }

    /**
     * Gets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not, and eq on null values).
     * @return bool|null
    */
    public function getMailEnabled(): ?bool {
        return $this->mailEnabled;
    }

    /**
     * Gets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : . <> , SPACE. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->mailNickname;
    }

    /**
     * Gets the mdmAppId property value. The mdmAppId property
     * @return string|null
    */
    public function getMdmAppId(): ?string {
        return $this->mdmAppId;
    }

    /**
     * Gets the memberOf property value. Groups and administrative units that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->memberOf;
    }

    /**
     * Gets the members property value. Members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        return $this->membershipRule;
    }

    /**
     * Gets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     * @return string|null
    */
    public function getMembershipRuleProcessingState(): ?string {
        return $this->membershipRuleProcessingState;
    }

    /**
     * Gets the membershipRuleProcessingStatus property value. Describes the processing status for rules-based dynamic groups. The property is null for non-rule based dynamic groups or if the dynamic group processing has been paused. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). Read-only.
     * @return MembershipRuleProcessingStatus|null
    */
    public function getMembershipRuleProcessingStatus(): ?MembershipRuleProcessingStatus {
        return $this->membershipRuleProcessingStatus;
    }

    /**
     * Gets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     * @return array<DirectoryObject>|null
    */
    public function getMembersWithLicenseErrors(): ?array {
        return $this->membersWithLicenseErrors;
    }

    /**
     * Gets the onenote property value. The onenote property
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        return $this->onenote;
    }

    /**
     * Gets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @return string|null
    */
    public function getOnPremisesDomainName(): ?string {
        return $this->onPremisesDomainName;
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->onPremisesLastSyncDateTime;
    }

    /**
     * Gets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @return string|null
    */
    public function getOnPremisesNetBiosName(): ?string {
        return $this->onPremisesNetBiosName;
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     * @return array<OnPremisesProvisioningError>|null
    */
    public function getOnPremisesProvisioningErrors(): ?array {
        return $this->onPremisesProvisioningErrors;
    }

    /**
     * Gets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     * @return string|null
    */
    public function getOnPremisesSamAccountName(): ?string {
        return $this->onPremisesSamAccountName;
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->onPremisesSecurityIdentifier;
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->onPremisesSyncEnabled;
    }

    /**
     * Gets the organizationId property value. The organizationId property
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the owners property value. The owners of the group who can be users or service principals. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        return $this->owners;
    }

    /**
     * Gets the permissionGrants property value. The permissions that have been granted for a group to a specific application. Supports $expand.
     * @return array<ResourceSpecificPermissionGrant>|null
    */
    public function getPermissionGrants(): ?array {
        return $this->permissionGrants;
    }

    /**
     * Gets the photo property value. The group's profile photo.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->photo;
    }

    /**
     * Gets the photos property value. The profile photos owned by the group. Read-only. Nullable.
     * @return array<ProfilePhoto>|null
    */
    public function getPhotos(): ?array {
        return $this->photos;
    }

    /**
     * Gets the planner property value. Selective Planner services available to the group. Read-only. Nullable.
     * @return PlannerGroup|null
    */
    public function getPlanner(): ?PlannerGroup {
        return $this->planner;
    }

    /**
     * Gets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     * @return string|null
    */
    public function getPreferredDataLocation(): ?string {
        return $this->preferredDataLocation;
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->preferredLanguage;
    }

    /**
     * Gets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required for filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, and counting empty collections).
     * @return array<string>|null
    */
    public function getProxyAddresses(): ?array {
        return $this->proxyAddresses;
    }

    /**
     * Gets the rejectedSenders property value. The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     * @return array<DirectoryObject>|null
    */
    public function getRejectedSenders(): ?array {
        return $this->rejectedSenders;
    }

    /**
     * Gets the renewedDateTime property value. Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getRenewedDateTime(): ?DateTime {
        return $this->renewedDateTime;
    }

    /**
     * Gets the resourceBehaviorOptions property value. Specifies the group behaviors that can be set for a Microsoft 365 group during creation. This can be set only as part of creation (POST). Possible values are AllowOnlyMembersToPost, HideGroupInOutlook, SubscribeNewGroupMembers, WelcomeEmailDisabled. For more information, see Set Microsoft 365 group behaviors and provisioning options.
     * @return array<string>|null
    */
    public function getResourceBehaviorOptions(): ?array {
        return $this->resourceBehaviorOptions;
    }

    /**
     * Gets the resourceProvisioningOptions property value. Specifies the group resources that are provisioned as part of Microsoft 365 group creation, that are not normally part of default group creation. Possible value is Team. For more information, see Set Microsoft 365 group behaviors and provisioning options. Returned by default. Supports $filter (eq, not, startsWith.
     * @return array<string>|null
    */
    public function getResourceProvisioningOptions(): ?array {
        return $this->resourceProvisioningOptions;
    }

    /**
     * Gets the securityEnabled property value. Specifies whether the group is a security group. Required.Returned by default. Supports $filter (eq, ne, not, in).
     * @return bool|null
    */
    public function getSecurityEnabled(): ?bool {
        return $this->securityEnabled;
    }

    /**
     * Gets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Returned by default.
     * @return string|null
    */
    public function getSecurityIdentifier(): ?string {
        return $this->securityIdentifier;
    }

    /**
     * Gets the settings property value. Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
     * @return array<DirectorySetting>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Gets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        return $this->sites;
    }

    /**
     * Gets the team property value. The team associated with this group.
     * @return Team|null
    */
    public function getTeam(): ?Team {
        return $this->team;
    }

    /**
     * Gets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
     * @return string|null
    */
    public function getTheme(): ?string {
        return $this->theme;
    }

    /**
     * Gets the threads property value. The group's conversation threads. Nullable.
     * @return array<ConversationThread>|null
    */
    public function getThreads(): ?array {
        return $this->threads;
    }

    /**
     * Gets the transitiveMemberOf property value. The transitiveMemberOf property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->transitiveMemberOf;
    }

    /**
     * Gets the transitiveMembers property value. The transitiveMembers property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMembers(): ?array {
        return $this->transitiveMembers;
    }

    /**
     * Gets the unseenConversationsCount property value. Count of conversations that have been delivered one or more new posts since the signed-in user's last visit to the group. This property is the same as unseenCount. Returned only on $select.
     * @return int|null
    */
    public function getUnseenConversationsCount(): ?int {
        return $this->unseenConversationsCount;
    }

    /**
     * Gets the unseenCount property value. Count of conversations that have received new posts since the signed-in user last visited the group. This property is the same as unseenConversationsCount.Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return int|null
    */
    public function getUnseenCount(): ?int {
        return $this->unseenCount;
    }

    /**
     * Gets the unseenMessagesCount property value. Count of new posts that have been delivered to the group's conversations since the signed-in user's last visit to the group. Returned only on $select.
     * @return int|null
    */
    public function getUnseenMessagesCount(): ?int {
        return $this->unseenMessagesCount;
    }

    /**
     * Gets the visibility property value. Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or Hiddenmembership. Hiddenmembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->visibility;
    }

    /**
     * Gets the writebackConfiguration property value. The writebackConfiguration property
     * @return GroupWritebackConfiguration|null
    */
    public function getWritebackConfiguration(): ?GroupWritebackConfiguration {
        return $this->writebackConfiguration;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acceptedSenders', $this->acceptedSenders);
        $writer->writeEnumValue('accessType', $this->accessType);
        $writer->writeBooleanValue('allowExternalSenders', $this->allowExternalSenders);
        $writer->writeCollectionOfObjectValues('appRoleAssignments', $this->appRoleAssignments);
        $writer->writeCollectionOfObjectValues('assignedLabels', $this->assignedLabels);
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->assignedLicenses);
        $writer->writeBooleanValue('autoSubscribeNewMembers', $this->autoSubscribeNewMembers);
        $writer->writeObjectValue('calendar', $this->calendar);
        $writer->writeCollectionOfObjectValues('calendarView', $this->calendarView);
        $writer->writeStringValue('classification', $this->classification);
        $writer->writeCollectionOfObjectValues('conversations', $this->conversations);
        $writer->writeStringValue('createdByAppId', $this->createdByAppId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('createdOnBehalfOf', $this->createdOnBehalfOf);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('drive', $this->drive);
        $writer->writeCollectionOfObjectValues('drives', $this->drives);
        $writer->writeCollectionOfObjectValues('endpoints', $this->endpoints);
        $writer->writeCollectionOfObjectValues('events', $this->events);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeCollectionOfObjectValues('groupLifecyclePolicies', $this->groupLifecyclePolicies);
        $writer->writeCollectionOfPrimitiveValues('groupTypes', $this->groupTypes);
        $writer->writeBooleanValue('hasMembersWithLicenseErrors', $this->hasMembersWithLicenseErrors);
        $writer->writeBooleanValue('hideFromAddressLists', $this->hideFromAddressLists);
        $writer->writeBooleanValue('hideFromOutlookClients', $this->hideFromOutlookClients);
        $writer->writeCollectionOfPrimitiveValues('infoCatalogs', $this->infoCatalogs);
        $writer->writeBooleanValue('isArchived', $this->isArchived);
        $writer->writeBooleanValue('isAssignableToRole', $this->isAssignableToRole);
        $writer->writeBooleanValue('isFavorite', $this->isFavorite);
        $writer->writeBooleanValue('isManagementRestricted', $this->isManagementRestricted);
        $writer->writeBooleanValue('isSubscribedByMail', $this->isSubscribedByMail);
        $writer->writeObjectValue('licenseProcessingState', $this->licenseProcessingState);
        $writer->writeStringValue('mail', $this->mail);
        $writer->writeBooleanValue('mailEnabled', $this->mailEnabled);
        $writer->writeStringValue('mailNickname', $this->mailNickname);
        $writer->writeStringValue('mdmAppId', $this->mdmAppId);
        $writer->writeCollectionOfObjectValues('memberOf', $this->memberOf);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeStringValue('membershipRule', $this->membershipRule);
        $writer->writeStringValue('membershipRuleProcessingState', $this->membershipRuleProcessingState);
        $writer->writeObjectValue('membershipRuleProcessingStatus', $this->membershipRuleProcessingStatus);
        $writer->writeCollectionOfObjectValues('membersWithLicenseErrors', $this->membersWithLicenseErrors);
        $writer->writeObjectValue('onenote', $this->onenote);
        $writer->writeStringValue('onPremisesDomainName', $this->onPremisesDomainName);
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->onPremisesLastSyncDateTime);
        $writer->writeStringValue('onPremisesNetBiosName', $this->onPremisesNetBiosName);
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->onPremisesProvisioningErrors);
        $writer->writeStringValue('onPremisesSamAccountName', $this->onPremisesSamAccountName);
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->onPremisesSecurityIdentifier);
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->onPremisesSyncEnabled);
        $writer->writeStringValue('organizationId', $this->organizationId);
        $writer->writeCollectionOfObjectValues('owners', $this->owners);
        $writer->writeCollectionOfObjectValues('permissionGrants', $this->permissionGrants);
        $writer->writeObjectValue('photo', $this->photo);
        $writer->writeCollectionOfObjectValues('photos', $this->photos);
        $writer->writeObjectValue('planner', $this->planner);
        $writer->writeStringValue('preferredDataLocation', $this->preferredDataLocation);
        $writer->writeStringValue('preferredLanguage', $this->preferredLanguage);
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->proxyAddresses);
        $writer->writeCollectionOfObjectValues('rejectedSenders', $this->rejectedSenders);
        $writer->writeDateTimeValue('renewedDateTime', $this->renewedDateTime);
        $writer->writeCollectionOfPrimitiveValues('resourceBehaviorOptions', $this->resourceBehaviorOptions);
        $writer->writeCollectionOfPrimitiveValues('resourceProvisioningOptions', $this->resourceProvisioningOptions);
        $writer->writeBooleanValue('securityEnabled', $this->securityEnabled);
        $writer->writeStringValue('securityIdentifier', $this->securityIdentifier);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
        $writer->writeCollectionOfObjectValues('sites', $this->sites);
        $writer->writeObjectValue('team', $this->team);
        $writer->writeStringValue('theme', $this->theme);
        $writer->writeCollectionOfObjectValues('threads', $this->threads);
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->transitiveMemberOf);
        $writer->writeCollectionOfObjectValues('transitiveMembers', $this->transitiveMembers);
        $writer->writeIntegerValue('unseenConversationsCount', $this->unseenConversationsCount);
        $writer->writeIntegerValue('unseenCount', $this->unseenCount);
        $writer->writeIntegerValue('unseenMessagesCount', $this->unseenMessagesCount);
        $writer->writeStringValue('visibility', $this->visibility);
        $writer->writeObjectValue('writebackConfiguration', $this->writebackConfiguration);
    }

    /**
     * Sets the acceptedSenders property value. The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
     *  @param array<DirectoryObject>|null $value Value to set for the acceptedSenders property.
    */
    public function setAcceptedSenders(?array $value ): void {
        $this->acceptedSenders = $value;
    }

    /**
     * Sets the accessType property value. The accessType property
     *  @param GroupAccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?GroupAccessType $value ): void {
        $this->accessType = $value;
    }

    /**
     * Sets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the allowExternalSenders property.
    */
    public function setAllowExternalSenders(?bool $value ): void {
        $this->allowExternalSenders = $value;
    }

    /**
     * Sets the appRoleAssignments property value. Represents the app roles a group has been granted for an application. Supports $expand.
     *  @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignments property.
    */
    public function setAppRoleAssignments(?array $value ): void {
        $this->appRoleAssignments = $value;
    }

    /**
     * Sets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select.
     *  @param array<AssignedLabel>|null $value Value to set for the assignedLabels property.
    */
    public function setAssignedLabels(?array $value ): void {
        $this->assignedLabels = $value;
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
     *  @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value ): void {
        $this->assignedLicenses = $value;
    }

    /**
     * Sets the autoSubscribeNewMembers property value. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the autoSubscribeNewMembers property.
    */
    public function setAutoSubscribeNewMembers(?bool $value ): void {
        $this->autoSubscribeNewMembers = $value;
    }

    /**
     * Sets the calendar property value. The group's calendar. Read-only.
     *  @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value ): void {
        $this->calendar = $value;
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Read-only.
     *  @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value ): void {
        $this->calendarView = $value;
    }

    /**
     * Sets the classification property value. Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     *  @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the conversations property value. The group's conversations.
     *  @param array<Conversation>|null $value Value to set for the conversations property.
    */
    public function setConversations(?array $value ): void {
        $this->conversations = $value;
    }

    /**
     * Sets the createdByAppId property value. App ID of the app used to create the group. Can be null for some groups. Returned by default. Read-only. Supports $filter (eq, ne, not, in, startsWith).
     *  @param string|null $value Value to set for the createdByAppId property.
    */
    public function setCreatedByAppId(?string $value ): void {
        $this->createdByAppId = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the createdOnBehalfOf property value. The user (or application) that created the group. Note: This is not set if the user is an administrator. Read-only.
     *  @param DirectoryObject|null $value Value to set for the createdOnBehalfOf property.
    */
    public function setCreatedOnBehalfOf(?DirectoryObject $value ): void {
        $this->createdOnBehalfOf = $value;
    }

    /**
     * Sets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the group. Required. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the drive property value. The group's default drive. Read-only.
     *  @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value ): void {
        $this->drive = $value;
    }

    /**
     * Sets the drives property value. The group's drives. Read-only.
     *  @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value ): void {
        $this->drives = $value;
    }

    /**
     * Sets the endpoints property value. Endpoints for the group. Read-only. Nullable.
     *  @param array<Endpoint>|null $value Value to set for the endpoints property.
    */
    public function setEndpoints(?array $value ): void {
        $this->endpoints = $value;
    }

    /**
     * Sets the events property value. The group's events.
     *  @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value ): void {
        $this->events = $value;
    }

    /**
     * Sets the expirationDateTime property value. Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     *  @param array<GroupLifecyclePolicy>|null $value Value to set for the groupLifecyclePolicies property.
    */
    public function setGroupLifecyclePolicies(?array $value ): void {
        $this->groupLifecyclePolicies = $value;
    }

    /**
     * Sets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     *  @param array<string>|null $value Value to set for the groupTypes property.
    */
    public function setGroupTypes(?array $value ): void {
        $this->groupTypes = $value;
    }

    /**
     * Sets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true).  Supports $filter (eq).
     *  @param bool|null $value Value to set for the hasMembersWithLicenseErrors property.
    */
    public function setHasMembersWithLicenseErrors(?bool $value ): void {
        $this->hasMembersWithLicenseErrors = $value;
    }

    /**
     * Sets the hideFromAddressLists property value. true if the group is not displayed in certain parts of the Outlook user interface: in the Address Book, in address lists for selecting message recipients, and in the Browse Groups dialog for searching groups; false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the hideFromAddressLists property.
    */
    public function setHideFromAddressLists(?bool $value ): void {
        $this->hideFromAddressLists = $value;
    }

    /**
     * Sets the hideFromOutlookClients property value. true if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web, false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the hideFromOutlookClients property.
    */
    public function setHideFromOutlookClients(?bool $value ): void {
        $this->hideFromOutlookClients = $value;
    }

    /**
     * Sets the infoCatalogs property value. Identifies the info segments assigned to the group. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the infoCatalogs property.
    */
    public function setInfoCatalogs(?array $value ): void {
        $this->infoCatalogs = $value;
    }

    /**
     * Sets the isArchived property value. When a group is associated with a team, this property determines whether the team is in read-only mode.
     *  @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value ): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the isAssignableToRole property value. Indicates whether this group can be assigned to an Azure Active Directory role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global administrator and Privileged role administrator roles can set this property. The caller must be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsReturned by default. Supports $filter (eq, ne, not).
     *  @param bool|null $value Value to set for the isAssignableToRole property.
    */
    public function setIsAssignableToRole(?bool $value ): void {
        $this->isAssignableToRole = $value;
    }

    /**
     * Sets the isFavorite property value. The isFavorite property
     *  @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value ): void {
        $this->isFavorite = $value;
    }

    /**
     * Sets the isManagementRestricted property value. The isManagementRestricted property
     *  @param bool|null $value Value to set for the isManagementRestricted property.
    */
    public function setIsManagementRestricted(?bool $value ): void {
        $this->isManagementRestricted = $value;
    }

    /**
     * Sets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param bool|null $value Value to set for the isSubscribedByMail property.
    */
    public function setIsSubscribedByMail(?bool $value ): void {
        $this->isSubscribedByMail = $value;
    }

    /**
     * Sets the licenseProcessingState property value. Indicates status of the group license assignment to all members of the group. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete. Returned only on $select. Read-only.
     *  @param LicenseProcessingState|null $value Value to set for the licenseProcessingState property.
    */
    public function setLicenseProcessingState(?LicenseProcessingState $value ): void {
        $this->licenseProcessingState = $value;
    }

    /**
     * Sets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value ): void {
        $this->mail = $value;
    }

    /**
     * Sets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not, and eq on null values).
     *  @param bool|null $value Value to set for the mailEnabled property.
    */
    public function setMailEnabled(?bool $value ): void {
        $this->mailEnabled = $value;
    }

    /**
     * Sets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : . <> , SPACE. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     *  @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value ): void {
        $this->mailNickname = $value;
    }

    /**
     * Sets the mdmAppId property value. The mdmAppId property
     *  @param string|null $value Value to set for the mdmAppId property.
    */
    public function setMdmAppId(?string $value ): void {
        $this->mdmAppId = $value;
    }

    /**
     * Sets the memberOf property value. Groups and administrative units that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value ): void {
        $this->memberOf = $value;
    }

    /**
     * Sets the members property value. Members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     *  @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     *  @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value ): void {
        $this->membershipRule = $value;
    }

    /**
     * Sets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     *  @param string|null $value Value to set for the membershipRuleProcessingState property.
    */
    public function setMembershipRuleProcessingState(?string $value ): void {
        $this->membershipRuleProcessingState = $value;
    }

    /**
     * Sets the membershipRuleProcessingStatus property value. Describes the processing status for rules-based dynamic groups. The property is null for non-rule based dynamic groups or if the dynamic group processing has been paused. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). Read-only.
     *  @param MembershipRuleProcessingStatus|null $value Value to set for the membershipRuleProcessingStatus property.
    */
    public function setMembershipRuleProcessingStatus(?MembershipRuleProcessingStatus $value ): void {
        $this->membershipRuleProcessingStatus = $value;
    }

    /**
     * Sets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     *  @param array<DirectoryObject>|null $value Value to set for the membersWithLicenseErrors property.
    */
    public function setMembersWithLicenseErrors(?array $value ): void {
        $this->membersWithLicenseErrors = $value;
    }

    /**
     * Sets the onenote property value. The onenote property
     *  @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value ): void {
        $this->onenote = $value;
    }

    /**
     * Sets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     *  @param string|null $value Value to set for the onPremisesDomainName property.
    */
    public function setOnPremisesDomainName(?string $value ): void {
        $this->onPremisesDomainName = $value;
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     *  @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value ): void {
        $this->onPremisesLastSyncDateTime = $value;
    }

    /**
     * Sets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     *  @param string|null $value Value to set for the onPremisesNetBiosName property.
    */
    public function setOnPremisesNetBiosName(?string $value ): void {
        $this->onPremisesNetBiosName = $value;
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     *  @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value ): void {
        $this->onPremisesProvisioningErrors = $value;
    }

    /**
     * Sets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     *  @param string|null $value Value to set for the onPremisesSamAccountName property.
    */
    public function setOnPremisesSamAccountName(?string $value ): void {
        $this->onPremisesSamAccountName = $value;
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
     *  @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value ): void {
        $this->onPremisesSecurityIdentifier = $value;
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     *  @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value ): void {
        $this->onPremisesSyncEnabled = $value;
    }

    /**
     * Sets the organizationId property value. The organizationId property
     *  @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value ): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the owners property value. The owners of the group who can be users or service principals. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     *  @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value ): void {
        $this->owners = $value;
    }

    /**
     * Sets the permissionGrants property value. The permissions that have been granted for a group to a specific application. Supports $expand.
     *  @param array<ResourceSpecificPermissionGrant>|null $value Value to set for the permissionGrants property.
    */
    public function setPermissionGrants(?array $value ): void {
        $this->permissionGrants = $value;
    }

    /**
     * Sets the photo property value. The group's profile photo.
     *  @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value ): void {
        $this->photo = $value;
    }

    /**
     * Sets the photos property value. The profile photos owned by the group. Read-only. Nullable.
     *  @param array<ProfilePhoto>|null $value Value to set for the photos property.
    */
    public function setPhotos(?array $value ): void {
        $this->photos = $value;
    }

    /**
     * Sets the planner property value. Selective Planner services available to the group. Read-only. Nullable.
     *  @param PlannerGroup|null $value Value to set for the planner property.
    */
    public function setPlanner(?PlannerGroup $value ): void {
        $this->planner = $value;
    }

    /**
     * Sets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     *  @param string|null $value Value to set for the preferredDataLocation property.
    */
    public function setPreferredDataLocation(?string $value ): void {
        $this->preferredDataLocation = $value;
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     *  @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value ): void {
        $this->preferredLanguage = $value;
    }

    /**
     * Sets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required for filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, and counting empty collections).
     *  @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value ): void {
        $this->proxyAddresses = $value;
    }

    /**
     * Sets the rejectedSenders property value. The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     *  @param array<DirectoryObject>|null $value Value to set for the rejectedSenders property.
    */
    public function setRejectedSenders(?array $value ): void {
        $this->rejectedSenders = $value;
    }

    /**
     * Sets the renewedDateTime property value. Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     *  @param DateTime|null $value Value to set for the renewedDateTime property.
    */
    public function setRenewedDateTime(?DateTime $value ): void {
        $this->renewedDateTime = $value;
    }

    /**
     * Sets the resourceBehaviorOptions property value. Specifies the group behaviors that can be set for a Microsoft 365 group during creation. This can be set only as part of creation (POST). Possible values are AllowOnlyMembersToPost, HideGroupInOutlook, SubscribeNewGroupMembers, WelcomeEmailDisabled. For more information, see Set Microsoft 365 group behaviors and provisioning options.
     *  @param array<string>|null $value Value to set for the resourceBehaviorOptions property.
    */
    public function setResourceBehaviorOptions(?array $value ): void {
        $this->resourceBehaviorOptions = $value;
    }

    /**
     * Sets the resourceProvisioningOptions property value. Specifies the group resources that are provisioned as part of Microsoft 365 group creation, that are not normally part of default group creation. Possible value is Team. For more information, see Set Microsoft 365 group behaviors and provisioning options. Returned by default. Supports $filter (eq, not, startsWith.
     *  @param array<string>|null $value Value to set for the resourceProvisioningOptions property.
    */
    public function setResourceProvisioningOptions(?array $value ): void {
        $this->resourceProvisioningOptions = $value;
    }

    /**
     * Sets the securityEnabled property value. Specifies whether the group is a security group. Required.Returned by default. Supports $filter (eq, ne, not, in).
     *  @param bool|null $value Value to set for the securityEnabled property.
    */
    public function setSecurityEnabled(?bool $value ): void {
        $this->securityEnabled = $value;
    }

    /**
     * Sets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Returned by default.
     *  @param string|null $value Value to set for the securityIdentifier property.
    */
    public function setSecurityIdentifier(?string $value ): void {
        $this->securityIdentifier = $value;
    }

    /**
     * Sets the settings property value. Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
     *  @param array<DirectorySetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     *  @param array<Site>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value ): void {
        $this->sites = $value;
    }

    /**
     * Sets the team property value. The team associated with this group.
     *  @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value ): void {
        $this->team = $value;
    }

    /**
     * Sets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
     *  @param string|null $value Value to set for the theme property.
    */
    public function setTheme(?string $value ): void {
        $this->theme = $value;
    }

    /**
     * Sets the threads property value. The group's conversation threads. Nullable.
     *  @param array<ConversationThread>|null $value Value to set for the threads property.
    */
    public function setThreads(?array $value ): void {
        $this->threads = $value;
    }

    /**
     * Sets the transitiveMemberOf property value. The transitiveMemberOf property
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value ): void {
        $this->transitiveMemberOf = $value;
    }

    /**
     * Sets the transitiveMembers property value. The transitiveMembers property
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMembers property.
    */
    public function setTransitiveMembers(?array $value ): void {
        $this->transitiveMembers = $value;
    }

    /**
     * Sets the unseenConversationsCount property value. Count of conversations that have been delivered one or more new posts since the signed-in user's last visit to the group. This property is the same as unseenCount. Returned only on $select.
     *  @param int|null $value Value to set for the unseenConversationsCount property.
    */
    public function setUnseenConversationsCount(?int $value ): void {
        $this->unseenConversationsCount = $value;
    }

    /**
     * Sets the unseenCount property value. Count of conversations that have received new posts since the signed-in user last visited the group. This property is the same as unseenConversationsCount.Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     *  @param int|null $value Value to set for the unseenCount property.
    */
    public function setUnseenCount(?int $value ): void {
        $this->unseenCount = $value;
    }

    /**
     * Sets the unseenMessagesCount property value. Count of new posts that have been delivered to the group's conversations since the signed-in user's last visit to the group. Returned only on $select.
     *  @param int|null $value Value to set for the unseenMessagesCount property.
    */
    public function setUnseenMessagesCount(?int $value ): void {
        $this->unseenMessagesCount = $value;
    }

    /**
     * Sets the visibility property value. Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or Hiddenmembership. Hiddenmembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
     *  @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value ): void {
        $this->visibility = $value;
    }

    /**
     * Sets the writebackConfiguration property value. The writebackConfiguration property
     *  @param GroupWritebackConfiguration|null $value Value to set for the writebackConfiguration property.
    */
    public function setWritebackConfiguration(?GroupWritebackConfiguration $value ): void {
        $this->writebackConfiguration = $value;
    }

}
