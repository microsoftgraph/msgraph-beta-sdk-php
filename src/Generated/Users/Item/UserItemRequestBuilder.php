<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Graph\Beta\Generated\Users\Item\ActivateServicePlan\ActivateServicePlanRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Activities\Item\UserActivityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AppConsentRequestsForApproval\AppConsentRequestsForApprovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AppConsentRequestsForApproval\Item\AppConsentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Approvals\ApprovalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Approvals\Item\ApprovalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\AuthenticationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CalendarGroups\CalendarGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CalendarGroups\Item\CalendarGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\CalendarsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\CalendarItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CalendarView\Item\EventItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemCalendarViewItemEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ChangePassword\ChangePasswordRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\CloudPCsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\CloudPCItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ContactFolders\ContactFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ContactFolders\Item\ContactFolderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Contacts\Item\ContactItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceEnrollmentConfigurations\DeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceEnrollmentConfigurations\Item\DeviceEnrollmentConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceManagementTroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Devices\Item\DeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Events\EventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Events\Item\EventItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemEventsItemEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ExportDeviceAndAppManagementData\ExportDeviceAndAppManagementDataRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ExportDeviceAndAppManagementDataWithSkipWithTop\ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ExportPersonalData\ExportPersonalDataRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\FindMeetingTimes\FindMeetingTimesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\FindRoomLists\FindRoomListsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\FindRooms\FindRoomsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\FindRoomsWithRoomList\FindRoomsWithRoomListRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\FollowedSites\FollowedSitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\FollowedSites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetEffectiveDeviceEnrollmentConfigurations\GetEffectiveDeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetLoggedOnManagedDevices\GetLoggedOnManagedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetMailTips\GetMailTipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetManagedAppDiagnosticStatuses\GetManagedAppDiagnosticStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetManagedAppPolicies\GetManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetManagedDevicesWithAppFailures\GetManagedDevicesWithAppFailuresRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetManagedDevicesWithFailedOrPendingApps\GetManagedDevicesWithFailedOrPendingAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InferenceClassification\InferenceClassificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Insights\InsightsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InvalidateAllRefreshTokens\InvalidateAllRefreshTokensRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\IsManagedAppUserBlocked\IsManagedAppUserBlockedRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\JoinedGroups\JoinedGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\JoinedTeams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\JoinedTeams\JoinedTeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\LicenseDetails\Item\LicenseDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\LicenseDetails\LicenseDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MailFolders\Item\MailFolderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MailFolders\MailFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Messages\Item\MessageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MobileAppIntentAndStates\Item\MobileAppIntentAndStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MobileAppIntentAndStates\MobileAppIntentAndStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MobileAppTroubleshootingEvents\Item\MobileAppTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\MobileAppTroubleshootingEvents\MobileAppTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Notifications\Item\NotificationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Notifications\NotificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetings\Item\OnlineMeetingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Outlook\OutlookRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OwnedDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OwnedDevices\OwnedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\AccessReviewInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\PendingAccessReviewInstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\People\Item\PersonItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\People\PeopleRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Presence\PresenceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\ProfileRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\RegisteredDevices\RegisteredDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ReminderViewWithStartDateTimeWithEndDateTime\ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\RemoveAllDevicesFromManagement\RemoveAllDevicesFromManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ReprocessLicenseAssignment\ReprocessLicenseAssignmentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\RevokeSignInSessions\RevokeSignInSessionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ScopedRoleMemberOf\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ScopedRoleMemberOf\ScopedRoleMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Security\SecurityRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\SendMail\SendMailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Tasks\TasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Todo\TodoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TransitiveReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemTransitiveReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TransitiveReports\TransitiveReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TranslateExchangeIds\TranslateExchangeIdsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UnblockManagedApps\UnblockManagedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UsageRights\Item\UsageRightItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UsageRights\UsageRightsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WindowsInformationProtectionDeviceRegistrations\Item\WindowsInformationProtectionDeviceRegistrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WindowsInformationProtectionDeviceRegistrations\WindowsInformationProtectionDeviceRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WipeAndBlockManagedApps\WipeAndBlockManagedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WipeManagedAppRegistrationByDeviceTag\WipeManagedAppRegistrationByDeviceTagRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WipeManagedAppRegistrationsByDeviceTag\WipeManagedAppRegistrationsByDeviceTagRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UserItemRequestBuilder 
{
    /**
     * The activateServicePlan property
    */
    public function activateServicePlan(): ActivateServicePlanRequestBuilder {
        return new ActivateServicePlanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The activities property
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agreementAcceptances property
    */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The analytics property
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The appConsentRequestsForApproval property
    */
    public function appConsentRequestsForApproval(): AppConsentRequestsForApprovalRequestBuilder {
        return new AppConsentRequestsForApprovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The appRoleAssignments property
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The approvals property
    */
    public function approvals(): ApprovalsRequestBuilder {
        return new ApprovalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The assignLicense property
    */
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The authentication property
    */
    public function authentication(): AuthenticationRequestBuilder {
        return new AuthenticationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendar property
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarGroups property
    */
    public function calendarGroups(): CalendarGroupsRequestBuilder {
        return new CalendarGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendars property
    */
    public function calendars(): CalendarsRequestBuilder {
        return new CalendarsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarView property
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The changePassword property
    */
    public function changePassword(): ChangePasswordRequestBuilder {
        return new ChangePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The chats property
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cloudPCs property
    */
    public function cloudPCs(): CloudPCsRequestBuilder {
        return new CloudPCsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contactFolders property
    */
    public function contactFolders(): ContactFoldersRequestBuilder {
        return new ContactFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contacts property
    */
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createdObjects property
    */
    public function createdObjects(): CreatedObjectsRequestBuilder {
        return new CreatedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceEnrollmentConfigurations property
    */
    public function deviceEnrollmentConfigurations(): DeviceEnrollmentConfigurationsRequestBuilder {
        return new DeviceEnrollmentConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceManagementTroubleshootingEvents property
    */
    public function deviceManagementTroubleshootingEvents(): DeviceManagementTroubleshootingEventsRequestBuilder {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The devices property
    */
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The directReports property
    */
    public function directReports(): DirectReportsRequestBuilder {
        return new DirectReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drive property
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drives property
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The events property
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The exportPersonalData property
    */
    public function exportPersonalData(): ExportPersonalDataRequestBuilder {
        return new ExportPersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The findMeetingTimes property
    */
    public function findMeetingTimes(): FindMeetingTimesRequestBuilder {
        return new FindMeetingTimesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The followedSites property
    */
    public function followedSites(): FollowedSitesRequestBuilder {
        return new FollowedSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMailTips property
    */
    public function getMailTips(): GetMailTipsRequestBuilder {
        return new GetMailTipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The inferenceClassification property
    */
    public function inferenceClassification(): InferenceClassificationRequestBuilder {
        return new InferenceClassificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The informationProtection property
    */
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The insights property
    */
    public function insights(): InsightsRequestBuilder {
        return new InsightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invalidateAllRefreshTokens property
    */
    public function invalidateAllRefreshTokens(): InvalidateAllRefreshTokensRequestBuilder {
        return new InvalidateAllRefreshTokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The joinedGroups property
    */
    public function joinedGroups(): JoinedGroupsRequestBuilder {
        return new JoinedGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The joinedTeams property
    */
    public function joinedTeams(): JoinedTeamsRequestBuilder {
        return new JoinedTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The licenseDetails property
    */
    public function licenseDetails(): LicenseDetailsRequestBuilder {
        return new LicenseDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mailFolders property
    */
    public function mailFolders(): MailFoldersRequestBuilder {
        return new MailFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedAppRegistrations property
    */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedDevices property
    */
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The manager property
    */
    public function manager(): ManagerRequestBuilder {
        return new ManagerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberOf property
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The messages property
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mobileAppIntentAndStates property
    */
    public function mobileAppIntentAndStates(): MobileAppIntentAndStatesRequestBuilder {
        return new MobileAppIntentAndStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mobileAppTroubleshootingEvents property
    */
    public function mobileAppTroubleshootingEvents(): MobileAppTroubleshootingEventsRequestBuilder {
        return new MobileAppTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The notifications property
    */
    public function notifications(): NotificationsRequestBuilder {
        return new NotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The oauth2PermissionGrants property
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onenote property
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onlineMeetings property
    */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The outlook property
    */
    public function outlook(): OutlookRequestBuilder {
        return new OutlookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ownedDevices property
    */
    public function ownedDevices(): OwnedDevicesRequestBuilder {
        return new OwnedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ownedObjects property
    */
    public function ownedObjects(): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The pendingAccessReviewInstances property
    */
    public function pendingAccessReviewInstances(): PendingAccessReviewInstancesRequestBuilder {
        return new PendingAccessReviewInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The people property
    */
    public function people(): PeopleRequestBuilder {
        return new PeopleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The photo property
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The photos property
    */
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The planner property
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The presence property
    */
    public function presence(): PresenceRequestBuilder {
        return new PresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The profile property
    */
    public function profile(): ProfileRequestBuilder {
        return new ProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The registeredDevices property
    */
    public function registeredDevices(): RegisteredDevicesRequestBuilder {
        return new RegisteredDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeAllDevicesFromManagement property
    */
    public function removeAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reprocessLicenseAssignment property
    */
    public function reprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder {
        return new ReprocessLicenseAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The revokeSignInSessions property
    */
    public function revokeSignInSessions(): RevokeSignInSessionsRequestBuilder {
        return new RevokeSignInSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The scopedRoleMemberOf property
    */
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder {
        return new ScopedRoleMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The security property
    */
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendMail property
    */
    public function sendMail(): SendMailRequestBuilder {
        return new SendMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The settings property
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tasks property
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The teamwork property
    */
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The todo property
    */
    public function todo(): TodoRequestBuilder {
        return new TodoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transitiveMemberOf property
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transitiveReports property
    */
    public function transitiveReports(): TransitiveReportsRequestBuilder {
        return new TransitiveReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The translateExchangeIds property
    */
    public function translateExchangeIds(): TranslateExchangeIdsRequestBuilder {
        return new TranslateExchangeIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unblockManagedApps property
    */
    public function unblockManagedApps(): UnblockManagedAppsRequestBuilder {
        return new UnblockManagedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The usageRights property
    */
    public function usageRights(): UsageRightsRequestBuilder {
        return new UsageRightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsInformationProtectionDeviceRegistrations property
    */
    public function windowsInformationProtectionDeviceRegistrations(): WindowsInformationProtectionDeviceRegistrationsRequestBuilder {
        return new WindowsInformationProtectionDeviceRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The wipeAndBlockManagedApps property
    */
    public function wipeAndBlockManagedApps(): WipeAndBlockManagedAppsRequestBuilder {
        return new WipeAndBlockManagedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The wipeManagedAppRegistrationByDeviceTag property
    */
    public function wipeManagedAppRegistrationByDeviceTag(): WipeManagedAppRegistrationByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The wipeManagedAppRegistrationsByDeviceTag property
    */
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.activities.item collection
     * @param string $id Unique identifier of the item
     * @return UserActivityItemRequestBuilder
    */
    public function activitiesById(string $id): UserActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userActivity_id'] = $id;
        return new UserActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.agreementAcceptances.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance_id'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.appConsentRequestsForApproval.item collection
     * @param string $id Unique identifier of the item
     * @return AppConsentRequestItemRequestBuilder
    */
    public function appConsentRequestsForApprovalById(string $id): AppConsentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appConsentRequest_id'] = $id;
        return new AppConsentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment_id'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.approvals.item collection
     * @param string $id Unique identifier of the item
     * @return ApprovalItemRequestBuilder
    */
    public function approvalsById(string $id): ApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approval_id'] = $id;
        return new ApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendarGroups.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarGroupItemRequestBuilder
    */
    public function calendarGroupsById(string $id): CalendarGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarGroup_id'] = $id;
        return new CalendarGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendars.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarItemRequestBuilder
    */
    public function calendarsById(string $id): CalendarItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendar_id'] = $id;
        return new CalendarItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphBetaGeneratedUsersItemCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item collection
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat_id'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.cloudPCs.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPCItemRequestBuilder
    */
    public function cloudPCsById(string $id): CloudPCItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPC_id'] = $id;
        return new CloudPCItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.contactFolders.item collection
     * @param string $id Unique identifier of the item
     * @return ContactFolderItemRequestBuilder
    */
    public function contactFoldersById(string $id): ContactFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contactFolder_id'] = $id;
        return new ContactFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.contacts.item collection
     * @param string $id Unique identifier of the item
     * @return ContactItemRequestBuilder
    */
    public function contactsById(string $id): ContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contact_id'] = $id;
        return new ContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.createdObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): MicrosoftGraphBetaGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemCreatedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from users by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update entity in users
     * @param User $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(User $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete entity from users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.deviceEnrollmentConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceEnrollmentConfigurationItemRequestBuilder
    */
    public function deviceEnrollmentConfigurationsById(string $id): DeviceEnrollmentConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceEnrollmentConfiguration_id'] = $id;
        return new DeviceEnrollmentConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.deviceManagementTroubleshootingEvents.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function deviceManagementTroubleshootingEventsById(string $id): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent_id'] = $id;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.devices.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceItemRequestBuilder
    */
    public function devicesById(string $id): DeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['device_id'] = $id;
        return new DeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.directReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): MicrosoftGraphBetaGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemDirectReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive_id'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.events.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphBetaGeneratedUsersItemEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the exportDeviceAndAppManagementData method.
     * @return ExportDeviceAndAppManagementDataRequestBuilder
    */
    public function exportDeviceAndAppManagementData(): ExportDeviceAndAppManagementDataRequestBuilder {
        return new ExportDeviceAndAppManagementDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the exportDeviceAndAppManagementData method.
     * @param int $skip Usage: skip={skip}
     * @param int $top Usage: top={top}
     * @return ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder
    */
    public function exportDeviceAndAppManagementDataWithSkipWithTop(int $skip, int $top): ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder {
        return new ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder($this->pathParameters, $this->requestAdapter, $skip, $top);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension_id'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the findRoomLists method.
     * @return FindRoomListsRequestBuilder
    */
    public function findRoomLists(): FindRoomListsRequestBuilder {
        return new FindRoomListsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the findRooms method.
     * @return FindRoomsRequestBuilder
    */
    public function findRooms(): FindRoomsRequestBuilder {
        return new FindRoomsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the findRooms method.
     * @param string $roomList Usage: RoomList='{RoomList}'
     * @return FindRoomsWithRoomListRequestBuilder
    */
    public function findRoomsWithRoomList(string $roomList): FindRoomsWithRoomListRequestBuilder {
        return new FindRoomsWithRoomListRequestBuilder($this->pathParameters, $this->requestAdapter, $roomList);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.followedSites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function followedSitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site_id'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from users by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, User::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getEffectiveDeviceEnrollmentConfigurations method.
     * @return GetEffectiveDeviceEnrollmentConfigurationsRequestBuilder
    */
    public function getEffectiveDeviceEnrollmentConfigurations(): GetEffectiveDeviceEnrollmentConfigurationsRequestBuilder {
        return new GetEffectiveDeviceEnrollmentConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getLoggedOnManagedDevices method.
     * @return GetLoggedOnManagedDevicesRequestBuilder
    */
    public function getLoggedOnManagedDevices(): GetLoggedOnManagedDevicesRequestBuilder {
        return new GetLoggedOnManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getManagedAppDiagnosticStatuses method.
     * @return GetManagedAppDiagnosticStatusesRequestBuilder
    */
    public function getManagedAppDiagnosticStatuses(): GetManagedAppDiagnosticStatusesRequestBuilder {
        return new GetManagedAppDiagnosticStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getManagedAppPolicies method.
     * @return GetManagedAppPoliciesRequestBuilder
    */
    public function getManagedAppPolicies(): GetManagedAppPoliciesRequestBuilder {
        return new GetManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getManagedDevicesWithAppFailures method.
     * @return GetManagedDevicesWithAppFailuresRequestBuilder
    */
    public function getManagedDevicesWithAppFailures(): GetManagedDevicesWithAppFailuresRequestBuilder {
        return new GetManagedDevicesWithAppFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getManagedDevicesWithFailedOrPendingApps method.
     * @return GetManagedDevicesWithFailedOrPendingAppsRequestBuilder
    */
    public function getManagedDevicesWithFailedOrPendingApps(): GetManagedDevicesWithFailedOrPendingAppsRequestBuilder {
        return new GetManagedDevicesWithFailedOrPendingAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the isManagedAppUserBlocked method.
     * @return IsManagedAppUserBlockedRequestBuilder
    */
    public function isManagedAppUserBlocked(): IsManagedAppUserBlockedRequestBuilder {
        return new IsManagedAppUserBlockedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.joinedTeams.item collection
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function joinedTeamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team_id'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.licenseDetails.item collection
     * @param string $id Unique identifier of the item
     * @return LicenseDetailsItemRequestBuilder
    */
    public function licenseDetailsById(string $id): LicenseDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['licenseDetails_id'] = $id;
        return new LicenseDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.mailFolders.item collection
     * @param string $id Unique identifier of the item
     * @return MailFolderItemRequestBuilder
    */
    public function mailFoldersById(string $id): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder_id'] = $id;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.managedAppRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration_id'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.managedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function managedDevicesById(string $id): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice_id'] = $id;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphBetaGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.messages.item collection
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message_id'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.mobileAppIntentAndStates.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppIntentAndStateItemRequestBuilder
    */
    public function mobileAppIntentAndStatesById(string $id): MobileAppIntentAndStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppIntentAndState_id'] = $id;
        return new MobileAppIntentAndStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.mobileAppTroubleshootingEvents.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppTroubleshootingEventItemRequestBuilder
    */
    public function mobileAppTroubleshootingEventsById(string $id): MobileAppTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppTroubleshootingEvent_id'] = $id;
        return new MobileAppTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.notifications.item collection
     * @param string $id Unique identifier of the item
     * @return NotificationItemRequestBuilder
    */
    public function notificationsById(string $id): NotificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['notification_id'] = $id;
        return new NotificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.oauth2PermissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant_id'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.onlineMeetings.item collection
     * @param string $id Unique identifier of the item
     * @return OnlineMeetingItemRequestBuilder
    */
    public function onlineMeetingsById(string $id): OnlineMeetingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeeting_id'] = $id;
        return new OnlineMeetingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.ownedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function ownedDevicesById(string $id): MicrosoftGraphBetaGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemOwnedDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.ownedObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): MicrosoftGraphBetaGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemOwnedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in users
     * @param User $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(User $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.pendingAccessReviewInstances.item collection
     * @param string $id Unique identifier of the item
     * @return AccessReviewInstanceItemRequestBuilder
    */
    public function pendingAccessReviewInstancesById(string $id): AccessReviewInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewInstance_id'] = $id;
        return new AccessReviewInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.people.item collection
     * @param string $id Unique identifier of the item
     * @return PersonItemRequestBuilder
    */
    public function peopleById(string $id): PersonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['person_id'] = $id;
        return new PersonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.photos.item collection
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto_id'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.registeredDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function registeredDevicesById(string $id): MicrosoftGraphBetaGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemRegisteredDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the reminderView method.
     * @param string $endDateTime Usage: EndDateTime='{EndDateTime}'
     * @param string $startDateTime Usage: StartDateTime='{StartDateTime}'
     * @return ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function reminderViewWithStartDateTimeWithEndDateTime(string $endDateTime, string $startDateTime): ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.scopedRoleMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMemberOfById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership_id'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphBetaGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.transitiveReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemTransitiveReportsItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveReportsById(string $id): MicrosoftGraphBetaGeneratedUsersItemTransitiveReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemTransitiveReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.usageRights.item collection
     * @param string $id Unique identifier of the item
     * @return UsageRightItemRequestBuilder
    */
    public function usageRightsById(string $id): UsageRightItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['usageRight_id'] = $id;
        return new UsageRightItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.windowsInformationProtectionDeviceRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionDeviceRegistrationItemRequestBuilder
    */
    public function windowsInformationProtectionDeviceRegistrationsById(string $id): WindowsInformationProtectionDeviceRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionDeviceRegistration_id'] = $id;
        return new WindowsInformationProtectionDeviceRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
