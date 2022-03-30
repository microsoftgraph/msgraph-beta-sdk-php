<?php

namespace Microsoft\Graph\Beta\Generated\Me;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\ActivateServicePlan\ActivateServicePlanRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Activities\Item\UserActivityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\AppConsentRequestsForApproval\AppConsentRequestsForApprovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\AppConsentRequestsForApproval\Item\AppConsentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Approvals\ApprovalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Approvals\Item\ApprovalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\AuthenticationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CalendarGroups\CalendarGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CalendarGroups\Item\CalendarGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Calendars\CalendarsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Calendars\Item\CalendarItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CalendarView\Item\EventItemRequestBuilder as MicrosoftGraphBetaGeneratedMeCalendarViewItemEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ChangePassword\ChangePasswordRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\CloudPCsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\CloudPCItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ContactFolders\ContactFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ContactFolders\Item\ContactFolderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Contacts\Item\ContactItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CreatedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeCreatedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\DeviceEnrollmentConfigurations\DeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\DeviceEnrollmentConfigurations\Item\DeviceEnrollmentConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\DeviceManagementTroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Devices\Item\DeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\DirectReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeDirectReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Drive\DriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Events\EventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Events\Item\EventItemRequestBuilder as MicrosoftGraphBetaGeneratedMeEventsItemEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ExportDeviceAndAppManagementData\ExportDeviceAndAppManagementDataRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ExportDeviceAndAppManagementDataWithSkipWithTop\ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ExportPersonalData\ExportPersonalDataRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\FindMeetingTimes\FindMeetingTimesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\FindRoomLists\FindRoomListsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\FindRooms\FindRoomsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\FindRoomsWithRoomList\FindRoomsWithRoomListRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\FollowedSites\FollowedSitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\FollowedSites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetEffectiveDeviceEnrollmentConfigurations\GetEffectiveDeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetLoggedOnManagedDevices\GetLoggedOnManagedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetMailTips\GetMailTipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetManagedAppDiagnosticStatuses\GetManagedAppDiagnosticStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetManagedAppPolicies\GetManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetManagedDevicesWithAppFailures\GetManagedDevicesWithAppFailuresRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetManagedDevicesWithFailedOrPendingApps\GetManagedDevicesWithFailedOrPendingAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InferenceClassification\InferenceClassificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Insights\InsightsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\InvalidateAllRefreshTokens\InvalidateAllRefreshTokensRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\IsManagedAppUserBlocked\IsManagedAppUserBlockedRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\JoinedGroups\JoinedGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\JoinedTeams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\JoinedTeams\JoinedTeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\LicenseDetails\Item\LicenseDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\LicenseDetails\LicenseDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\MailFolderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\MailFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ManagedDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Messages\Item\MessageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MobileAppIntentAndStates\Item\MobileAppIntentAndStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MobileAppIntentAndStates\MobileAppIntentAndStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MobileAppTroubleshootingEvents\Item\MobileAppTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MobileAppTroubleshootingEvents\MobileAppTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Notifications\Item\NotificationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Notifications\NotificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\OnlineMeetingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\OutlookRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OwnedDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeOwnedDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OwnedDevices\OwnedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OwnedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeOwnedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\PendingAccessReviewInstances\Item\AccessReviewInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\PendingAccessReviewInstances\PendingAccessReviewInstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\People\Item\PersonItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\People\PeopleRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Presence\PresenceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\ProfileRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\RegisteredDevices\RegisteredDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ReminderViewWithStartDateTimeWithEndDateTime\ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\RemoveAllDevicesFromManagement\RemoveAllDevicesFromManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ReprocessLicenseAssignment\ReprocessLicenseAssignmentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\RevokeSignInSessions\RevokeSignInSessionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ScopedRoleMemberOf\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ScopedRoleMemberOf\ScopedRoleMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Security\SecurityRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\SendMail\SendMailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Tasks\TasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Todo\TodoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\TransitiveReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeTransitiveReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\TransitiveReports\TransitiveReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\TranslateExchangeIds\TranslateExchangeIdsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\UnblockManagedApps\UnblockManagedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\UsageRights\Item\UsageRightItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\UsageRights\UsageRightsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\WindowsInformationProtectionDeviceRegistrations\Item\WindowsInformationProtectionDeviceRegistrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\WindowsInformationProtectionDeviceRegistrations\WindowsInformationProtectionDeviceRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\WipeAndBlockManagedApps\WipeAndBlockManagedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\WipeManagedAppRegistrationByDeviceTag\WipeManagedAppRegistrationByDeviceTagRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\WipeManagedAppRegistrationsByDeviceTag\WipeManagedAppRegistrationsByDeviceTagRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\User;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MeRequestBuilder 
{
    public function activateServicePlan(): ActivateServicePlanRequestBuilder {
        return new ActivateServicePlanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function appConsentRequestsForApproval(): AppConsentRequestsForApprovalRequestBuilder {
        return new AppConsentRequestsForApprovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function approvals(): ApprovalsRequestBuilder {
        return new ApprovalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function authentication(): AuthenticationRequestBuilder {
        return new AuthenticationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function calendarGroups(): CalendarGroupsRequestBuilder {
        return new CalendarGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function calendars(): CalendarsRequestBuilder {
        return new CalendarsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function changePassword(): ChangePasswordRequestBuilder {
        return new ChangePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function cloudPCs(): CloudPCsRequestBuilder {
        return new CloudPCsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function contactFolders(): ContactFoldersRequestBuilder {
        return new ContactFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function createdObjects(): CreatedObjectsRequestBuilder {
        return new CreatedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceEnrollmentConfigurations(): DeviceEnrollmentConfigurationsRequestBuilder {
        return new DeviceEnrollmentConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceManagementTroubleshootingEvents(): DeviceManagementTroubleshootingEventsRequestBuilder {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function directReports(): DirectReportsRequestBuilder {
        return new DirectReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function exportPersonalData(): ExportPersonalDataRequestBuilder {
        return new ExportPersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function findMeetingTimes(): FindMeetingTimesRequestBuilder {
        return new FindMeetingTimesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function followedSites(): FollowedSitesRequestBuilder {
        return new FollowedSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getMailTips(): GetMailTipsRequestBuilder {
        return new GetMailTipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function inferenceClassification(): InferenceClassificationRequestBuilder {
        return new InferenceClassificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function insights(): InsightsRequestBuilder {
        return new InsightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function invalidateAllRefreshTokens(): InvalidateAllRefreshTokensRequestBuilder {
        return new InvalidateAllRefreshTokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function joinedGroups(): JoinedGroupsRequestBuilder {
        return new JoinedGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function joinedTeams(): JoinedTeamsRequestBuilder {
        return new JoinedTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function licenseDetails(): LicenseDetailsRequestBuilder {
        return new LicenseDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mailFolders(): MailFoldersRequestBuilder {
        return new MailFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function manager(): ManagerRequestBuilder {
        return new ManagerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mobileAppIntentAndStates(): MobileAppIntentAndStatesRequestBuilder {
        return new MobileAppIntentAndStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mobileAppTroubleshootingEvents(): MobileAppTroubleshootingEventsRequestBuilder {
        return new MobileAppTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function notifications(): NotificationsRequestBuilder {
        return new NotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function outlook(): OutlookRequestBuilder {
        return new OutlookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function ownedDevices(): OwnedDevicesRequestBuilder {
        return new OwnedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function ownedObjects(): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function pendingAccessReviewInstances(): PendingAccessReviewInstancesRequestBuilder {
        return new PendingAccessReviewInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function people(): PeopleRequestBuilder {
        return new PeopleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function presence(): PresenceRequestBuilder {
        return new PresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function profile(): ProfileRequestBuilder {
        return new ProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function registeredDevices(): RegisteredDevicesRequestBuilder {
        return new RegisteredDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function removeAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function reprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder {
        return new ReprocessLicenseAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function revokeSignInSessions(): RevokeSignInSessionsRequestBuilder {
        return new RevokeSignInSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder {
        return new ScopedRoleMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function sendMail(): SendMailRequestBuilder {
        return new SendMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function todo(): TodoRequestBuilder {
        return new TodoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function transitiveReports(): TransitiveReportsRequestBuilder {
        return new TransitiveReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function translateExchangeIds(): TranslateExchangeIdsRequestBuilder {
        return new TranslateExchangeIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function unblockManagedApps(): UnblockManagedAppsRequestBuilder {
        return new UnblockManagedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function usageRights(): UsageRightsRequestBuilder {
        return new UsageRightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsInformationProtectionDeviceRegistrations(): WindowsInformationProtectionDeviceRegistrationsRequestBuilder {
        return new WindowsInformationProtectionDeviceRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function wipeAndBlockManagedApps(): WipeAndBlockManagedAppsRequestBuilder {
        return new WipeAndBlockManagedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function wipeManagedAppRegistrationByDeviceTag(): WipeManagedAppRegistrationByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.activities.item collection
     * @param string $id Unique identifier of the item
     * @return UserActivityItemRequestBuilder
    */
    public function activitiesById(string $id): UserActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userActivity_id'] = $id;
        return new UserActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.agreementAcceptances.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance_id'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.appConsentRequestsForApproval.item collection
     * @param string $id Unique identifier of the item
     * @return AppConsentRequestItemRequestBuilder
    */
    public function appConsentRequestsForApprovalById(string $id): AppConsentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appConsentRequest_id'] = $id;
        return new AppConsentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment_id'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.approvals.item collection
     * @param string $id Unique identifier of the item
     * @return ApprovalItemRequestBuilder
    */
    public function approvalsById(string $id): ApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approval_id'] = $id;
        return new ApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.calendarGroups.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarGroupItemRequestBuilder
    */
    public function calendarGroupsById(string $id): CalendarGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarGroup_id'] = $id;
        return new CalendarGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.calendars.item collection
     * @param string $id Unique identifier of the item
     * @return CalendarItemRequestBuilder
    */
    public function calendarsById(string $id): CalendarItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendar_id'] = $id;
        return new CalendarItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphBetaGeneratedMeCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.chats.item collection
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat_id'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.cloudPCs.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPCItemRequestBuilder
    */
    public function cloudPCsById(string $id): CloudPCItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPC_id'] = $id;
        return new CloudPCItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.contactFolders.item collection
     * @param string $id Unique identifier of the item
     * @return ContactFolderItemRequestBuilder
    */
    public function contactFoldersById(string $id): ContactFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contactFolder_id'] = $id;
        return new ContactFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.contacts.item collection
     * @param string $id Unique identifier of the item
     * @return ContactItemRequestBuilder
    */
    public function contactsById(string $id): ContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contact_id'] = $id;
        return new ContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.createdObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeCreatedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): MicrosoftGraphBetaGeneratedMeCreatedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeCreatedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get me
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
     * Update me
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.deviceEnrollmentConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceEnrollmentConfigurationItemRequestBuilder
    */
    public function deviceEnrollmentConfigurationsById(string $id): DeviceEnrollmentConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceEnrollmentConfiguration_id'] = $id;
        return new DeviceEnrollmentConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.deviceManagementTroubleshootingEvents.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function deviceManagementTroubleshootingEventsById(string $id): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent_id'] = $id;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.devices.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceItemRequestBuilder
    */
    public function devicesById(string $id): DeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['device_id'] = $id;
        return new DeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.directReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeDirectReportsItemDirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): MicrosoftGraphBetaGeneratedMeDirectReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeDirectReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive_id'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.events.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphBetaGeneratedMeEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.extensions.item collection
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.followedSites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function followedSitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site_id'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get me
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.joinedTeams.item collection
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function joinedTeamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team_id'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.licenseDetails.item collection
     * @param string $id Unique identifier of the item
     * @return LicenseDetailsItemRequestBuilder
    */
    public function licenseDetailsById(string $id): LicenseDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['licenseDetails_id'] = $id;
        return new LicenseDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item collection
     * @param string $id Unique identifier of the item
     * @return MailFolderItemRequestBuilder
    */
    public function mailFoldersById(string $id): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder_id'] = $id;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedAppRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration_id'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function managedDevicesById(string $id): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice_id'] = $id;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphBetaGeneratedMeMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.messages.item collection
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message_id'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mobileAppIntentAndStates.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppIntentAndStateItemRequestBuilder
    */
    public function mobileAppIntentAndStatesById(string $id): MobileAppIntentAndStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppIntentAndState_id'] = $id;
        return new MobileAppIntentAndStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mobileAppTroubleshootingEvents.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppTroubleshootingEventItemRequestBuilder
    */
    public function mobileAppTroubleshootingEventsById(string $id): MobileAppTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppTroubleshootingEvent_id'] = $id;
        return new MobileAppTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.notifications.item collection
     * @param string $id Unique identifier of the item
     * @return NotificationItemRequestBuilder
    */
    public function notificationsById(string $id): NotificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['notification_id'] = $id;
        return new NotificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.oauth2PermissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant_id'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.onlineMeetings.item collection
     * @param string $id Unique identifier of the item
     * @return OnlineMeetingItemRequestBuilder
    */
    public function onlineMeetingsById(string $id): OnlineMeetingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeeting_id'] = $id;
        return new OnlineMeetingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.ownedDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeOwnedDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function ownedDevicesById(string $id): MicrosoftGraphBetaGeneratedMeOwnedDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeOwnedDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.ownedObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeOwnedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): MicrosoftGraphBetaGeneratedMeOwnedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeOwnedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update me
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.pendingAccessReviewInstances.item collection
     * @param string $id Unique identifier of the item
     * @return AccessReviewInstanceItemRequestBuilder
    */
    public function pendingAccessReviewInstancesById(string $id): AccessReviewInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewInstance_id'] = $id;
        return new AccessReviewInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.people.item collection
     * @param string $id Unique identifier of the item
     * @return PersonItemRequestBuilder
    */
    public function peopleById(string $id): PersonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['person_id'] = $id;
        return new PersonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.photos.item collection
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto_id'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.registeredDevices.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder
    */
    public function registeredDevicesById(string $id): MicrosoftGraphBetaGeneratedMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeRegisteredDevicesItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.scopedRoleMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMemberOfById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership_id'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphBetaGeneratedMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.transitiveReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeTransitiveReportsItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveReportsById(string $id): MicrosoftGraphBetaGeneratedMeTransitiveReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMeTransitiveReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.usageRights.item collection
     * @param string $id Unique identifier of the item
     * @return UsageRightItemRequestBuilder
    */
    public function usageRightsById(string $id): UsageRightItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['usageRight_id'] = $id;
        return new UsageRightItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.windowsInformationProtectionDeviceRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionDeviceRegistrationItemRequestBuilder
    */
    public function windowsInformationProtectionDeviceRegistrationsById(string $id): WindowsInformationProtectionDeviceRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionDeviceRegistration_id'] = $id;
        return new WindowsInformationProtectionDeviceRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
