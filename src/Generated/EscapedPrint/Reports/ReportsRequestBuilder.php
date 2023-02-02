<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ApplicationSignInDetailedSummary\ApplicationSignInDetailedSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ApplicationSignInDetailedSummary\Item\ApplicationSignInDetailedSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\AuthenticationMethods\AuthenticationMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\CredentialUserRegistrationDetails\CredentialUserRegistrationDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\CredentialUserRegistrationDetails\Item\CredentialUserRegistrationDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsage\DailyPrintUsageRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsage\Item\PrintUsageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByPrinter\DailyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByUser\DailyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByPrinter\DailyPrintUsageSummariesByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByUser\DailyPrintUsageSummariesByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphDeviceConfigurationDeviceActivity\DeviceConfigurationDeviceActivityRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphDeviceConfigurationUserActivity\DeviceConfigurationUserActivityRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetAttackSimulationRepeatOffenders\GetAttackSimulationRepeatOffendersRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetAttackSimulationSimulationUserCoverage\GetAttackSimulationSimulationUserCoverageRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetAttackSimulationTrainingUserCoverage\GetAttackSimulationTrainingUserCoverageRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetAzureADApplicationSignInSummaryWithPeriod\GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetBrowserDistributionUserCountsWithPeriod\GetBrowserDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetBrowserUserCountsWithPeriod\GetBrowserUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetBrowserUserDetailWithPeriod\GetBrowserUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetCredentialUsageSummaryWithPeriod\GetCredentialUsageSummaryWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetCredentialUserRegistrationCount\GetCredentialUserRegistrationCountRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailActivityCountsWithPeriod\GetEmailActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailActivityUserCountsWithPeriod\GetEmailActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailActivityUserDetailWithDate\GetEmailActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailActivityUserDetailWithPeriod\GetEmailActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailAppUsageAppsUserCountsWithPeriod\GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailAppUsageUserCountsWithPeriod\GetEmailAppUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailAppUsageUserDetailWithDate\GetEmailAppUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailAppUsageUserDetailWithPeriod\GetEmailAppUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetEmailAppUsageVersionsUserCountsWithPeriod\GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetFormsUserActivityCountsWithPeriod\GetFormsUserActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetFormsUserActivityUserCountsWithPeriod\GetFormsUserActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetFormsUserActivityUserDetailWithDate\GetFormsUserActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetFormsUserActivityUserDetailWithPeriod\GetFormsUserActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetM365AppPlatformUserCountsWithPeriod\GetM365AppPlatformUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetM365AppUserCountsWithPeriod\GetM365AppUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetM365AppUserDetailWithDate\GetM365AppUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetM365AppUserDetailWithPeriod\GetM365AppUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetMailboxUsageDetailWithPeriod\GetMailboxUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetMailboxUsageMailboxCountsWithPeriod\GetMailboxUsageMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriod\GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetMailboxUsageStorageWithPeriod\GetMailboxUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365ActivationCounts\GetOffice365ActivationCountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365ActivationsUserCounts\GetOffice365ActivationsUserCountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365ActivationsUserDetail\GetOffice365ActivationsUserDetailRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365ActiveUserCountsWithPeriod\GetOffice365ActiveUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365ActiveUserDetailWithDate\GetOffice365ActiveUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365ActiveUserDetailWithPeriod\GetOffice365ActiveUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365GroupsActivityCountsWithPeriod\GetOffice365GroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365GroupsActivityDetailWithDate\GetOffice365GroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365GroupsActivityDetailWithPeriod\GetOffice365GroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365GroupsActivityFileCountsWithPeriod\GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365GroupsActivityGroupCountsWithPeriod\GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365GroupsActivityStorageWithPeriod\GetOffice365GroupsActivityStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOffice365ServicesUserCountsWithPeriod\GetOffice365ServicesUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveActivityFileCountsWithPeriod\GetOneDriveActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveActivityUserCountsWithPeriod\GetOneDriveActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveActivityUserDetailWithDate\GetOneDriveActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveActivityUserDetailWithPeriod\GetOneDriveActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveUsageAccountCountsWithPeriod\GetOneDriveUsageAccountCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveUsageAccountDetailWithDate\GetOneDriveUsageAccountDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveUsageAccountDetailWithPeriod\GetOneDriveUsageAccountDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveUsageFileCountsWithPeriod\GetOneDriveUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetOneDriveUsageStorageWithPeriod\GetOneDriveUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime\GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetRelyingPartyDetailedSummaryWithPeriod\GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointActivityFileCountsWithPeriod\GetSharePointActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointActivityPagesWithPeriod\GetSharePointActivityPagesWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointActivityUserCountsWithPeriod\GetSharePointActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointActivityUserDetailWithDate\GetSharePointActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointActivityUserDetailWithPeriod\GetSharePointActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointSiteUsageDetailWithDate\GetSharePointSiteUsageDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointSiteUsageDetailWithPeriod\GetSharePointSiteUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointSiteUsageFileCountsWithPeriod\GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointSiteUsagePagesWithPeriod\GetSharePointSiteUsagePagesWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointSiteUsageSiteCountsWithPeriod\GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSharePointSiteUsageStorageWithPeriod\GetSharePointSiteUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessActivityCountsWithPeriod\GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserCountsWithPeriod\GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithDate\GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessActivityUserDetailWithPeriod\GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDate\GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriod\GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriod\GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod\GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriod\GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriod\GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod\GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriod\GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsDeviceUsageDistributionTotalUserCountsWithPeriod\GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriod\GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsDeviceUsageTotalUserCountsWithPeriod\GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsDeviceUsageUserCountsWithPeriod\GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithDate\GetTeamsDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsDeviceUsageUserDetailWithPeriod\GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsTeamActivityCountsWithPeriod\GetTeamsTeamActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsTeamActivityDetailWithDate\GetTeamsTeamActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsTeamActivityDetailWithPeriod\GetTeamsTeamActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsTeamActivityDistributionCountsWithPeriod\GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsTeamCountsWithPeriod\GetTeamsTeamCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityCountsWithPeriod\GetTeamsUserActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityDistributionTotalUserCountsWithPeriod\GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityDistributionUserCountsWithPeriod\GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityTotalCountsWithPeriod\GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityTotalDistributionCountsWithPeriod\GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityTotalUserCountsWithPeriod\GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityUserCountsWithPeriod\GetTeamsUserActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityUserDetailWithDate\GetTeamsUserActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetTeamsUserActivityUserDetailWithPeriod\GetTeamsUserActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerActivityCountsWithPeriod\GetYammerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerActivityUserCountsWithPeriod\GetYammerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerActivityUserDetailWithDate\GetYammerActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerActivityUserDetailWithPeriod\GetYammerActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriod\GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerDeviceUsageUserCountsWithPeriod\GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerDeviceUsageUserDetailWithDate\GetYammerDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerDeviceUsageUserDetailWithPeriod\GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerGroupsActivityCountsWithPeriod\GetYammerGroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerGroupsActivityDetailWithDate\GetYammerGroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerGroupsActivityDetailWithPeriod\GetYammerGroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphGetYammerGroupsActivityGroupCountsWithPeriod\GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphManagedDeviceEnrollmentFailureDetails\ManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphManagedDeviceEnrollmentFailureTrends\ManagedDeviceEnrollmentFailureTrendsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphManagedDeviceEnrollmentTopFailures\ManagedDeviceEnrollmentTopFailuresRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MicrosoftGraphManagedDeviceEnrollmentTopFailuresWithPeriod\ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByPrinter\MonthlyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByUser\MonthlyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByPrinter\MonthlyPrintUsageSummariesByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByUser\MonthlyPrintUsageSummariesByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\Security\SecurityRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\UserCredentialUsageDetails\Item\UserCredentialUsageDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\UserCredentialUsageDetails\UserCredentialUsageDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ReportRoot;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Provides operations to manage the reports property of the microsoft.graph.print entity.
*/
class ReportsRequestBuilder 
{
    /**
     * Provides operations to manage the applicationSignInDetailedSummary property of the microsoft.graph.reportRoot entity.
    */
    public function applicationSignInDetailedSummary(): ApplicationSignInDetailedSummaryRequestBuilder {
        return new ApplicationSignInDetailedSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationMethods property of the microsoft.graph.reportRoot entity.
    */
    public function authenticationMethods(): AuthenticationMethodsRequestBuilder {
        return new AuthenticationMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the credentialUserRegistrationDetails property of the microsoft.graph.reportRoot entity.
    */
    public function credentialUserRegistrationDetails(): CredentialUserRegistrationDetailsRequestBuilder {
        return new CredentialUserRegistrationDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsage property of the microsoft.graph.reportRoot entity.
    */
    public function dailyPrintUsage(): DailyPrintUsageRequestBuilder {
        return new DailyPrintUsageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
    */
    public function dailyPrintUsageByPrinter(): DailyPrintUsageByPrinterRequestBuilder {
        return new DailyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
    */
    public function dailyPrintUsageByUser(): DailyPrintUsageByUserRequestBuilder {
        return new DailyPrintUsageByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsageSummariesByPrinter property of the microsoft.graph.reportRoot entity.
    */
    public function dailyPrintUsageSummariesByPrinter(): DailyPrintUsageSummariesByPrinterRequestBuilder {
        return new DailyPrintUsageSummariesByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsageSummariesByUser property of the microsoft.graph.reportRoot entity.
    */
    public function dailyPrintUsageSummariesByUser(): DailyPrintUsageSummariesByUserRequestBuilder {
        return new DailyPrintUsageSummariesByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deviceConfigurationDeviceActivity method.
    */
    public function microsoftGraphDeviceConfigurationDeviceActivity(): DeviceConfigurationDeviceActivityRequestBuilder {
        return new DeviceConfigurationDeviceActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deviceConfigurationUserActivity method.
    */
    public function microsoftGraphDeviceConfigurationUserActivity(): DeviceConfigurationUserActivityRequestBuilder {
        return new DeviceConfigurationUserActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAttackSimulationRepeatOffenders method.
    */
    public function microsoftGraphGetAttackSimulationRepeatOffenders(): GetAttackSimulationRepeatOffendersRequestBuilder {
        return new GetAttackSimulationRepeatOffendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAttackSimulationSimulationUserCoverage method.
    */
    public function microsoftGraphGetAttackSimulationSimulationUserCoverage(): GetAttackSimulationSimulationUserCoverageRequestBuilder {
        return new GetAttackSimulationSimulationUserCoverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAttackSimulationTrainingUserCoverage method.
    */
    public function microsoftGraphGetAttackSimulationTrainingUserCoverage(): GetAttackSimulationTrainingUserCoverageRequestBuilder {
        return new GetAttackSimulationTrainingUserCoverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCredentialUserRegistrationCount method.
    */
    public function microsoftGraphGetCredentialUserRegistrationCount(): GetCredentialUserRegistrationCountRequestBuilder {
        return new GetCredentialUserRegistrationCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationCounts method.
    */
    public function microsoftGraphGetOffice365ActivationCounts(): GetOffice365ActivationCountsRequestBuilder {
        return new GetOffice365ActivationCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationsUserCounts method.
    */
    public function microsoftGraphGetOffice365ActivationsUserCounts(): GetOffice365ActivationsUserCountsRequestBuilder {
        return new GetOffice365ActivationsUserCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOffice365ActivationsUserDetail method.
    */
    public function microsoftGraphGetOffice365ActivationsUserDetail(): GetOffice365ActivationsUserDetailRequestBuilder {
        return new GetOffice365ActivationsUserDetailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
    */
    public function microsoftGraphManagedDeviceEnrollmentFailureDetails(): ManagedDeviceEnrollmentFailureDetailsRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the managedDeviceEnrollmentFailureTrends method.
    */
    public function microsoftGraphManagedDeviceEnrollmentFailureTrends(): ManagedDeviceEnrollmentFailureTrendsRequestBuilder {
        return new ManagedDeviceEnrollmentFailureTrendsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
    */
    public function microsoftGraphManagedDeviceEnrollmentTopFailures(): ManagedDeviceEnrollmentTopFailuresRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monthlyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
    */
    public function monthlyPrintUsageByPrinter(): MonthlyPrintUsageByPrinterRequestBuilder {
        return new MonthlyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monthlyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
    */
    public function monthlyPrintUsageByUser(): MonthlyPrintUsageByUserRequestBuilder {
        return new MonthlyPrintUsageByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monthlyPrintUsageSummariesByPrinter property of the microsoft.graph.reportRoot entity.
    */
    public function monthlyPrintUsageSummariesByPrinter(): MonthlyPrintUsageSummariesByPrinterRequestBuilder {
        return new MonthlyPrintUsageSummariesByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monthlyPrintUsageSummariesByUser property of the microsoft.graph.reportRoot entity.
    */
    public function monthlyPrintUsageSummariesByUser(): MonthlyPrintUsageSummariesByUserRequestBuilder {
        return new MonthlyPrintUsageSummariesByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the security property of the microsoft.graph.reportRoot entity.
    */
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the userCredentialUsageDetails property of the microsoft.graph.reportRoot entity.
    */
    public function userCredentialUsageDetails(): UserCredentialUsageDetailsRequestBuilder {
        return new UserCredentialUsageDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the applicationSignInDetailedSummary property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return ApplicationSignInDetailedSummaryItemRequestBuilder
    */
    public function applicationSignInDetailedSummaryById(string $id): ApplicationSignInDetailedSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicationSignInDetailedSummary%2Did'] = $id;
        return new ApplicationSignInDetailedSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/print/reports{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Provides operations to manage the credentialUserRegistrationDetails property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return CredentialUserRegistrationDetailsItemRequestBuilder
    */
    public function credentialUserRegistrationDetailsById(string $id): CredentialUserRegistrationDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credentialUserRegistrationDetails%2Did'] = $id;
        return new CredentialUserRegistrationDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the dailyPrintUsage property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return PrintUsageItemRequestBuilder
    */
    public function dailyPrintUsageById(string $id): PrintUsageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsage%2Did'] = $id;
        return new PrintUsageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the dailyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageByPrinterById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the dailyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageByUserById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the dailyPrintUsageSummariesByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageSummariesByPrinterById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the dailyPrintUsageSummariesByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageSummariesByUserById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property reports for print
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get reports from print
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ReportRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getAzureADApplicationSignInSummary method.
     * @param string $period Usage: period='{period}'
     * @return GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder
    */
    public function microsoftGraphGetAzureADApplicationSignInSummaryWithPeriod(string $period): GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder {
        return new GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getBrowserDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetBrowserDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetBrowserDistributionUserCountsWithPeriod(string $period): GetBrowserDistributionUserCountsWithPeriodRequestBuilder {
        return new GetBrowserDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getBrowserUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetBrowserUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetBrowserUserCountsWithPeriod(string $period): GetBrowserUserCountsWithPeriodRequestBuilder {
        return new GetBrowserUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getBrowserUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetBrowserUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetBrowserUserDetailWithPeriod(string $period): GetBrowserUserDetailWithPeriodRequestBuilder {
        return new GetBrowserUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getCredentialUsageSummary method.
     * @param string $period Usage: period='{period}'
     * @return GetCredentialUsageSummaryWithPeriodRequestBuilder
    */
    public function microsoftGraphGetCredentialUsageSummaryWithPeriod(string $period): GetCredentialUsageSummaryWithPeriodRequestBuilder {
        return new GetCredentialUsageSummaryWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityCountsWithPeriod(string $period): GetEmailActivityCountsWithPeriodRequestBuilder {
        return new GetEmailActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserCountsWithPeriod(string $period): GetEmailActivityUserCountsWithPeriodRequestBuilder {
        return new GetEmailActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserDetailWithDate(Date $date): GetEmailActivityUserDetailWithDateRequestBuilder {
        return new GetEmailActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailActivityUserDetailWithPeriod(string $period): GetEmailActivityUserDetailWithPeriodRequestBuilder {
        return new GetEmailActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageAppsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageAppsUserCountsWithPeriod(string $period): GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserCountsWithPeriod(string $period): GetEmailAppUsageUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailAppUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserDetailWithDate(Date $date): GetEmailAppUsageUserDetailWithDateRequestBuilder {
        return new GetEmailAppUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageUserDetailWithPeriod(string $period): GetEmailAppUsageUserDetailWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageVersionsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetEmailAppUsageVersionsUserCountsWithPeriod(string $period): GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getFormsUserActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetFormsUserActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetFormsUserActivityCountsWithPeriod(string $period): GetFormsUserActivityCountsWithPeriodRequestBuilder {
        return new GetFormsUserActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getFormsUserActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetFormsUserActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetFormsUserActivityUserCountsWithPeriod(string $period): GetFormsUserActivityUserCountsWithPeriodRequestBuilder {
        return new GetFormsUserActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getFormsUserActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetFormsUserActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetFormsUserActivityUserDetailWithDate(Date $date): GetFormsUserActivityUserDetailWithDateRequestBuilder {
        return new GetFormsUserActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getFormsUserActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetFormsUserActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetFormsUserActivityUserDetailWithPeriod(string $period): GetFormsUserActivityUserDetailWithPeriodRequestBuilder {
        return new GetFormsUserActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getGroupArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $groupId Usage: groupId='{groupId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $groupId, DateTime $startDateTime): GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $groupId, $startDateTime);
    }

    /**
     * Provides operations to call the getM365AppPlatformUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppPlatformUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppPlatformUserCountsWithPeriod(string $period): GetM365AppPlatformUserCountsWithPeriodRequestBuilder {
        return new GetM365AppPlatformUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppUserCountsWithPeriod(string $period): GetM365AppUserCountsWithPeriodRequestBuilder {
        return new GetM365AppUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetM365AppUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetM365AppUserDetailWithDate(Date $date): GetM365AppUserDetailWithDateRequestBuilder {
        return new GetM365AppUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetM365AppUserDetailWithPeriod(string $period): GetM365AppUserDetailWithPeriodRequestBuilder {
        return new GetM365AppUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageDetailWithPeriod(string $period): GetMailboxUsageDetailWithPeriodRequestBuilder {
        return new GetMailboxUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageMailboxCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageMailboxCountsWithPeriod(string $period): GetMailboxUsageMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageQuotaStatusMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageQuotaStatusMailboxCountsWithPeriod(string $period): GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetMailboxUsageStorageWithPeriod(string $period): GetMailboxUsageStorageWithPeriodRequestBuilder {
        return new GetMailboxUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserCountsWithPeriod(string $period): GetOffice365ActiveUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365ActiveUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserDetailWithDate(Date $date): GetOffice365ActiveUserDetailWithDateRequestBuilder {
        return new GetOffice365ActiveUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ActiveUserDetailWithPeriod(string $period): GetOffice365ActiveUserDetailWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityCountsWithPeriod(string $period): GetOffice365GroupsActivityCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365GroupsActivityDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityDetailWithDate(Date $date): GetOffice365GroupsActivityDetailWithDateRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityDetailWithPeriod(string $period): GetOffice365GroupsActivityDetailWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityFileCountsWithPeriod(string $period): GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityGroupCountsWithPeriod(string $period): GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365GroupsActivityStorageWithPeriod(string $period): GetOffice365GroupsActivityStorageWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ServicesUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ServicesUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOffice365ServicesUserCountsWithPeriod(string $period): GetOffice365ServicesUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ServicesUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityFileCountsWithPeriod(string $period): GetOneDriveActivityFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserCountsWithPeriod(string $period): GetOneDriveActivityUserCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserDetailWithDate(Date $date): GetOneDriveActivityUserDetailWithDateRequestBuilder {
        return new GetOneDriveActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveActivityUserDetailWithPeriod(string $period): GetOneDriveActivityUserDetailWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountCountsWithPeriod(string $period): GetOneDriveUsageAccountCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveUsageAccountDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountDetailWithDate(Date $date): GetOneDriveUsageAccountDetailWithDateRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageAccountDetailWithPeriod(string $period): GetOneDriveUsageAccountDetailWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageFileCountsWithPeriod(string $period): GetOneDriveUsageFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetOneDriveUsageStorageWithPeriod(string $period): GetOneDriveUsageStorageWithPeriodRequestBuilder {
        return new GetOneDriveUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getPrinterArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param string $printerId Usage: printerId='{printerId}'
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $printerId, DateTime $startDateTime): GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $printerId, $startDateTime);
    }

    /**
     * Provides operations to call the getRelyingPartyDetailedSummary method.
     * @param string $period Usage: period='{period}'
     * @return GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder
    */
    public function microsoftGraphGetRelyingPartyDetailedSummaryWithPeriod(string $period): GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder {
        return new GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityFileCountsWithPeriod(string $period): GetSharePointActivityFileCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityPages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityPagesWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityPagesWithPeriod(string $period): GetSharePointActivityPagesWithPeriodRequestBuilder {
        return new GetSharePointActivityPagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserCountsWithPeriod(string $period): GetSharePointActivityUserCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserDetailWithDate(Date $date): GetSharePointActivityUserDetailWithDateRequestBuilder {
        return new GetSharePointActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointActivityUserDetailWithPeriod(string $period): GetSharePointActivityUserDetailWithPeriodRequestBuilder {
        return new GetSharePointActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointSiteUsageDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageDetailWithDate(Date $date): GetSharePointSiteUsageDetailWithDateRequestBuilder {
        return new GetSharePointSiteUsageDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageDetailWithPeriod(string $period): GetSharePointSiteUsageDetailWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageFileCountsWithPeriod(string $period): GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsagePages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsagePagesWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsagePagesWithPeriod(string $period): GetSharePointSiteUsagePagesWithPeriodRequestBuilder {
        return new GetSharePointSiteUsagePagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageSiteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageSiteCountsWithPeriod(string $period): GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageStorageWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSharePointSiteUsageStorageWithPeriod(string $period): GetSharePointSiteUsageStorageWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityCountsWithPeriod(string $period): GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserDetailWithDate(Date $date): GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessActivityUserDetailWithPeriod(string $period): GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithDate(Date $date): GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessDeviceUsageUserDetailWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessOrganizerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessParticipantActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageDistributionTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageDistributionTotalUserCountsWithPeriod(string $period): GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageDistributionUserCountsWithPeriod(string $period): GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageTotalUserCountsWithPeriod(string $period): GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserCountsWithPeriod(string $period): GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserDetailWithDate(Date $date): GetTeamsDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsDeviceUsageUserDetailWithPeriod(string $period): GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsTeamActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsTeamActivityCountsWithPeriod(string $period): GetTeamsTeamActivityCountsWithPeriodRequestBuilder {
        return new GetTeamsTeamActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsTeamActivityDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetTeamsTeamActivityDetailWithDate(Date $date): GetTeamsTeamActivityDetailWithDateRequestBuilder {
        return new GetTeamsTeamActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsTeamActivityDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsTeamActivityDetailWithPeriod(string $period): GetTeamsTeamActivityDetailWithPeriodRequestBuilder {
        return new GetTeamsTeamActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityDistributionCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsTeamActivityDistributionCountsWithPeriod(string $period): GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder {
        return new GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsTeamCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsTeamCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsTeamCountsWithPeriod(string $period): GetTeamsTeamCountsWithPeriodRequestBuilder {
        return new GetTeamsTeamCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityCountsWithPeriod(string $period): GetTeamsUserActivityCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityDistributionTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityDistributionTotalUserCountsWithPeriod(string $period): GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityDistributionUserCountsWithPeriod(string $period): GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityTotalCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityTotalCountsWithPeriod(string $period): GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityTotalDistributionCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityTotalDistributionCountsWithPeriod(string $period): GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityTotalUserCountsWithPeriod(string $period): GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserCountsWithPeriod(string $period): GetTeamsUserActivityUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsUserActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserDetailWithDate(Date $date): GetTeamsUserActivityUserDetailWithDateRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetTeamsUserActivityUserDetailWithPeriod(string $period): GetTeamsUserActivityUserDetailWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getUserArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @param string $userId Usage: userId='{userId}'
     * @return GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function microsoftGraphGetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime, string $userId): GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime, $userId);
    }

    /**
     * Provides operations to call the getYammerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityCountsWithPeriod(string $period): GetYammerActivityCountsWithPeriodRequestBuilder {
        return new GetYammerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserCountsWithPeriod(string $period): GetYammerActivityUserCountsWithPeriodRequestBuilder {
        return new GetYammerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerActivityUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserDetailWithDate(Date $date): GetYammerActivityUserDetailWithDateRequestBuilder {
        return new GetYammerActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerActivityUserDetailWithPeriod(string $period): GetYammerActivityUserDetailWithPeriodRequestBuilder {
        return new GetYammerActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageDistributionUserCountsWithPeriod(string $period): GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserCountsWithPeriod(string $period): GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserDetailWithDate(Date $date): GetYammerDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerDeviceUsageUserDetailWithPeriod(string $period): GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityCountsWithPeriod(string $period): GetYammerGroupsActivityCountsWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerGroupsActivityDetailWithDateRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityDetailWithDate(Date $date): GetYammerGroupsActivityDetailWithDateRequestBuilder {
        return new GetYammerGroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityDetailWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityDetailWithPeriod(string $period): GetYammerGroupsActivityDetailWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function microsoftGraphGetYammerGroupsActivityGroupCountsWithPeriod(string $period): GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentAbandonmentDetails method.
     * @param string $filter Usage: filter='{filter}'
     * @param int $skip Usage: skip={skip}
     * @param string $skipToken Usage: skipToken='{skipToken}'
     * @param int $top Usage: top={top}
     * @return ManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new ManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentAbandonmentSummary method.
     * @param string $filter Usage: filter='{filter}'
     * @param int $skip Usage: skip={skip}
     * @param string $skipToken Usage: skipToken='{skipToken}'
     * @param int $top Usage: top={top}
     * @return ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
     * @param string $filter Usage: filter='{filter}'
     * @param int $skip Usage: skip={skip}
     * @param string $skipToken Usage: skipToken='{skipToken}'
     * @param int $top Usage: top={top}
     * @return ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
     * @param string $period Usage: period='{period}'
     * @return ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder
    */
    public function microsoftGraphManagedDeviceEnrollmentTopFailuresWithPeriod(string $period): ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageByPrinterById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageByUserById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageSummariesByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageSummariesByPrinterById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the monthlyPrintUsageSummariesByUser property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageSummariesByUserById(string $id): \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property reports in print
     * @param ReportRoot $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ReportRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property reports for print
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get reports from print
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property reports in print
     * @param ReportRoot $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the userCredentialUsageDetails property of the microsoft.graph.reportRoot entity.
     * @param string $id Unique identifier of the item
     * @return UserCredentialUsageDetailsItemRequestBuilder
    */
    public function userCredentialUsageDetailsById(string $id): UserCredentialUsageDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userCredentialUsageDetails%2Did'] = $id;
        return new UserCredentialUsageDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
