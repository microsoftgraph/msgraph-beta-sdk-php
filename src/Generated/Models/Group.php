<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Group extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new Group and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.group');
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
        return $this->getBackingStore()->get('acceptedSenders');
    }

    /**
     * Gets the accessType property value. The accessType property
     * @return GroupAccessType|null
    */
    public function getAccessType(): ?GroupAccessType {
        return $this->getBackingStore()->get('accessType');
    }

    /**
     * Gets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAllowExternalSenders(): ?bool {
        return $this->getBackingStore()->get('allowExternalSenders');
    }

    /**
     * Gets the appRoleAssignments property value. Represents the app roles a group has been granted for an application. Supports $expand.
     * @return array<AppRoleAssignment>|null
    */
    public function getAppRoleAssignments(): ?array {
        return $this->getBackingStore()->get('appRoleAssignments');
    }

    /**
     * Gets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select.
     * @return array<AssignedLabel>|null
    */
    public function getAssignedLabels(): ?array {
        return $this->getBackingStore()->get('assignedLabels');
    }

    /**
     * Gets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
     * @return array<AssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        return $this->getBackingStore()->get('assignedLicenses');
    }

    /**
     * Gets the autoSubscribeNewMembers property value. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getAutoSubscribeNewMembers(): ?bool {
        return $this->getBackingStore()->get('autoSubscribeNewMembers');
    }

    /**
     * Gets the calendar property value. The group's calendar. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        return $this->getBackingStore()->get('calendar');
    }

    /**
     * Gets the calendarView property value. The calendar view for the calendar. Read-only.
     * @return array<Event>|null
    */
    public function getCalendarView(): ?array {
        return $this->getBackingStore()->get('calendarView');
    }

    /**
     * Gets the classification property value. Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getClassification(): ?string {
        return $this->getBackingStore()->get('classification');
    }

    /**
     * Gets the conversations property value. The group's conversations.
     * @return array<Conversation>|null
    */
    public function getConversations(): ?array {
        return $this->getBackingStore()->get('conversations');
    }

    /**
     * Gets the createdByAppId property value. App ID of the app used to create the group. Can be null for some groups. Returned by default. Read-only. Supports $filter (eq, ne, not, in, startsWith).
     * @return string|null
    */
    public function getCreatedByAppId(): ?string {
        return $this->getBackingStore()->get('createdByAppId');
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the createdOnBehalfOf property value. The user (or application) that created the group. Note: This is not set if the user is an administrator. Read-only.
     * @return DirectoryObject|null
    */
    public function getCreatedOnBehalfOf(): ?DirectoryObject {
        return $this->getBackingStore()->get('createdOnBehalfOf');
    }

    /**
     * Gets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name for the group. Required. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the drive property value. The group's default drive. Read-only.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->getBackingStore()->get('drive');
    }

    /**
     * Gets the drives property value. The group's drives. Read-only.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        return $this->getBackingStore()->get('drives');
    }

    /**
     * Gets the endpoints property value. Endpoints for the group. Read-only. Nullable.
     * @return array<Endpoint>|null
    */
    public function getEndpoints(): ?array {
        return $this->getBackingStore()->get('endpoints');
    }

    /**
     * Gets the events property value. The group's events.
     * @return array<Event>|null
    */
    public function getEvents(): ?array {
        return $this->getBackingStore()->get('events');
    }

    /**
     * Gets the expirationDateTime property value. Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedSenders' => fn(ParseNode $n) => $o->setAcceptedSenders($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'accessType' => fn(ParseNode $n) => $o->setAccessType($n->getEnumValue(GroupAccessType::class)),
            'allowExternalSenders' => fn(ParseNode $n) => $o->setAllowExternalSenders($n->getBooleanValue()),
            'appRoleAssignments' => fn(ParseNode $n) => $o->setAppRoleAssignments($n->getCollectionOfObjectValues([AppRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'assignedLabels' => fn(ParseNode $n) => $o->setAssignedLabels($n->getCollectionOfObjectValues([AssignedLabel::class, 'createFromDiscriminatorValue'])),
            'assignedLicenses' => fn(ParseNode $n) => $o->setAssignedLicenses($n->getCollectionOfObjectValues([AssignedLicense::class, 'createFromDiscriminatorValue'])),
            'autoSubscribeNewMembers' => fn(ParseNode $n) => $o->setAutoSubscribeNewMembers($n->getBooleanValue()),
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getObjectValue([Calendar::class, 'createFromDiscriminatorValue'])),
            'calendarView' => fn(ParseNode $n) => $o->setCalendarView($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getStringValue()),
            'conversations' => fn(ParseNode $n) => $o->setConversations($n->getCollectionOfObjectValues([Conversation::class, 'createFromDiscriminatorValue'])),
            'createdByAppId' => fn(ParseNode $n) => $o->setCreatedByAppId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'createdOnBehalfOf' => fn(ParseNode $n) => $o->setCreatedOnBehalfOf($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'drives' => fn(ParseNode $n) => $o->setDrives($n->getCollectionOfObjectValues([Drive::class, 'createFromDiscriminatorValue'])),
            'endpoints' => fn(ParseNode $n) => $o->setEndpoints($n->getCollectionOfObjectValues([Endpoint::class, 'createFromDiscriminatorValue'])),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'groupLifecyclePolicies' => fn(ParseNode $n) => $o->setGroupLifecyclePolicies($n->getCollectionOfObjectValues([GroupLifecyclePolicy::class, 'createFromDiscriminatorValue'])),
            'groupTypes' => fn(ParseNode $n) => $o->setGroupTypes($n->getCollectionOfPrimitiveValues()),
            'hasMembersWithLicenseErrors' => fn(ParseNode $n) => $o->setHasMembersWithLicenseErrors($n->getBooleanValue()),
            'hideFromAddressLists' => fn(ParseNode $n) => $o->setHideFromAddressLists($n->getBooleanValue()),
            'hideFromOutlookClients' => fn(ParseNode $n) => $o->setHideFromOutlookClients($n->getBooleanValue()),
            'infoCatalogs' => fn(ParseNode $n) => $o->setInfoCatalogs($n->getCollectionOfPrimitiveValues()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'isAssignableToRole' => fn(ParseNode $n) => $o->setIsAssignableToRole($n->getBooleanValue()),
            'isFavorite' => fn(ParseNode $n) => $o->setIsFavorite($n->getBooleanValue()),
            'isManagementRestricted' => fn(ParseNode $n) => $o->setIsManagementRestricted($n->getBooleanValue()),
            'isSubscribedByMail' => fn(ParseNode $n) => $o->setIsSubscribedByMail($n->getBooleanValue()),
            'licenseProcessingState' => fn(ParseNode $n) => $o->setLicenseProcessingState($n->getObjectValue([LicenseProcessingState::class, 'createFromDiscriminatorValue'])),
            'mail' => fn(ParseNode $n) => $o->setMail($n->getStringValue()),
            'mailEnabled' => fn(ParseNode $n) => $o->setMailEnabled($n->getBooleanValue()),
            'mailNickname' => fn(ParseNode $n) => $o->setMailNickname($n->getStringValue()),
            'memberOf' => fn(ParseNode $n) => $o->setMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'membershipRule' => fn(ParseNode $n) => $o->setMembershipRule($n->getStringValue()),
            'membershipRuleProcessingState' => fn(ParseNode $n) => $o->setMembershipRuleProcessingState($n->getStringValue()),
            'membershipRuleProcessingStatus' => fn(ParseNode $n) => $o->setMembershipRuleProcessingStatus($n->getObjectValue([MembershipRuleProcessingStatus::class, 'createFromDiscriminatorValue'])),
            'membersWithLicenseErrors' => fn(ParseNode $n) => $o->setMembersWithLicenseErrors($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'onenote' => fn(ParseNode $n) => $o->setOnenote($n->getObjectValue([Onenote::class, 'createFromDiscriminatorValue'])),
            'onPremisesDomainName' => fn(ParseNode $n) => $o->setOnPremisesDomainName($n->getStringValue()),
            'onPremisesLastSyncDateTime' => fn(ParseNode $n) => $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()),
            'onPremisesNetBiosName' => fn(ParseNode $n) => $o->setOnPremisesNetBiosName($n->getStringValue()),
            'onPremisesProvisioningErrors' => fn(ParseNode $n) => $o->setOnPremisesProvisioningErrors($n->getCollectionOfObjectValues([OnPremisesProvisioningError::class, 'createFromDiscriminatorValue'])),
            'onPremisesSamAccountName' => fn(ParseNode $n) => $o->setOnPremisesSamAccountName($n->getStringValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
            'onPremisesSyncEnabled' => fn(ParseNode $n) => $o->setOnPremisesSyncEnabled($n->getBooleanValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'permissionGrants' => fn(ParseNode $n) => $o->setPermissionGrants($n->getCollectionOfObjectValues([ResourceSpecificPermissionGrant::class, 'createFromDiscriminatorValue'])),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getObjectValue([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'photos' => fn(ParseNode $n) => $o->setPhotos($n->getCollectionOfObjectValues([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'planner' => fn(ParseNode $n) => $o->setPlanner($n->getObjectValue([PlannerGroup::class, 'createFromDiscriminatorValue'])),
            'preferredDataLocation' => fn(ParseNode $n) => $o->setPreferredDataLocation($n->getStringValue()),
            'preferredLanguage' => fn(ParseNode $n) => $o->setPreferredLanguage($n->getStringValue()),
            'proxyAddresses' => fn(ParseNode $n) => $o->setProxyAddresses($n->getCollectionOfPrimitiveValues()),
            'rejectedSenders' => fn(ParseNode $n) => $o->setRejectedSenders($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'renewedDateTime' => fn(ParseNode $n) => $o->setRenewedDateTime($n->getDateTimeValue()),
            'resourceBehaviorOptions' => fn(ParseNode $n) => $o->setResourceBehaviorOptions($n->getCollectionOfPrimitiveValues()),
            'resourceProvisioningOptions' => fn(ParseNode $n) => $o->setResourceProvisioningOptions($n->getCollectionOfPrimitiveValues()),
            'securityEnabled' => fn(ParseNode $n) => $o->setSecurityEnabled($n->getBooleanValue()),
            'securityIdentifier' => fn(ParseNode $n) => $o->setSecurityIdentifier($n->getStringValue()),
            'serviceProvisioningErrors' => fn(ParseNode $n) => $o->setServiceProvisioningErrors($n->getCollectionOfObjectValues([ServiceProvisioningError::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([DirectorySetting::class, 'createFromDiscriminatorValue'])),
            'sites' => fn(ParseNode $n) => $o->setSites($n->getCollectionOfObjectValues([Site::class, 'createFromDiscriminatorValue'])),
            'team' => fn(ParseNode $n) => $o->setTeam($n->getObjectValue([Team::class, 'createFromDiscriminatorValue'])),
            'theme' => fn(ParseNode $n) => $o->setTheme($n->getStringValue()),
            'threads' => fn(ParseNode $n) => $o->setThreads($n->getCollectionOfObjectValues([ConversationThread::class, 'createFromDiscriminatorValue'])),
            'transitiveMemberOf' => fn(ParseNode $n) => $o->setTransitiveMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'transitiveMembers' => fn(ParseNode $n) => $o->setTransitiveMembers($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'unseenConversationsCount' => fn(ParseNode $n) => $o->setUnseenConversationsCount($n->getIntegerValue()),
            'unseenCount' => fn(ParseNode $n) => $o->setUnseenCount($n->getIntegerValue()),
            'unseenMessagesCount' => fn(ParseNode $n) => $o->setUnseenMessagesCount($n->getIntegerValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
            'writebackConfiguration' => fn(ParseNode $n) => $o->setWritebackConfiguration($n->getObjectValue([GroupWritebackConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     * @return array<GroupLifecyclePolicy>|null
    */
    public function getGroupLifecyclePolicies(): ?array {
        return $this->getBackingStore()->get('groupLifecyclePolicies');
    }

    /**
     * Gets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     * @return array<string>|null
    */
    public function getGroupTypes(): ?array {
        return $this->getBackingStore()->get('groupTypes');
    }

    /**
     * Gets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true).  Supports $filter (eq).
     * @return bool|null
    */
    public function getHasMembersWithLicenseErrors(): ?bool {
        return $this->getBackingStore()->get('hasMembersWithLicenseErrors');
    }

    /**
     * Gets the hideFromAddressLists property value. true if the group is not displayed in certain parts of the Outlook user interface: in the Address Book, in address lists for selecting message recipients, and in the Browse Groups dialog for searching groups; false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromAddressLists(): ?bool {
        return $this->getBackingStore()->get('hideFromAddressLists');
    }

    /**
     * Gets the hideFromOutlookClients property value. true if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web, false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getHideFromOutlookClients(): ?bool {
        return $this->getBackingStore()->get('hideFromOutlookClients');
    }

    /**
     * Gets the infoCatalogs property value. Identifies the info segments assigned to the group. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getInfoCatalogs(): ?array {
        return $this->getBackingStore()->get('infoCatalogs');
    }

    /**
     * Gets the isArchived property value. When a group is associated with a team, this property determines whether the team is in read-only mode. To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->getBackingStore()->get('isArchived');
    }

    /**
     * Gets the isAssignableToRole property value. Indicates whether this group can be assigned to an Azure Active Directory role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true,  visibility must be Hidden, and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global Administrator and Privileged Role Administrator roles can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsUsing this feature requires a Azure AD Premium P1 license. Returned by default. Supports $filter (eq, ne, not).
     * @return bool|null
    */
    public function getIsAssignableToRole(): ?bool {
        return $this->getBackingStore()->get('isAssignableToRole');
    }

    /**
     * Gets the isFavorite property value. The isFavorite property
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        return $this->getBackingStore()->get('isFavorite');
    }

    /**
     * Gets the isManagementRestricted property value. The isManagementRestricted property
     * @return bool|null
    */
    public function getIsManagementRestricted(): ?bool {
        return $this->getBackingStore()->get('isManagementRestricted');
    }

    /**
     * Gets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return bool|null
    */
    public function getIsSubscribedByMail(): ?bool {
        return $this->getBackingStore()->get('isSubscribedByMail');
    }

    /**
     * Gets the licenseProcessingState property value. Indicates status of the group license assignment to all members of the group. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete. Returned only on $select. Read-only.
     * @return LicenseProcessingState|null
    */
    public function getLicenseProcessingState(): ?LicenseProcessingState {
        return $this->getBackingStore()->get('licenseProcessingState');
    }

    /**
     * Gets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getMail(): ?string {
        return $this->getBackingStore()->get('mail');
    }

    /**
     * Gets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not, and eq on null values).
     * @return bool|null
    */
    public function getMailEnabled(): ?bool {
        return $this->getBackingStore()->get('mailEnabled');
    }

    /**
     * Gets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : <> , SPACE. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @return string|null
    */
    public function getMailNickname(): ?string {
        return $this->getBackingStore()->get('mailNickname');
    }

    /**
     * Gets the memberOf property value. Groups and administrative units that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->getBackingStore()->get('memberOf');
    }

    /**
     * Gets the members property value. Direct members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        return $this->getBackingStore()->get('members');
    }

    /**
     * Gets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        return $this->getBackingStore()->get('membershipRule');
    }

    /**
     * Gets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     * @return string|null
    */
    public function getMembershipRuleProcessingState(): ?string {
        return $this->getBackingStore()->get('membershipRuleProcessingState');
    }

    /**
     * Gets the membershipRuleProcessingStatus property value. Describes the processing status for rules-based dynamic groups. The property is null for non-rule based dynamic groups or if the dynamic group processing has been paused. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). Read-only.
     * @return MembershipRuleProcessingStatus|null
    */
    public function getMembershipRuleProcessingStatus(): ?MembershipRuleProcessingStatus {
        return $this->getBackingStore()->get('membershipRuleProcessingStatus');
    }

    /**
     * Gets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     * @return array<DirectoryObject>|null
    */
    public function getMembersWithLicenseErrors(): ?array {
        return $this->getBackingStore()->get('membersWithLicenseErrors');
    }

    /**
     * Gets the onenote property value. The onenote property
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        return $this->getBackingStore()->get('onenote');
    }

    /**
     * Gets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @return string|null
    */
    public function getOnPremisesDomainName(): ?string {
        return $this->getBackingStore()->get('onPremisesDomainName');
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('onPremisesLastSyncDateTime');
    }

    /**
     * Gets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @return string|null
    */
    public function getOnPremisesNetBiosName(): ?string {
        return $this->getBackingStore()->get('onPremisesNetBiosName');
    }

    /**
     * Gets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     * @return array<OnPremisesProvisioningError>|null
    */
    public function getOnPremisesProvisioningErrors(): ?array {
        return $this->getBackingStore()->get('onPremisesProvisioningErrors');
    }

    /**
     * Gets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     * @return string|null
    */
    public function getOnPremisesSamAccountName(): ?string {
        return $this->getBackingStore()->get('onPremisesSamAccountName');
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->getBackingStore()->get('onPremisesSecurityIdentifier');
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->getBackingStore()->get('onPremisesSyncEnabled');
    }

    /**
     * Gets the organizationId property value. The organizationId property
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->getBackingStore()->get('organizationId');
    }

    /**
     * Gets the owners property value. The owners of the group who can be users or service principals. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner.  Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1); Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        return $this->getBackingStore()->get('owners');
    }

    /**
     * Gets the permissionGrants property value. The permissions that have been granted for a group to a specific application. Supports $expand.
     * @return array<ResourceSpecificPermissionGrant>|null
    */
    public function getPermissionGrants(): ?array {
        return $this->getBackingStore()->get('permissionGrants');
    }

    /**
     * Gets the photo property value. The group's profile photo.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->getBackingStore()->get('photo');
    }

    /**
     * Gets the photos property value. The profile photos owned by the group. Read-only. Nullable.
     * @return array<ProfilePhoto>|null
    */
    public function getPhotos(): ?array {
        return $this->getBackingStore()->get('photos');
    }

    /**
     * Gets the planner property value. Selective Planner services available to the group. Read-only. Nullable.
     * @return PlannerGroup|null
    */
    public function getPlanner(): ?PlannerGroup {
        return $this->getBackingStore()->get('planner');
    }

    /**
     * Gets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     * @return string|null
    */
    public function getPreferredDataLocation(): ?string {
        return $this->getBackingStore()->get('preferredDataLocation');
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->getBackingStore()->get('preferredLanguage');
    }

    /**
     * Gets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required for filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @return array<string>|null
    */
    public function getProxyAddresses(): ?array {
        return $this->getBackingStore()->get('proxyAddresses');
    }

    /**
     * Gets the rejectedSenders property value. The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     * @return array<DirectoryObject>|null
    */
    public function getRejectedSenders(): ?array {
        return $this->getBackingStore()->get('rejectedSenders');
    }

    /**
     * Gets the renewedDateTime property value. Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @return DateTime|null
    */
    public function getRenewedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('renewedDateTime');
    }

    /**
     * Gets the resourceBehaviorOptions property value. Specifies the group behaviors that can be set for a Microsoft 365 group during creation. This can be set only as part of creation (POST). Possible values are AllowOnlyMembersToPost, HideGroupInOutlook, SubscribeNewGroupMembers, WelcomeEmailDisabled. For more information, see Set Microsoft 365 group behaviors and provisioning options.
     * @return array<string>|null
    */
    public function getResourceBehaviorOptions(): ?array {
        return $this->getBackingStore()->get('resourceBehaviorOptions');
    }

    /**
     * Gets the resourceProvisioningOptions property value. Specifies the group resources that are provisioned as part of Microsoft 365 group creation, that are not normally part of default group creation. Possible value is Team. For more information, see Set Microsoft 365 group behaviors and provisioning options. Returned by default. Supports $filter (eq, not, startsWith.
     * @return array<string>|null
    */
    public function getResourceProvisioningOptions(): ?array {
        return $this->getBackingStore()->get('resourceProvisioningOptions');
    }

    /**
     * Gets the securityEnabled property value. Specifies whether the group is a security group. Required.Returned by default. Supports $filter (eq, ne, not, in).
     * @return bool|null
    */
    public function getSecurityEnabled(): ?bool {
        return $this->getBackingStore()->get('securityEnabled');
    }

    /**
     * Gets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Returned by default.
     * @return string|null
    */
    public function getSecurityIdentifier(): ?string {
        return $this->getBackingStore()->get('securityIdentifier');
    }

    /**
     * Gets the serviceProvisioningErrors property value. Errors published by a federated service describing a non-transient, service-specific error regarding the properties or link from a group object .  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @return array<ServiceProvisioningError>|null
    */
    public function getServiceProvisioningErrors(): ?array {
        return $this->getBackingStore()->get('serviceProvisioningErrors');
    }

    /**
     * Gets the settings property value. Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
     * @return array<DirectorySetting>|null
    */
    public function getSettings(): ?array {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        return $this->getBackingStore()->get('sites');
    }

    /**
     * Gets the team property value. The team associated with this group.
     * @return Team|null
    */
    public function getTeam(): ?Team {
        return $this->getBackingStore()->get('team');
    }

    /**
     * Gets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
     * @return string|null
    */
    public function getTheme(): ?string {
        return $this->getBackingStore()->get('theme');
    }

    /**
     * Gets the threads property value. The group's conversation threads. Nullable.
     * @return array<ConversationThread>|null
    */
    public function getThreads(): ?array {
        return $this->getBackingStore()->get('threads');
    }

    /**
     * Gets the transitiveMemberOf property value. The groups that a group is a member of, either directly and through nested membership. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->getBackingStore()->get('transitiveMemberOf');
    }

    /**
     * Gets the transitiveMembers property value. The direct and transitive members of a group. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMembers(): ?array {
        return $this->getBackingStore()->get('transitiveMembers');
    }

    /**
     * Gets the unseenConversationsCount property value. Count of conversations that have been delivered one or more new posts since the signed-in user's last visit to the group. This property is the same as unseenCount. Returned only on $select.
     * @return int|null
    */
    public function getUnseenConversationsCount(): ?int {
        return $this->getBackingStore()->get('unseenConversationsCount');
    }

    /**
     * Gets the unseenCount property value. Count of conversations that have received new posts since the signed-in user last visited the group. This property is the same as unseenConversationsCount.Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @return int|null
    */
    public function getUnseenCount(): ?int {
        return $this->getBackingStore()->get('unseenCount');
    }

    /**
     * Gets the unseenMessagesCount property value. Count of new posts that have been delivered to the group's conversations since the signed-in user's last visit to the group. Returned only on $select.
     * @return int|null
    */
    public function getUnseenMessagesCount(): ?int {
        return $this->getBackingStore()->get('unseenMessagesCount');
    }

    /**
     * Gets the visibility property value. Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->getBackingStore()->get('visibility');
    }

    /**
     * Gets the writebackConfiguration property value. Specifies whether or not a group is configured to write back group object properties to on-premise Active Directory. These properties are used when group writeback is configured in the Azure AD Connect sync client.
     * @return GroupWritebackConfiguration|null
    */
    public function getWritebackConfiguration(): ?GroupWritebackConfiguration {
        return $this->getBackingStore()->get('writebackConfiguration');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acceptedSenders', $this->getAcceptedSenders());
        $writer->writeEnumValue('accessType', $this->getAccessType());
        $writer->writeBooleanValue('allowExternalSenders', $this->getAllowExternalSenders());
        $writer->writeCollectionOfObjectValues('appRoleAssignments', $this->getAppRoleAssignments());
        $writer->writeCollectionOfObjectValues('assignedLabels', $this->getAssignedLabels());
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->getAssignedLicenses());
        $writer->writeBooleanValue('autoSubscribeNewMembers', $this->getAutoSubscribeNewMembers());
        $writer->writeObjectValue('calendar', $this->getCalendar());
        $writer->writeCollectionOfObjectValues('calendarView', $this->getCalendarView());
        $writer->writeStringValue('classification', $this->getClassification());
        $writer->writeCollectionOfObjectValues('conversations', $this->getConversations());
        $writer->writeStringValue('createdByAppId', $this->getCreatedByAppId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('createdOnBehalfOf', $this->getCreatedOnBehalfOf());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeCollectionOfObjectValues('drives', $this->getDrives());
        $writer->writeCollectionOfObjectValues('endpoints', $this->getEndpoints());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeCollectionOfObjectValues('groupLifecyclePolicies', $this->getGroupLifecyclePolicies());
        $writer->writeCollectionOfPrimitiveValues('groupTypes', $this->getGroupTypes());
        $writer->writeBooleanValue('hasMembersWithLicenseErrors', $this->getHasMembersWithLicenseErrors());
        $writer->writeBooleanValue('hideFromAddressLists', $this->getHideFromAddressLists());
        $writer->writeBooleanValue('hideFromOutlookClients', $this->getHideFromOutlookClients());
        $writer->writeCollectionOfPrimitiveValues('infoCatalogs', $this->getInfoCatalogs());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeBooleanValue('isAssignableToRole', $this->getIsAssignableToRole());
        $writer->writeBooleanValue('isFavorite', $this->getIsFavorite());
        $writer->writeBooleanValue('isManagementRestricted', $this->getIsManagementRestricted());
        $writer->writeBooleanValue('isSubscribedByMail', $this->getIsSubscribedByMail());
        $writer->writeObjectValue('licenseProcessingState', $this->getLicenseProcessingState());
        $writer->writeStringValue('mail', $this->getMail());
        $writer->writeBooleanValue('mailEnabled', $this->getMailEnabled());
        $writer->writeStringValue('mailNickname', $this->getMailNickname());
        $writer->writeCollectionOfObjectValues('memberOf', $this->getMemberOf());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('membershipRule', $this->getMembershipRule());
        $writer->writeStringValue('membershipRuleProcessingState', $this->getMembershipRuleProcessingState());
        $writer->writeObjectValue('membershipRuleProcessingStatus', $this->getMembershipRuleProcessingStatus());
        $writer->writeCollectionOfObjectValues('membersWithLicenseErrors', $this->getMembersWithLicenseErrors());
        $writer->writeObjectValue('onenote', $this->getOnenote());
        $writer->writeStringValue('onPremisesDomainName', $this->getOnPremisesDomainName());
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->getOnPremisesLastSyncDateTime());
        $writer->writeStringValue('onPremisesNetBiosName', $this->getOnPremisesNetBiosName());
        $writer->writeCollectionOfObjectValues('onPremisesProvisioningErrors', $this->getOnPremisesProvisioningErrors());
        $writer->writeStringValue('onPremisesSamAccountName', $this->getOnPremisesSamAccountName());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->getOnPremisesSyncEnabled());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeCollectionOfObjectValues('owners', $this->getOwners());
        $writer->writeCollectionOfObjectValues('permissionGrants', $this->getPermissionGrants());
        $writer->writeObjectValue('photo', $this->getPhoto());
        $writer->writeCollectionOfObjectValues('photos', $this->getPhotos());
        $writer->writeObjectValue('planner', $this->getPlanner());
        $writer->writeStringValue('preferredDataLocation', $this->getPreferredDataLocation());
        $writer->writeStringValue('preferredLanguage', $this->getPreferredLanguage());
        $writer->writeCollectionOfPrimitiveValues('proxyAddresses', $this->getProxyAddresses());
        $writer->writeCollectionOfObjectValues('rejectedSenders', $this->getRejectedSenders());
        $writer->writeDateTimeValue('renewedDateTime', $this->getRenewedDateTime());
        $writer->writeCollectionOfPrimitiveValues('resourceBehaviorOptions', $this->getResourceBehaviorOptions());
        $writer->writeCollectionOfPrimitiveValues('resourceProvisioningOptions', $this->getResourceProvisioningOptions());
        $writer->writeBooleanValue('securityEnabled', $this->getSecurityEnabled());
        $writer->writeStringValue('securityIdentifier', $this->getSecurityIdentifier());
        $writer->writeCollectionOfObjectValues('serviceProvisioningErrors', $this->getServiceProvisioningErrors());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('sites', $this->getSites());
        $writer->writeObjectValue('team', $this->getTeam());
        $writer->writeStringValue('theme', $this->getTheme());
        $writer->writeCollectionOfObjectValues('threads', $this->getThreads());
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->getTransitiveMemberOf());
        $writer->writeCollectionOfObjectValues('transitiveMembers', $this->getTransitiveMembers());
        $writer->writeIntegerValue('unseenConversationsCount', $this->getUnseenConversationsCount());
        $writer->writeIntegerValue('unseenCount', $this->getUnseenCount());
        $writer->writeIntegerValue('unseenMessagesCount', $this->getUnseenMessagesCount());
        $writer->writeStringValue('visibility', $this->getVisibility());
        $writer->writeObjectValue('writebackConfiguration', $this->getWritebackConfiguration());
    }

    /**
     * Sets the acceptedSenders property value. The list of users or groups that are allowed to create post's or calendar events in this group. If this list is non-empty then only users or groups listed here are allowed to post.
     * @param array<DirectoryObject>|null $value Value to set for the acceptedSenders property.
    */
    public function setAcceptedSenders(?array $value): void {
        $this->getBackingStore()->set('acceptedSenders', $value);
    }

    /**
     * Sets the accessType property value. The accessType property
     * @param GroupAccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?GroupAccessType $value): void {
        $this->getBackingStore()->set('accessType', $value);
    }

    /**
     * Sets the allowExternalSenders property value. Indicates if people external to the organization can send messages to the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the allowExternalSenders property.
    */
    public function setAllowExternalSenders(?bool $value): void {
        $this->getBackingStore()->set('allowExternalSenders', $value);
    }

    /**
     * Sets the appRoleAssignments property value. Represents the app roles a group has been granted for an application. Supports $expand.
     * @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignments property.
    */
    public function setAppRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('appRoleAssignments', $value);
    }

    /**
     * Sets the assignedLabels property value. The list of sensitivity label pairs (label ID, label name) associated with a Microsoft 365 group. Returned only on $select.
     * @param array<AssignedLabel>|null $value Value to set for the assignedLabels property.
    */
    public function setAssignedLabels(?array $value): void {
        $this->getBackingStore()->set('assignedLabels', $value);
    }

    /**
     * Sets the assignedLicenses property value. The licenses that are assigned to the group. Returned only on $select. Supports $filter (eq). Read-only.
     * @param array<AssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value): void {
        $this->getBackingStore()->set('assignedLicenses', $value);
    }

    /**
     * Sets the autoSubscribeNewMembers property value. Indicates if new members added to the group will be auto-subscribed to receive email notifications. You can set this property in a PATCH request for the group; do not set it in the initial POST request that creates the group. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the autoSubscribeNewMembers property.
    */
    public function setAutoSubscribeNewMembers(?bool $value): void {
        $this->getBackingStore()->set('autoSubscribeNewMembers', $value);
    }

    /**
     * Sets the calendar property value. The group's calendar. Read-only.
     * @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Read-only.
     * @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value): void {
        $this->getBackingStore()->set('calendarView', $value);
    }

    /**
     * Sets the classification property value. Describes a classification for the group (such as low, medium or high business impact). Valid values for this property are defined by creating a ClassificationList setting value, based on the template definition.Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the conversations property value. The group's conversations.
     * @param array<Conversation>|null $value Value to set for the conversations property.
    */
    public function setConversations(?array $value): void {
        $this->getBackingStore()->set('conversations', $value);
    }

    /**
     * Sets the createdByAppId property value. App ID of the app used to create the group. Can be null for some groups. Returned by default. Read-only. Supports $filter (eq, ne, not, in, startsWith).
     * @param string|null $value Value to set for the createdByAppId property.
    */
    public function setCreatedByAppId(?string $value): void {
        $this->getBackingStore()->set('createdByAppId', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the group was created. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the createdOnBehalfOf property value. The user (or application) that created the group. Note: This is not set if the user is an administrator. Read-only.
     * @param DirectoryObject|null $value Value to set for the createdOnBehalfOf property.
    */
    public function setCreatedOnBehalfOf(?DirectoryObject $value): void {
        $this->getBackingStore()->set('createdOnBehalfOf', $value);
    }

    /**
     * Sets the description property value. An optional description for the group. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the group. Required. Maximum length is 256 characters. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. The group's default drive. Read-only.
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the drives property value. The group's drives. Read-only.
     * @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value): void {
        $this->getBackingStore()->set('drives', $value);
    }

    /**
     * Sets the endpoints property value. Endpoints for the group. Read-only. Nullable.
     * @param array<Endpoint>|null $value Value to set for the endpoints property.
    */
    public function setEndpoints(?array $value): void {
        $this->getBackingStore()->set('endpoints', $value);
    }

    /**
     * Sets the events property value. The group's events.
     * @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->getBackingStore()->set('events', $value);
    }

    /**
     * Sets the expirationDateTime property value. Timestamp of when the group is set to expire. The value cannot be modified and is automatically populated when the group is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the group. Read-only. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the groupLifecyclePolicies property value. The collection of lifecycle policies for this group. Read-only. Nullable.
     * @param array<GroupLifecyclePolicy>|null $value Value to set for the groupLifecyclePolicies property.
    */
    public function setGroupLifecyclePolicies(?array $value): void {
        $this->getBackingStore()->set('groupLifecyclePolicies', $value);
    }

    /**
     * Sets the groupTypes property value. Specifies the group type and its membership. If the collection contains Unified, the group is a Microsoft 365 group; otherwise, it's either a security group or distribution group. For details, see groups overview.If the collection includes DynamicMembership, the group has dynamic membership; otherwise, membership is static. Returned by default. Supports $filter (eq, not).
     * @param array<string>|null $value Value to set for the groupTypes property.
    */
    public function setGroupTypes(?array $value): void {
        $this->getBackingStore()->set('groupTypes', $value);
    }

    /**
     * Sets the hasMembersWithLicenseErrors property value. Indicates whether there are members in this group that have license errors from its group-based license assignment. This property is never returned on a GET operation. You can use it as a $filter argument to get groups that have members with license errors (that is, filter for this property being true).  Supports $filter (eq).
     * @param bool|null $value Value to set for the hasMembersWithLicenseErrors property.
    */
    public function setHasMembersWithLicenseErrors(?bool $value): void {
        $this->getBackingStore()->set('hasMembersWithLicenseErrors', $value);
    }

    /**
     * Sets the hideFromAddressLists property value. true if the group is not displayed in certain parts of the Outlook user interface: in the Address Book, in address lists for selecting message recipients, and in the Browse Groups dialog for searching groups; false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the hideFromAddressLists property.
    */
    public function setHideFromAddressLists(?bool $value): void {
        $this->getBackingStore()->set('hideFromAddressLists', $value);
    }

    /**
     * Sets the hideFromOutlookClients property value. true if the group is not displayed in Outlook clients, such as Outlook for Windows and Outlook on the web, false otherwise. Default value is false. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the hideFromOutlookClients property.
    */
    public function setHideFromOutlookClients(?bool $value): void {
        $this->getBackingStore()->set('hideFromOutlookClients', $value);
    }

    /**
     * Sets the infoCatalogs property value. Identifies the info segments assigned to the group. Returned by default. Supports $filter (eq, not, ge, le, startsWith).
     * @param array<string>|null $value Value to set for the infoCatalogs property.
    */
    public function setInfoCatalogs(?array $value): void {
        $this->getBackingStore()->set('infoCatalogs', $value);
    }

    /**
     * Sets the isArchived property value. When a group is associated with a team, this property determines whether the team is in read-only mode. To read this property, use the /group/{groupId}/team endpoint or the Get team API. To update this property, use the archiveTeam and unarchiveTeam APIs.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the isAssignableToRole property value. Indicates whether this group can be assigned to an Azure Active Directory role. Optional. This property can only be set while creating the group and is immutable. If set to true, the securityEnabled property must also be set to true,  visibility must be Hidden, and the group cannot be a dynamic group (that is, groupTypes cannot contain DynamicMembership). Only callers in Global Administrator and Privileged Role Administrator roles can set this property. The caller must also be assigned the RoleManagement.ReadWrite.Directory permission to set this property or update the membership of such groups. For more, see Using a group to manage Azure AD role assignmentsUsing this feature requires a Azure AD Premium P1 license. Returned by default. Supports $filter (eq, ne, not).
     * @param bool|null $value Value to set for the isAssignableToRole property.
    */
    public function setIsAssignableToRole(?bool $value): void {
        $this->getBackingStore()->set('isAssignableToRole', $value);
    }

    /**
     * Sets the isFavorite property value. The isFavorite property
     * @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value): void {
        $this->getBackingStore()->set('isFavorite', $value);
    }

    /**
     * Sets the isManagementRestricted property value. The isManagementRestricted property
     * @param bool|null $value Value to set for the isManagementRestricted property.
    */
    public function setIsManagementRestricted(?bool $value): void {
        $this->getBackingStore()->set('isManagementRestricted', $value);
    }

    /**
     * Sets the isSubscribedByMail property value. Indicates whether the signed-in user is subscribed to receive email conversations. Default value is true. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param bool|null $value Value to set for the isSubscribedByMail property.
    */
    public function setIsSubscribedByMail(?bool $value): void {
        $this->getBackingStore()->set('isSubscribedByMail', $value);
    }

    /**
     * Sets the licenseProcessingState property value. Indicates status of the group license assignment to all members of the group. Possible values: QueuedForProcessing, ProcessingInProgress, and ProcessingComplete. Returned only on $select. Read-only.
     * @param LicenseProcessingState|null $value Value to set for the licenseProcessingState property.
    */
    public function setLicenseProcessingState(?LicenseProcessingState $value): void {
        $this->getBackingStore()->set('licenseProcessingState', $value);
    }

    /**
     * Sets the mail property value. The SMTP address for the group, for example, 'serviceadmins@contoso.onmicrosoft.com'. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the mail property.
    */
    public function setMail(?string $value): void {
        $this->getBackingStore()->set('mail', $value);
    }

    /**
     * Sets the mailEnabled property value. Specifies whether the group is mail-enabled. Required. Returned by default. Supports $filter (eq, ne, not, and eq on null values).
     * @param bool|null $value Value to set for the mailEnabled property.
    */
    public function setMailEnabled(?bool $value): void {
        $this->getBackingStore()->set('mailEnabled', $value);
    }

    /**
     * Sets the mailNickname property value. The mail alias for the group, unique for Microsoft 365 groups in the organization. Maximum length is 64 characters. This property can contain only characters in the ASCII character set 0 - 127 except the following: @ () / [] ' ; : <> , SPACE. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith).
     * @param string|null $value Value to set for the mailNickname property.
    */
    public function setMailNickname(?string $value): void {
        $this->getBackingStore()->set('mailNickname', $value);
    }

    /**
     * Sets the memberOf property value. Groups and administrative units that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value): void {
        $this->getBackingStore()->set('memberOf', $value);
    }

    /**
     * Sets the members property value. Direct members of this group, who can be users, devices, other groups, or service principals. Supports the List members, Add member, and Remove member operations. Nullable. Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=members($select=id,userPrincipalName,displayName).
     * @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the membershipRule property value. The rule that determines members for this group if the group is a dynamic group (groupTypes contains DynamicMembership). For more information about the syntax of the membership rule, see Membership Rules syntax. Returned by default. Supports $filter (eq, ne, not, ge, le, startsWith).
     * @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value): void {
        $this->getBackingStore()->set('membershipRule', $value);
    }

    /**
     * Sets the membershipRuleProcessingState property value. Indicates whether the dynamic membership processing is on or paused. Possible values are On or Paused. Returned by default. Supports $filter (eq, ne, not, in).
     * @param string|null $value Value to set for the membershipRuleProcessingState property.
    */
    public function setMembershipRuleProcessingState(?string $value): void {
        $this->getBackingStore()->set('membershipRuleProcessingState', $value);
    }

    /**
     * Sets the membershipRuleProcessingStatus property value. Describes the processing status for rules-based dynamic groups. The property is null for non-rule based dynamic groups or if the dynamic group processing has been paused. Returned only on $select. Supported only on the Get group API (GET /groups/{ID}). Read-only.
     * @param MembershipRuleProcessingStatus|null $value Value to set for the membershipRuleProcessingStatus property.
    */
    public function setMembershipRuleProcessingStatus(?MembershipRuleProcessingStatus $value): void {
        $this->getBackingStore()->set('membershipRuleProcessingStatus', $value);
    }

    /**
     * Sets the membersWithLicenseErrors property value. A list of group members with license errors from this group-based license assignment. Read-only.
     * @param array<DirectoryObject>|null $value Value to set for the membersWithLicenseErrors property.
    */
    public function setMembersWithLicenseErrors(?array $value): void {
        $this->getBackingStore()->set('membersWithLicenseErrors', $value);
    }

    /**
     * Sets the onenote property value. The onenote property
     * @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value): void {
        $this->getBackingStore()->set('onenote', $value);
    }

    /**
     * Sets the onPremisesDomainName property value. Contains the on-premises domain FQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @param string|null $value Value to set for the onPremisesDomainName property.
    */
    public function setOnPremisesDomainName(?string $value): void {
        $this->getBackingStore()->set('onPremisesDomainName', $value);
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. Indicates the last time at which the group was synced with the on-premises directory.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Read-only. Supports $filter (eq, ne, not, ge, le, in).
     * @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onPremisesLastSyncDateTime', $value);
    }

    /**
     * Sets the onPremisesNetBiosName property value. Contains the on-premises netBios name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Read-only.
     * @param string|null $value Value to set for the onPremisesNetBiosName property.
    */
    public function setOnPremisesNetBiosName(?string $value): void {
        $this->getBackingStore()->set('onPremisesNetBiosName', $value);
    }

    /**
     * Sets the onPremisesProvisioningErrors property value. Errors when using Microsoft synchronization product during provisioning. Returned by default. Supports $filter (eq, not).
     * @param array<OnPremisesProvisioningError>|null $value Value to set for the onPremisesProvisioningErrors property.
    */
    public function setOnPremisesProvisioningErrors(?array $value): void {
        $this->getBackingStore()->set('onPremisesProvisioningErrors', $value);
    }

    /**
     * Sets the onPremisesSamAccountName property value. Contains the on-premises SAM account name synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect.Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith). Read-only.
     * @param string|null $value Value to set for the onPremisesSamAccountName property.
    */
    public function setOnPremisesSamAccountName(?string $value): void {
        $this->getBackingStore()->set('onPremisesSamAccountName', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. Contains the on-premises security identifier (SID) for the group that was synchronized from on-premises to the cloud. Returned by default. Supports $filter (eq including on null values). Read-only.
     * @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this group is synced from an on-premises directory; false if this group was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned by default. Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     * @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('onPremisesSyncEnabled', $value);
    }

    /**
     * Sets the organizationId property value. The organizationId property
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->getBackingStore()->set('organizationId', $value);
    }

    /**
     * Sets the owners property value. The owners of the group who can be users or service principals. Nullable. If this property is not specified when creating a Microsoft 365 group, the calling user is automatically assigned as the group owner.  Supports $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1); Supports $expand including nested $select. For example, /groups?$filter=startsWith(displayName,'Role')&$select=id,displayName&$expand=owners($select=id,userPrincipalName,displayName).
     * @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

    /**
     * Sets the permissionGrants property value. The permissions that have been granted for a group to a specific application. Supports $expand.
     * @param array<ResourceSpecificPermissionGrant>|null $value Value to set for the permissionGrants property.
    */
    public function setPermissionGrants(?array $value): void {
        $this->getBackingStore()->set('permissionGrants', $value);
    }

    /**
     * Sets the photo property value. The group's profile photo.
     * @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the photos property value. The profile photos owned by the group. Read-only. Nullable.
     * @param array<ProfilePhoto>|null $value Value to set for the photos property.
    */
    public function setPhotos(?array $value): void {
        $this->getBackingStore()->set('photos', $value);
    }

    /**
     * Sets the planner property value. Selective Planner services available to the group. Read-only. Nullable.
     * @param PlannerGroup|null $value Value to set for the planner property.
    */
    public function setPlanner(?PlannerGroup $value): void {
        $this->getBackingStore()->set('planner', $value);
    }

    /**
     * Sets the preferredDataLocation property value. The preferred data location for the Microsoft 365 group. By default, the group inherits the group creator's preferred data location. To set this property, the calling user must be assigned one of the following Azure AD roles:  Global Administrator  User Account Administrator Directory Writer  Exchange Administrator  SharePoint Administrator  For more information about this property, see OneDrive Online Multi-Geo. Nullable. Returned by default.
     * @param string|null $value Value to set for the preferredDataLocation property.
    */
    public function setPreferredDataLocation(?string $value): void {
        $this->getBackingStore()->set('preferredDataLocation', $value);
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for a Microsoft 365 group. Should follow ISO 639-1 Code; for example en-US. Returned by default. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values).
     * @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value): void {
        $this->getBackingStore()->set('preferredLanguage', $value);
    }

    /**
     * Sets the proxyAddresses property value. Email addresses for the group that direct to the same group mailbox. For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com']. The any operator is required for filter expressions on multi-valued properties. Returned by default. Read-only. Not nullable. Supports $filter (eq, not, ge, le, startsWith, endsWith, /$count eq 0, /$count ne 0).
     * @param array<string>|null $value Value to set for the proxyAddresses property.
    */
    public function setProxyAddresses(?array $value): void {
        $this->getBackingStore()->set('proxyAddresses', $value);
    }

    /**
     * Sets the rejectedSenders property value. The list of users or groups that are not allowed to create posts or calendar events in this group. Nullable
     * @param array<DirectoryObject>|null $value Value to set for the rejectedSenders property.
    */
    public function setRejectedSenders(?array $value): void {
        $this->getBackingStore()->set('rejectedSenders', $value);
    }

    /**
     * Sets the renewedDateTime property value. Timestamp of when the group was last renewed. This cannot be modified directly and is only updated via the renew service action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default. Supports $filter (eq, ne, not, ge, le, in). Read-only.
     * @param DateTime|null $value Value to set for the renewedDateTime property.
    */
    public function setRenewedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('renewedDateTime', $value);
    }

    /**
     * Sets the resourceBehaviorOptions property value. Specifies the group behaviors that can be set for a Microsoft 365 group during creation. This can be set only as part of creation (POST). Possible values are AllowOnlyMembersToPost, HideGroupInOutlook, SubscribeNewGroupMembers, WelcomeEmailDisabled. For more information, see Set Microsoft 365 group behaviors and provisioning options.
     * @param array<string>|null $value Value to set for the resourceBehaviorOptions property.
    */
    public function setResourceBehaviorOptions(?array $value): void {
        $this->getBackingStore()->set('resourceBehaviorOptions', $value);
    }

    /**
     * Sets the resourceProvisioningOptions property value. Specifies the group resources that are provisioned as part of Microsoft 365 group creation, that are not normally part of default group creation. Possible value is Team. For more information, see Set Microsoft 365 group behaviors and provisioning options. Returned by default. Supports $filter (eq, not, startsWith.
     * @param array<string>|null $value Value to set for the resourceProvisioningOptions property.
    */
    public function setResourceProvisioningOptions(?array $value): void {
        $this->getBackingStore()->set('resourceProvisioningOptions', $value);
    }

    /**
     * Sets the securityEnabled property value. Specifies whether the group is a security group. Required.Returned by default. Supports $filter (eq, ne, not, in).
     * @param bool|null $value Value to set for the securityEnabled property.
    */
    public function setSecurityEnabled(?bool $value): void {
        $this->getBackingStore()->set('securityEnabled', $value);
    }

    /**
     * Sets the securityIdentifier property value. Security identifier of the group, used in Windows scenarios. Returned by default.
     * @param string|null $value Value to set for the securityIdentifier property.
    */
    public function setSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('securityIdentifier', $value);
    }

    /**
     * Sets the serviceProvisioningErrors property value. Errors published by a federated service describing a non-transient, service-specific error regarding the properties or link from a group object .  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @param array<ServiceProvisioningError>|null $value Value to set for the serviceProvisioningErrors property.
    */
    public function setServiceProvisioningErrors(?array $value): void {
        $this->getBackingStore()->set('serviceProvisioningErrors', $value);
    }

    /**
     * Sets the settings property value. Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
     * @param array<DirectorySetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the sites property value. The list of SharePoint sites in this group. Access the default site with /sites/root.
     * @param array<Site>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value): void {
        $this->getBackingStore()->set('sites', $value);
    }

    /**
     * Sets the team property value. The team associated with this group.
     * @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value): void {
        $this->getBackingStore()->set('team', $value);
    }

    /**
     * Sets the theme property value. Specifies a Microsoft 365 group's color theme. Possible values are Teal, Purple, Green, Blue, Pink, Orange or Red. Returned by default.
     * @param string|null $value Value to set for the theme property.
    */
    public function setTheme(?string $value): void {
        $this->getBackingStore()->set('theme', $value);
    }

    /**
     * Sets the threads property value. The group's conversation threads. Nullable.
     * @param array<ConversationThread>|null $value Value to set for the threads property.
    */
    public function setThreads(?array $value): void {
        $this->getBackingStore()->set('threads', $value);
    }

    /**
     * Sets the transitiveMemberOf property value. The groups that a group is a member of, either directly and through nested membership. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value): void {
        $this->getBackingStore()->set('transitiveMemberOf', $value);
    }

    /**
     * Sets the transitiveMembers property value. The direct and transitive members of a group. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the transitiveMembers property.
    */
    public function setTransitiveMembers(?array $value): void {
        $this->getBackingStore()->set('transitiveMembers', $value);
    }

    /**
     * Sets the unseenConversationsCount property value. Count of conversations that have been delivered one or more new posts since the signed-in user's last visit to the group. This property is the same as unseenCount. Returned only on $select.
     * @param int|null $value Value to set for the unseenConversationsCount property.
    */
    public function setUnseenConversationsCount(?int $value): void {
        $this->getBackingStore()->set('unseenConversationsCount', $value);
    }

    /**
     * Sets the unseenCount property value. Count of conversations that have received new posts since the signed-in user last visited the group. This property is the same as unseenConversationsCount.Returned only on $select. Supported only on the Get group API (GET /groups/{ID}).
     * @param int|null $value Value to set for the unseenCount property.
    */
    public function setUnseenCount(?int $value): void {
        $this->getBackingStore()->set('unseenCount', $value);
    }

    /**
     * Sets the unseenMessagesCount property value. Count of new posts that have been delivered to the group's conversations since the signed-in user's last visit to the group. Returned only on $select.
     * @param int|null $value Value to set for the unseenMessagesCount property.
    */
    public function setUnseenMessagesCount(?int $value): void {
        $this->getBackingStore()->set('unseenMessagesCount', $value);
    }

    /**
     * Sets the visibility property value. Specifies the group join policy and group content visibility for groups. Possible values are: Private, Public, or HiddenMembership. HiddenMembership can be set only for Microsoft 365 groups, when the groups are created. It can't be updated later. Other values of visibility can be updated after group creation. If visibility value is not specified during group creation on Microsoft Graph, a security group is created as Private by default and Microsoft 365 group is Public. Groups assignable to roles are always Private. See group visibility options to learn more. Returned by default. Nullable.
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->getBackingStore()->set('visibility', $value);
    }

    /**
     * Sets the writebackConfiguration property value. Specifies whether or not a group is configured to write back group object properties to on-premise Active Directory. These properties are used when group writeback is configured in the Azure AD Connect sync client.
     * @param GroupWritebackConfiguration|null $value Value to set for the writebackConfiguration property.
    */
    public function setWritebackConfiguration(?GroupWritebackConfiguration $value): void {
        $this->getBackingStore()->set('writebackConfiguration', $value);
    }

}
