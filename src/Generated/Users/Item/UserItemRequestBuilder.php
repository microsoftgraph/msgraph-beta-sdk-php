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
use Microsoft\Graph\Beta\Generated\Users\Item\AppRoleAssignedResources\AppRoleAssignedResourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\AppRoleAssignedResources\Item\ServicePrincipalItemRequestBuilder;
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
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceEnrollmentConfigurations\DeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceEnrollmentConfigurations\Item\DeviceEnrollmentConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DeviceManagementTroubleshootingEvents\Item\DeviceManagementTroubleshootingEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Devices\Item\DeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Events\EventsRequestBuilder;
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
use Microsoft\Graph\Beta\Generated\Users\Item\OwnedDevices\OwnedDevicesRequestBuilder;
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
use Microsoft\Graph\Beta\Generated\Users\Item\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Todo\TodoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TransitiveReports\TransitiveReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\TranslateExchangeIds\TranslateExchangeIdsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UnblockManagedApps\UnblockManagedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UsageRights\Item\UsageRightItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UsageRights\UsageRightsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WindowsInformationProtectionDeviceRegistrations\Item\WindowsInformationProtectionDeviceRegistrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WindowsInformationProtectionDeviceRegistrations\WindowsInformationProtectionDeviceRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WipeAndBlockManagedApps\WipeAndBlockManagedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WipeManagedAppRegistrationByDeviceTag\WipeManagedAppRegistrationByDeviceTagRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\WipeManagedAppRegistrationsByAzureAdDeviceId\WipeManagedAppRegistrationsByAzureAdDeviceIdRequestBuilder;
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
     * Provides operations to call the activateServicePlan method.
    */
    public function activateServicePlan(): ActivateServicePlanRequestBuilder {
        return new ActivateServicePlanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the activities property of the microsoft.graph.user entity.
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agreementAcceptances property of the microsoft.graph.user entity.
    */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the analytics property of the microsoft.graph.user entity.
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appConsentRequestsForApproval property of the microsoft.graph.user entity.
    */
    public function appConsentRequestsForApproval(): AppConsentRequestsForApprovalRequestBuilder {
        return new AppConsentRequestsForApprovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appRoleAssignedResources property of the microsoft.graph.user entity.
    */
    public function appRoleAssignedResources(): AppRoleAssignedResourcesRequestBuilder {
        return new AppRoleAssignedResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.user entity.
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the approvals property of the microsoft.graph.user entity.
    */
    public function approvals(): ApprovalsRequestBuilder {
        return new ApprovalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignLicense method.
    */
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authentication property of the microsoft.graph.user entity.
    */
    public function authentication(): AuthenticationRequestBuilder {
        return new AuthenticationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendar property of the microsoft.graph.user entity.
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarGroups property of the microsoft.graph.user entity.
    */
    public function calendarGroups(): CalendarGroupsRequestBuilder {
        return new CalendarGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendars property of the microsoft.graph.user entity.
    */
    public function calendars(): CalendarsRequestBuilder {
        return new CalendarsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.user entity.
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the changePassword method.
    */
    public function changePassword(): ChangePasswordRequestBuilder {
        return new ChangePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the chats property of the microsoft.graph.user entity.
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPCs property of the microsoft.graph.user entity.
    */
    public function cloudPCs(): CloudPCsRequestBuilder {
        return new CloudPCsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contactFolders property of the microsoft.graph.user entity.
    */
    public function contactFolders(): ContactFoldersRequestBuilder {
        return new ContactFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contacts property of the microsoft.graph.user entity.
    */
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdObjects property of the microsoft.graph.user entity.
    */
    public function createdObjects(): CreatedObjectsRequestBuilder {
        return new CreatedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceEnrollmentConfigurations property of the microsoft.graph.user entity.
    */
    public function deviceEnrollmentConfigurations(): DeviceEnrollmentConfigurationsRequestBuilder {
        return new DeviceEnrollmentConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagementTroubleshootingEvents property of the microsoft.graph.user entity.
    */
    public function deviceManagementTroubleshootingEvents(): DeviceManagementTroubleshootingEventsRequestBuilder {
        return new DeviceManagementTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the devices property of the microsoft.graph.user entity.
    */
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directReports property of the microsoft.graph.user entity.
    */
    public function directReports(): DirectReportsRequestBuilder {
        return new DirectReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.user entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drives property of the microsoft.graph.user entity.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the events property of the microsoft.graph.user entity.
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exportPersonalData method.
    */
    public function exportPersonalData(): ExportPersonalDataRequestBuilder {
        return new ExportPersonalDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.user entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the findMeetingTimes method.
    */
    public function findMeetingTimes(): FindMeetingTimesRequestBuilder {
        return new FindMeetingTimesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the followedSites property of the microsoft.graph.user entity.
    */
    public function followedSites(): FollowedSitesRequestBuilder {
        return new FollowedSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMailTips method.
    */
    public function getMailTips(): GetMailTipsRequestBuilder {
        return new GetMailTipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inferenceClassification property of the microsoft.graph.user entity.
    */
    public function inferenceClassification(): InferenceClassificationRequestBuilder {
        return new InferenceClassificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the informationProtection property of the microsoft.graph.user entity.
    */
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the insights property of the microsoft.graph.user entity.
    */
    public function insights(): InsightsRequestBuilder {
        return new InsightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the invalidateAllRefreshTokens method.
    */
    public function invalidateAllRefreshTokens(): InvalidateAllRefreshTokensRequestBuilder {
        return new InvalidateAllRefreshTokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the joinedGroups property of the microsoft.graph.user entity.
    */
    public function joinedGroups(): JoinedGroupsRequestBuilder {
        return new JoinedGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the joinedTeams property of the microsoft.graph.user entity.
    */
    public function joinedTeams(): JoinedTeamsRequestBuilder {
        return new JoinedTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the licenseDetails property of the microsoft.graph.user entity.
    */
    public function licenseDetails(): LicenseDetailsRequestBuilder {
        return new LicenseDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailFolders property of the microsoft.graph.user entity.
    */
    public function mailFolders(): MailFoldersRequestBuilder {
        return new MailFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.user entity.
    */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
    */
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the manager property of the microsoft.graph.user entity.
    */
    public function manager(): ManagerRequestBuilder {
        return new ManagerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.user entity.
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the messages property of the microsoft.graph.user entity.
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppIntentAndStates property of the microsoft.graph.user entity.
    */
    public function mobileAppIntentAndStates(): MobileAppIntentAndStatesRequestBuilder {
        return new MobileAppIntentAndStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppTroubleshootingEvents property of the microsoft.graph.user entity.
    */
    public function mobileAppTroubleshootingEvents(): MobileAppTroubleshootingEventsRequestBuilder {
        return new MobileAppTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the notifications property of the microsoft.graph.user entity.
    */
    public function notifications(): NotificationsRequestBuilder {
        return new NotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the oauth2PermissionGrants property of the microsoft.graph.user entity.
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onenote property of the microsoft.graph.user entity.
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.user entity.
    */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the outlook property of the microsoft.graph.user entity.
    */
    public function outlook(): OutlookRequestBuilder {
        return new OutlookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ownedDevices property of the microsoft.graph.user entity.
    */
    public function ownedDevices(): OwnedDevicesRequestBuilder {
        return new OwnedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ownedObjects property of the microsoft.graph.user entity.
    */
    public function ownedObjects(): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the pendingAccessReviewInstances property of the microsoft.graph.user entity.
    */
    public function pendingAccessReviewInstances(): PendingAccessReviewInstancesRequestBuilder {
        return new PendingAccessReviewInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the people property of the microsoft.graph.user entity.
    */
    public function people(): PeopleRequestBuilder {
        return new PeopleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photo property of the microsoft.graph.user entity.
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photos property of the microsoft.graph.user entity.
    */
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the planner property of the microsoft.graph.user entity.
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the presence property of the microsoft.graph.user entity.
    */
    public function presence(): PresenceRequestBuilder {
        return new PresenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the profile property of the microsoft.graph.user entity.
    */
    public function profile(): ProfileRequestBuilder {
        return new ProfileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the registeredDevices property of the microsoft.graph.user entity.
    */
    public function registeredDevices(): RegisteredDevicesRequestBuilder {
        return new RegisteredDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeAllDevicesFromManagement method.
    */
    public function removeAllDevicesFromManagement(): RemoveAllDevicesFromManagementRequestBuilder {
        return new RemoveAllDevicesFromManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprocessLicenseAssignment method.
    */
    public function reprocessLicenseAssignment(): ReprocessLicenseAssignmentRequestBuilder {
        return new ReprocessLicenseAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeSignInSessions method.
    */
    public function revokeSignInSessions(): RevokeSignInSessionsRequestBuilder {
        return new RevokeSignInSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the scopedRoleMemberOf property of the microsoft.graph.user entity.
    */
    public function scopedRoleMemberOf(): ScopedRoleMemberOfRequestBuilder {
        return new ScopedRoleMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the security property of the microsoft.graph.user entity.
    */
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendMail method.
    */
    public function sendMail(): SendMailRequestBuilder {
        return new SendMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.user entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamwork property of the microsoft.graph.user entity.
    */
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the todo property of the microsoft.graph.user entity.
    */
    public function todo(): TodoRequestBuilder {
        return new TodoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.user entity.
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveReports property of the microsoft.graph.user entity.
    */
    public function transitiveReports(): TransitiveReportsRequestBuilder {
        return new TransitiveReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the translateExchangeIds method.
    */
    public function translateExchangeIds(): TranslateExchangeIdsRequestBuilder {
        return new TranslateExchangeIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unblockManagedApps method.
    */
    public function unblockManagedApps(): UnblockManagedAppsRequestBuilder {
        return new UnblockManagedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the usageRights property of the microsoft.graph.user entity.
    */
    public function usageRights(): UsageRightsRequestBuilder {
        return new UsageRightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionDeviceRegistrations property of the microsoft.graph.user entity.
    */
    public function windowsInformationProtectionDeviceRegistrations(): WindowsInformationProtectionDeviceRegistrationsRequestBuilder {
        return new WindowsInformationProtectionDeviceRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipeAndBlockManagedApps method.
    */
    public function wipeAndBlockManagedApps(): WipeAndBlockManagedAppsRequestBuilder {
        return new WipeAndBlockManagedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipeManagedAppRegistrationByDeviceTag method.
    */
    public function wipeManagedAppRegistrationByDeviceTag(): WipeManagedAppRegistrationByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipeManagedAppRegistrationsByAzureAdDeviceId method.
    */
    public function wipeManagedAppRegistrationsByAzureAdDeviceId(): WipeManagedAppRegistrationsByAzureAdDeviceIdRequestBuilder {
        return new WipeManagedAppRegistrationsByAzureAdDeviceIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipeManagedAppRegistrationsByDeviceTag method.
    */
    public function wipeManagedAppRegistrationsByDeviceTag(): WipeManagedAppRegistrationsByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationsByDeviceTagRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the activities property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return UserActivityItemRequestBuilder
    */
    public function activitiesById(string $id): UserActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userActivity%2Did'] = $id;
        return new UserActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the agreementAcceptances property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance%2Did'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appConsentRequestsForApproval property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return AppConsentRequestItemRequestBuilder
    */
    public function appConsentRequestsForApprovalById(string $id): AppConsentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appConsentRequest%2Did'] = $id;
        return new AppConsentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appRoleAssignedResources property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ServicePrincipalItemRequestBuilder
    */
    public function appRoleAssignedResourcesById(string $id): ServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipal%2Did'] = $id;
        return new ServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the approvals property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ApprovalItemRequestBuilder
    */
    public function approvalsById(string $id): ApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approval%2Did'] = $id;
        return new ApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendarGroups property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return CalendarGroupItemRequestBuilder
    */
    public function calendarGroupsById(string $id): CalendarGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendarGroup%2Did'] = $id;
        return new CalendarGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendars property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return CalendarItemRequestBuilder
    */
    public function calendarsById(string $id): CalendarItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['calendar%2Did'] = $id;
        return new CalendarItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\CalendarView\Item\EventItemRequestBuilder
    */
    public function calendarViewById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\CalendarView\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\CalendarView\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the chats property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat%2Did'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the cloudPCs property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return CloudPCItemRequestBuilder
    */
    public function cloudPCsById(string $id): CloudPCItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPC%2Did'] = $id;
        return new CloudPCItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Provides operations to manage the contactFolders property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ContactFolderItemRequestBuilder
    */
    public function contactFoldersById(string $id): ContactFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contactFolder%2Did'] = $id;
        return new ContactFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the contacts property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ContactItemRequestBuilder
    */
    public function contactsById(string $id): ContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contact%2Did'] = $id;
        return new ContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the createdObjects property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete user.   When deleted, user resources are moved to a temporary container and can be restored within 30 days.  After that time, they are permanently deleted.  To learn more, see deletedItems.
     * @param UserItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?UserItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deviceEnrollmentConfigurations property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return DeviceEnrollmentConfigurationItemRequestBuilder
    */
    public function deviceEnrollmentConfigurationsById(string $id): DeviceEnrollmentConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceEnrollmentConfiguration%2Did'] = $id;
        return new DeviceEnrollmentConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceManagementTroubleshootingEvents property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementTroubleshootingEventItemRequestBuilder
    */
    public function deviceManagementTroubleshootingEventsById(string $id): DeviceManagementTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTroubleshootingEvent%2Did'] = $id;
        return new DeviceManagementTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the devices property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return DeviceItemRequestBuilder
    */
    public function devicesById(string $id): DeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['device%2Did'] = $id;
        return new DeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the directReports property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the drives property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the events property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\Events\Item\EventItemRequestBuilder
    */
    public function eventsById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\Events\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\Events\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Provides operations to manage the extensions property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
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
     * Provides operations to manage the followedSites property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function followedSitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of user object. This operation returns by default only a subset of the more commonly used properties for each user. These _default_ properties are noted in the Properties section. To get properties that are _not_ returned by default, do a GET operation for the user and specify the properties in a `$select` OData query option. Because the **user** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **user** instance.
     * @param UserItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?UserItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [User::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
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
     * Provides operations to manage the joinedTeams property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function joinedTeamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team%2Did'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the licenseDetails property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return LicenseDetailsItemRequestBuilder
    */
    public function licenseDetailsById(string $id): LicenseDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['licenseDetails%2Did'] = $id;
        return new LicenseDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mailFolders property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return MailFolderItemRequestBuilder
    */
    public function mailFoldersById(string $id): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder%2Did'] = $id;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration%2Did'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceItemRequestBuilder
    */
    public function managedDevicesById(string $id): ManagedDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDevice%2Did'] = $id;
        return new ManagedDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the messages property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message%2Did'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileAppIntentAndStates property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppIntentAndStateItemRequestBuilder
    */
    public function mobileAppIntentAndStatesById(string $id): MobileAppIntentAndStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppIntentAndState%2Did'] = $id;
        return new MobileAppIntentAndStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileAppTroubleshootingEvents property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppTroubleshootingEventItemRequestBuilder
    */
    public function mobileAppTroubleshootingEventsById(string $id): MobileAppTroubleshootingEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppTroubleshootingEvent%2Did'] = $id;
        return new MobileAppTroubleshootingEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the notifications property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return NotificationItemRequestBuilder
    */
    public function notificationsById(string $id): NotificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['notification%2Did'] = $id;
        return new NotificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the oauth2PermissionGrants property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return OnlineMeetingItemRequestBuilder
    */
    public function onlineMeetingsById(string $id): OnlineMeetingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeeting%2Did'] = $id;
        return new OnlineMeetingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the ownedDevices property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\OwnedDevices\Item\DirectoryObjectItemRequestBuilder
    */
    public function ownedDevicesById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\OwnedDevices\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\OwnedDevices\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the ownedObjects property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of a user object. Not all properties can be updated by Member or Guest users with their default permissions without Administrator roles. Compare member and guest default permissions to see properties they can manage.
     * @param User $body The request body
     * @param UserItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(User $body, ?UserItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [User::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the pendingAccessReviewInstances property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return AccessReviewInstanceItemRequestBuilder
    */
    public function pendingAccessReviewInstancesById(string $id): AccessReviewInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewInstance%2Did'] = $id;
        return new AccessReviewInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the people property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return PersonItemRequestBuilder
    */
    public function peopleById(string $id): PersonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['person%2Did'] = $id;
        return new PersonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the photos property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto%2Did'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the registeredDevices property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder
    */
    public function registeredDevicesById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\RegisteredDevices\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Provides operations to manage the scopedRoleMemberOf property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMemberOfById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete user.   When deleted, user resources are moved to a temporary container and can be restored within 30 days.  After that time, they are permanently deleted.  To learn more, see deletedItems.
     * @param UserItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of user object. This operation returns by default only a subset of the more commonly used properties for each user. These _default_ properties are noted in the Properties section. To get properties that are _not_ returned by default, do a GET operation for the user and specify the properties in a `$select` OData query option. Because the **user** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **user** instance.
     * @param UserItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the properties of a user object. Not all properties can be updated by Member or Guest users with their default permissions without Administrator roles. Compare member and guest default permissions to see properties they can manage.
     * @param User $body The request body
     * @param UserItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(User $body, ?UserItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the transitiveReports property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\TransitiveReports\Item\DirectoryObjectItemRequestBuilder
    */
    public function transitiveReportsById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\TransitiveReports\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\TransitiveReports\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the usageRights property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return UsageRightItemRequestBuilder
    */
    public function usageRightsById(string $id): UsageRightItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['usageRight%2Did'] = $id;
        return new UsageRightItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsInformationProtectionDeviceRegistrations property of the microsoft.graph.user entity.
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionDeviceRegistrationItemRequestBuilder
    */
    public function windowsInformationProtectionDeviceRegistrationsById(string $id): WindowsInformationProtectionDeviceRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionDeviceRegistration%2Did'] = $id;
        return new WindowsInformationProtectionDeviceRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
