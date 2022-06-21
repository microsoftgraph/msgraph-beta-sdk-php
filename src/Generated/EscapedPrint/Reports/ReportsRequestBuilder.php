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
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByPrinter\DailyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByUser\DailyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByPrinter\DailyPrintUsageSummariesByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByUser\DailyPrintUsageSummariesByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DailyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DeviceConfigurationDeviceActivity\DeviceConfigurationDeviceActivityRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\DeviceConfigurationUserActivity\DeviceConfigurationUserActivityRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetAttackSimulationRepeatOffenders\GetAttackSimulationRepeatOffendersRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetAttackSimulationSimulationUserCoverage\GetAttackSimulationSimulationUserCoverageRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetAttackSimulationTrainingUserCoverage\GetAttackSimulationTrainingUserCoverageRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetAzureADApplicationSignInSummaryWithPeriod\GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetAzureADFeatureUsageWithPeriod\GetAzureADFeatureUsageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetAzureADLicenseUsageWithPeriod\GetAzureADLicenseUsageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetAzureADUserFeatureUsage\GetAzureADUserFeatureUsageRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetBrowserDistributionUserCountsWithPeriod\GetBrowserDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetBrowserUserCountsWithPeriod\GetBrowserUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetBrowserUserDetailWithPeriod\GetBrowserUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetCredentialUsageSummaryWithPeriod\GetCredentialUsageSummaryWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetCredentialUserRegistrationCount\GetCredentialUserRegistrationCountRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailActivityCountsWithPeriod\GetEmailActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailActivityUserCountsWithPeriod\GetEmailActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailActivityUserDetailWithDate\GetEmailActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailActivityUserDetailWithPeriod\GetEmailActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailAppUsageAppsUserCountsWithPeriod\GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailAppUsageUserCountsWithPeriod\GetEmailAppUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailAppUsageUserDetailWithDate\GetEmailAppUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailAppUsageUserDetailWithPeriod\GetEmailAppUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetEmailAppUsageVersionsUserCountsWithPeriod\GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime\GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetM365AppPlatformUserCountsWithPeriod\GetM365AppPlatformUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetM365AppUserCountsWithPeriod\GetM365AppUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetM365AppUserDetailWithDate\GetM365AppUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetM365AppUserDetailWithPeriod\GetM365AppUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetMailboxUsageDetailWithPeriod\GetMailboxUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetMailboxUsageMailboxCountsWithPeriod\GetMailboxUsageMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetMailboxUsageQuotaStatusMailboxCountsWithPeriod\GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetMailboxUsageStorageWithPeriod\GetMailboxUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365ActivationCounts\GetOffice365ActivationCountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365ActivationsUserCounts\GetOffice365ActivationsUserCountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365ActivationsUserDetail\GetOffice365ActivationsUserDetailRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365ActiveUserCountsWithPeriod\GetOffice365ActiveUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365ActiveUserDetailWithDate\GetOffice365ActiveUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365ActiveUserDetailWithPeriod\GetOffice365ActiveUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityCountsWithPeriod\GetOffice365GroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityDetailWithDate\GetOffice365GroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityDetailWithPeriod\GetOffice365GroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityFileCountsWithPeriod\GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityGroupCountsWithPeriod\GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityStorageWithPeriod\GetOffice365GroupsActivityStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365ServicesUserCountsWithPeriod\GetOffice365ServicesUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveActivityFileCountsWithPeriod\GetOneDriveActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveActivityUserCountsWithPeriod\GetOneDriveActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveActivityUserDetailWithDate\GetOneDriveActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveActivityUserDetailWithPeriod\GetOneDriveActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveUsageAccountCountsWithPeriod\GetOneDriveUsageAccountCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveUsageAccountDetailWithDate\GetOneDriveUsageAccountDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveUsageAccountDetailWithPeriod\GetOneDriveUsageAccountDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveUsageFileCountsWithPeriod\GetOneDriveUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOneDriveUsageStorageWithPeriod\GetOneDriveUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime\GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetRelyingPartyDetailedSummaryWithPeriod\GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointActivityFileCountsWithPeriod\GetSharePointActivityFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointActivityPagesWithPeriod\GetSharePointActivityPagesWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointActivityUserCountsWithPeriod\GetSharePointActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointActivityUserDetailWithDate\GetSharePointActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointActivityUserDetailWithPeriod\GetSharePointActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointSiteUsageDetailWithDate\GetSharePointSiteUsageDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointSiteUsageDetailWithPeriod\GetSharePointSiteUsageDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointSiteUsageFileCountsWithPeriod\GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointSiteUsagePagesWithPeriod\GetSharePointSiteUsagePagesWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointSiteUsageSiteCountsWithPeriod\GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSharePointSiteUsageStorageWithPeriod\GetSharePointSiteUsageStorageWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessActivityCountsWithPeriod\GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessActivityUserCountsWithPeriod\GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessActivityUserDetailWithDate\GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessActivityUserDetailWithPeriod\GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessDeviceUsageUserCountsWithPeriod\GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessDeviceUsageUserDetailWithDate\GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessDeviceUsageUserDetailWithPeriod\GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessOrganizerActivityCountsWithPeriod\GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod\GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessOrganizerActivityUserCountsWithPeriod\GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessParticipantActivityCountsWithPeriod\GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriod\GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessParticipantActivityUserCountsWithPeriod\GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessPeerToPeerActivityCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod\GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriod\GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsDeviceUsageDistributionUserCountsWithPeriod\GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsDeviceUsageTotalUserCountsWithPeriod\GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsDeviceUsageUserCountsWithPeriod\GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsDeviceUsageUserDetailWithDate\GetTeamsDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsDeviceUsageUserDetailWithPeriod\GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsTeamActivityCountsWithPeriod\GetTeamsTeamActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsTeamActivityDetailWithDate\GetTeamsTeamActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsTeamActivityDetailWithPeriod\GetTeamsTeamActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsTeamActivityDistributionCountsWithPeriod\GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityCountsWithPeriod\GetTeamsUserActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityDistributionTotalUserCountsWithPeriod\GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityDistributionUserCountsWithPeriod\GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityTotalCountsWithPeriod\GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityTotalDistributionCountsWithPeriod\GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityTotalUserCountsWithPeriod\GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityUserCountsWithPeriod\GetTeamsUserActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityUserDetailWithDate\GetTeamsUserActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetTeamsUserActivityUserDetailWithPeriod\GetTeamsUserActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime\GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerActivityCountsWithPeriod\GetYammerActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerActivityUserCountsWithPeriod\GetYammerActivityUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerActivityUserDetailWithDate\GetYammerActivityUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerActivityUserDetailWithPeriod\GetYammerActivityUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerDeviceUsageDistributionUserCountsWithPeriod\GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerDeviceUsageUserCountsWithPeriod\GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerDeviceUsageUserDetailWithDate\GetYammerDeviceUsageUserDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerDeviceUsageUserDetailWithPeriod\GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerGroupsActivityCountsWithPeriod\GetYammerGroupsActivityCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerGroupsActivityDetailWithDate\GetYammerGroupsActivityDetailWithDateRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerGroupsActivityDetailWithPeriod\GetYammerGroupsActivityDetailWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetYammerGroupsActivityGroupCountsWithPeriod\GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ManagedDeviceEnrollmentFailureDetails\ManagedDeviceEnrollmentFailureDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken\ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ManagedDeviceEnrollmentFailureTrends\ManagedDeviceEnrollmentFailureTrendsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ManagedDeviceEnrollmentTopFailures\ManagedDeviceEnrollmentTopFailuresRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ManagedDeviceEnrollmentTopFailuresWithPeriod\ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByPrinter\Item\PrintUsageByPrinterItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByPrinter\MonthlyPrintUsageByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageByUser\MonthlyPrintUsageByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByPrinter\MonthlyPrintUsageSummariesByPrinterRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByUser\Item\PrintUsageByUserItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByUser\MonthlyPrintUsageSummariesByUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\UserCredentialUsageDetails\Item\UserCredentialUsageDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\UserCredentialUsageDetails\UserCredentialUsageDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ReportRoot;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Microsoft\Kiota\Abstractions\Types\Date;

class ReportsRequestBuilder 
{
    /**
     * The applicationSignInDetailedSummary property
    */
    public function applicationSignInDetailedSummary(): ApplicationSignInDetailedSummaryRequestBuilder {
        return new ApplicationSignInDetailedSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The authenticationMethods property
    */
    public function authenticationMethods(): AuthenticationMethodsRequestBuilder {
        return new AuthenticationMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The credentialUserRegistrationDetails property
    */
    public function credentialUserRegistrationDetails(): CredentialUserRegistrationDetailsRequestBuilder {
        return new CredentialUserRegistrationDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dailyPrintUsageByPrinter property
    */
    public function dailyPrintUsageByPrinter(): DailyPrintUsageByPrinterRequestBuilder {
        return new DailyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dailyPrintUsageByUser property
    */
    public function dailyPrintUsageByUser(): DailyPrintUsageByUserRequestBuilder {
        return new DailyPrintUsageByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dailyPrintUsageSummariesByPrinter property
    */
    public function dailyPrintUsageSummariesByPrinter(): DailyPrintUsageSummariesByPrinterRequestBuilder {
        return new DailyPrintUsageSummariesByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dailyPrintUsageSummariesByUser property
    */
    public function dailyPrintUsageSummariesByUser(): DailyPrintUsageSummariesByUserRequestBuilder {
        return new DailyPrintUsageSummariesByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The monthlyPrintUsageByPrinter property
    */
    public function monthlyPrintUsageByPrinter(): MonthlyPrintUsageByPrinterRequestBuilder {
        return new MonthlyPrintUsageByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The monthlyPrintUsageByUser property
    */
    public function monthlyPrintUsageByUser(): MonthlyPrintUsageByUserRequestBuilder {
        return new MonthlyPrintUsageByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The monthlyPrintUsageSummariesByPrinter property
    */
    public function monthlyPrintUsageSummariesByPrinter(): MonthlyPrintUsageSummariesByPrinterRequestBuilder {
        return new MonthlyPrintUsageSummariesByPrinterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The monthlyPrintUsageSummariesByUser property
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The userCredentialUsageDetails property
    */
    public function userCredentialUsageDetails(): UserCredentialUsageDetailsRequestBuilder {
        return new UserCredentialUsageDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.applicationSignInDetailedSummary.item collection
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
     * Delete navigation property reports for print
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get reports from print
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property reports in print
     * @param ReportRoot $body 
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.credentialUserRegistrationDetails.item collection
     * @param string $id Unique identifier of the item
     * @return CredentialUserRegistrationDetailsItemRequestBuilder
    */
    public function credentialUserRegistrationDetailsById(string $id): CredentialUserRegistrationDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credentialUserRegistrationDetails%2Did'] = $id;
        return new CredentialUserRegistrationDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageSummariesByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageSummariesByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageSummariesByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageSummariesByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property reports for print
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the deviceConfigurationDeviceActivity method.
     * @return DeviceConfigurationDeviceActivityRequestBuilder
    */
    public function deviceConfigurationDeviceActivity(): DeviceConfigurationDeviceActivityRequestBuilder {
        return new DeviceConfigurationDeviceActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the deviceConfigurationUserActivity method.
     * @return DeviceConfigurationUserActivityRequestBuilder
    */
    public function deviceConfigurationUserActivity(): DeviceConfigurationUserActivityRequestBuilder {
        return new DeviceConfigurationUserActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Get reports from print
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ReportRoot::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getAttackSimulationRepeatOffenders method.
     * @return GetAttackSimulationRepeatOffendersRequestBuilder
    */
    public function getAttackSimulationRepeatOffenders(): GetAttackSimulationRepeatOffendersRequestBuilder {
        return new GetAttackSimulationRepeatOffendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getAttackSimulationSimulationUserCoverage method.
     * @return GetAttackSimulationSimulationUserCoverageRequestBuilder
    */
    public function getAttackSimulationSimulationUserCoverage(): GetAttackSimulationSimulationUserCoverageRequestBuilder {
        return new GetAttackSimulationSimulationUserCoverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getAttackSimulationTrainingUserCoverage method.
     * @return GetAttackSimulationTrainingUserCoverageRequestBuilder
    */
    public function getAttackSimulationTrainingUserCoverage(): GetAttackSimulationTrainingUserCoverageRequestBuilder {
        return new GetAttackSimulationTrainingUserCoverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getAzureADApplicationSignInSummary method.
     * @param string $period Usage: period='{period}'
     * @return GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder
    */
    public function getAzureADApplicationSignInSummaryWithPeriod(string $period): GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder {
        return new GetAzureADApplicationSignInSummaryWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getAzureADFeatureUsage method.
     * @param string $period Usage: period='{period}'
     * @return GetAzureADFeatureUsageWithPeriodRequestBuilder
    */
    public function getAzureADFeatureUsageWithPeriod(string $period): GetAzureADFeatureUsageWithPeriodRequestBuilder {
        return new GetAzureADFeatureUsageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getAzureADLicenseUsage method.
     * @param string $period Usage: period='{period}'
     * @return GetAzureADLicenseUsageWithPeriodRequestBuilder
    */
    public function getAzureADLicenseUsageWithPeriod(string $period): GetAzureADLicenseUsageWithPeriodRequestBuilder {
        return new GetAzureADLicenseUsageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getAzureADUserFeatureUsage method.
     * @return GetAzureADUserFeatureUsageRequestBuilder
    */
    public function getAzureADUserFeatureUsage(): GetAzureADUserFeatureUsageRequestBuilder {
        return new GetAzureADUserFeatureUsageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getBrowserDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetBrowserDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getBrowserDistributionUserCountsWithPeriod(string $period): GetBrowserDistributionUserCountsWithPeriodRequestBuilder {
        return new GetBrowserDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getBrowserUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetBrowserUserCountsWithPeriodRequestBuilder
    */
    public function getBrowserUserCountsWithPeriod(string $period): GetBrowserUserCountsWithPeriodRequestBuilder {
        return new GetBrowserUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getBrowserUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetBrowserUserDetailWithPeriodRequestBuilder
    */
    public function getBrowserUserDetailWithPeriod(string $period): GetBrowserUserDetailWithPeriodRequestBuilder {
        return new GetBrowserUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getCredentialUsageSummary method.
     * @param string $period Usage: period='{period}'
     * @return GetCredentialUsageSummaryWithPeriodRequestBuilder
    */
    public function getCredentialUsageSummaryWithPeriod(string $period): GetCredentialUsageSummaryWithPeriodRequestBuilder {
        return new GetCredentialUsageSummaryWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getCredentialUserRegistrationCount method.
     * @return GetCredentialUserRegistrationCountRequestBuilder
    */
    public function getCredentialUserRegistrationCount(): GetCredentialUserRegistrationCountRequestBuilder {
        return new GetCredentialUserRegistrationCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getEmailActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityCountsWithPeriodRequestBuilder
    */
    public function getEmailActivityCountsWithPeriod(string $period): GetEmailActivityCountsWithPeriodRequestBuilder {
        return new GetEmailActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserCountsWithPeriodRequestBuilder
    */
    public function getEmailActivityUserCountsWithPeriod(string $period): GetEmailActivityUserCountsWithPeriodRequestBuilder {
        return new GetEmailActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailActivityUserDetailWithDateRequestBuilder
    */
    public function getEmailActivityUserDetailWithDate(Date $date): GetEmailActivityUserDetailWithDateRequestBuilder {
        return new GetEmailActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailActivityUserDetailWithPeriodRequestBuilder
    */
    public function getEmailActivityUserDetailWithPeriod(string $period): GetEmailActivityUserDetailWithPeriodRequestBuilder {
        return new GetEmailActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageAppsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder
    */
    public function getEmailAppUsageAppsUserCountsWithPeriod(string $period): GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageAppsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserCountsWithPeriodRequestBuilder
    */
    public function getEmailAppUsageUserCountsWithPeriod(string $period): GetEmailAppUsageUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetEmailAppUsageUserDetailWithDateRequestBuilder
    */
    public function getEmailAppUsageUserDetailWithDate(Date $date): GetEmailAppUsageUserDetailWithDateRequestBuilder {
        return new GetEmailAppUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getEmailAppUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageUserDetailWithPeriodRequestBuilder
    */
    public function getEmailAppUsageUserDetailWithPeriod(string $period): GetEmailAppUsageUserDetailWithPeriodRequestBuilder {
        return new GetEmailAppUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getEmailAppUsageVersionsUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder
    */
    public function getEmailAppUsageVersionsUserCountsWithPeriod(string $period): GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder {
        return new GetEmailAppUsageVersionsUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getGroupArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime='{endDateTime}'
     * @param string $groupId Usage: groupId='{groupId}'
     * @param DateTime $startDateTime Usage: startDateTime='{startDateTime}'
     * @return GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function getGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $groupId, DateTime $startDateTime): GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetGroupArchivedPrintJobsWithGroupIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $groupId, $startDateTime);
    }

    /**
     * Provides operations to call the getM365AppPlatformUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppPlatformUserCountsWithPeriodRequestBuilder
    */
    public function getM365AppPlatformUserCountsWithPeriod(string $period): GetM365AppPlatformUserCountsWithPeriodRequestBuilder {
        return new GetM365AppPlatformUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserCountsWithPeriodRequestBuilder
    */
    public function getM365AppUserCountsWithPeriod(string $period): GetM365AppUserCountsWithPeriodRequestBuilder {
        return new GetM365AppUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetM365AppUserDetailWithDateRequestBuilder
    */
    public function getM365AppUserDetailWithDate(Date $date): GetM365AppUserDetailWithDateRequestBuilder {
        return new GetM365AppUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getM365AppUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetM365AppUserDetailWithPeriodRequestBuilder
    */
    public function getM365AppUserDetailWithPeriod(string $period): GetM365AppUserDetailWithPeriodRequestBuilder {
        return new GetM365AppUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageDetailWithPeriodRequestBuilder
    */
    public function getMailboxUsageDetailWithPeriod(string $period): GetMailboxUsageDetailWithPeriodRequestBuilder {
        return new GetMailboxUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageMailboxCountsWithPeriodRequestBuilder
    */
    public function getMailboxUsageMailboxCountsWithPeriod(string $period): GetMailboxUsageMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageQuotaStatusMailboxCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder
    */
    public function getMailboxUsageQuotaStatusMailboxCountsWithPeriod(string $period): GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder {
        return new GetMailboxUsageQuotaStatusMailboxCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getMailboxUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetMailboxUsageStorageWithPeriodRequestBuilder
    */
    public function getMailboxUsageStorageWithPeriod(string $period): GetMailboxUsageStorageWithPeriodRequestBuilder {
        return new GetMailboxUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActivationCounts method.
     * @return GetOffice365ActivationCountsRequestBuilder
    */
    public function getOffice365ActivationCounts(): GetOffice365ActivationCountsRequestBuilder {
        return new GetOffice365ActivationCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getOffice365ActivationsUserCounts method.
     * @return GetOffice365ActivationsUserCountsRequestBuilder
    */
    public function getOffice365ActivationsUserCounts(): GetOffice365ActivationsUserCountsRequestBuilder {
        return new GetOffice365ActivationsUserCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getOffice365ActivationsUserDetail method.
     * @return GetOffice365ActivationsUserDetailRequestBuilder
    */
    public function getOffice365ActivationsUserDetail(): GetOffice365ActivationsUserDetailRequestBuilder {
        return new GetOffice365ActivationsUserDetailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserCountsWithPeriodRequestBuilder
    */
    public function getOffice365ActiveUserCountsWithPeriod(string $period): GetOffice365ActiveUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365ActiveUserDetailWithDateRequestBuilder
    */
    public function getOffice365ActiveUserDetailWithDate(Date $date): GetOffice365ActiveUserDetailWithDateRequestBuilder {
        return new GetOffice365ActiveUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365ActiveUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ActiveUserDetailWithPeriodRequestBuilder
    */
    public function getOffice365ActiveUserDetailWithPeriod(string $period): GetOffice365ActiveUserDetailWithPeriodRequestBuilder {
        return new GetOffice365ActiveUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityCountsWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityCountsWithPeriod(string $period): GetOffice365GroupsActivityCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOffice365GroupsActivityDetailWithDateRequestBuilder
    */
    public function getOffice365GroupsActivityDetailWithDate(Date $date): GetOffice365GroupsActivityDetailWithDateRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityDetailWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityDetailWithPeriod(string $period): GetOffice365GroupsActivityDetailWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityFileCountsWithPeriod(string $period): GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityGroupCountsWithPeriod(string $period): GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityGroupCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365GroupsActivityStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365GroupsActivityStorageWithPeriodRequestBuilder
    */
    public function getOffice365GroupsActivityStorageWithPeriod(string $period): GetOffice365GroupsActivityStorageWithPeriodRequestBuilder {
        return new GetOffice365GroupsActivityStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOffice365ServicesUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOffice365ServicesUserCountsWithPeriodRequestBuilder
    */
    public function getOffice365ServicesUserCountsWithPeriod(string $period): GetOffice365ServicesUserCountsWithPeriodRequestBuilder {
        return new GetOffice365ServicesUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityFileCountsWithPeriodRequestBuilder
    */
    public function getOneDriveActivityFileCountsWithPeriod(string $period): GetOneDriveActivityFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserCountsWithPeriodRequestBuilder
    */
    public function getOneDriveActivityUserCountsWithPeriod(string $period): GetOneDriveActivityUserCountsWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveActivityUserDetailWithDateRequestBuilder
    */
    public function getOneDriveActivityUserDetailWithDate(Date $date): GetOneDriveActivityUserDetailWithDateRequestBuilder {
        return new GetOneDriveActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveActivityUserDetailWithPeriodRequestBuilder
    */
    public function getOneDriveActivityUserDetailWithPeriod(string $period): GetOneDriveActivityUserDetailWithPeriodRequestBuilder {
        return new GetOneDriveActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountCountsWithPeriodRequestBuilder
    */
    public function getOneDriveUsageAccountCountsWithPeriod(string $period): GetOneDriveUsageAccountCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param Date $date Usage: date={date}
     * @return GetOneDriveUsageAccountDetailWithDateRequestBuilder
    */
    public function getOneDriveUsageAccountDetailWithDate(Date $date): GetOneDriveUsageAccountDetailWithDateRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getOneDriveUsageAccountDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageAccountDetailWithPeriodRequestBuilder
    */
    public function getOneDriveUsageAccountDetailWithPeriod(string $period): GetOneDriveUsageAccountDetailWithPeriodRequestBuilder {
        return new GetOneDriveUsageAccountDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageFileCountsWithPeriodRequestBuilder
    */
    public function getOneDriveUsageFileCountsWithPeriod(string $period): GetOneDriveUsageFileCountsWithPeriodRequestBuilder {
        return new GetOneDriveUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getOneDriveUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetOneDriveUsageStorageWithPeriodRequestBuilder
    */
    public function getOneDriveUsageStorageWithPeriod(string $period): GetOneDriveUsageStorageWithPeriodRequestBuilder {
        return new GetOneDriveUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getPrinterArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime='{endDateTime}'
     * @param string $printerId Usage: printerId='{printerId}'
     * @param DateTime $startDateTime Usage: startDateTime='{startDateTime}'
     * @return GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function getPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, string $printerId, DateTime $startDateTime): GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetPrinterArchivedPrintJobsWithPrinterIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $printerId, $startDateTime);
    }

    /**
     * Provides operations to call the getRelyingPartyDetailedSummary method.
     * @param string $period Usage: period='{period}'
     * @return GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder
    */
    public function getRelyingPartyDetailedSummaryWithPeriod(string $period): GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder {
        return new GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityFileCountsWithPeriodRequestBuilder
    */
    public function getSharePointActivityFileCountsWithPeriod(string $period): GetSharePointActivityFileCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityPages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityPagesWithPeriodRequestBuilder
    */
    public function getSharePointActivityPagesWithPeriod(string $period): GetSharePointActivityPagesWithPeriodRequestBuilder {
        return new GetSharePointActivityPagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSharePointActivityUserCountsWithPeriod(string $period): GetSharePointActivityUserCountsWithPeriodRequestBuilder {
        return new GetSharePointActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointActivityUserDetailWithDateRequestBuilder
    */
    public function getSharePointActivityUserDetailWithDate(Date $date): GetSharePointActivityUserDetailWithDateRequestBuilder {
        return new GetSharePointActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointActivityUserDetailWithPeriodRequestBuilder
    */
    public function getSharePointActivityUserDetailWithPeriod(string $period): GetSharePointActivityUserDetailWithPeriodRequestBuilder {
        return new GetSharePointActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSharePointSiteUsageDetailWithDateRequestBuilder
    */
    public function getSharePointSiteUsageDetailWithDate(Date $date): GetSharePointSiteUsageDetailWithDateRequestBuilder {
        return new GetSharePointSiteUsageDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageDetailWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageDetailWithPeriod(string $period): GetSharePointSiteUsageDetailWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageFileCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageFileCountsWithPeriod(string $period): GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageFileCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsagePages method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsagePagesWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsagePagesWithPeriod(string $period): GetSharePointSiteUsagePagesWithPeriodRequestBuilder {
        return new GetSharePointSiteUsagePagesWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageSiteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageSiteCountsWithPeriod(string $period): GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageSiteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSharePointSiteUsageStorage method.
     * @param string $period Usage: period='{period}'
     * @return GetSharePointSiteUsageStorageWithPeriodRequestBuilder
    */
    public function getSharePointSiteUsageStorageWithPeriod(string $period): GetSharePointSiteUsageStorageWithPeriodRequestBuilder {
        return new GetSharePointSiteUsageStorageWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessActivityCountsWithPeriod(string $period): GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder
    */
    public function getSkypeForBusinessActivityUserDetailWithDate(Date $date): GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessActivityUserDetailWithPeriod(string $period): GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageUserCountsWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageUserDetailWithDate(Date $date): GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getSkypeForBusinessDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessDeviceUsageUserDetailWithPeriod(string $period): GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetSkypeForBusinessDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessOrganizerActivityCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessOrganizerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessOrganizerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessOrganizerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessOrganizerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessParticipantActivityCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessParticipantActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessParticipantActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessParticipantActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessParticipantActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessPeerToPeerActivityCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityMinuteCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getSkypeForBusinessPeerToPeerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder
    */
    public function getSkypeForBusinessPeerToPeerActivityUserCountsWithPeriod(string $period): GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageDistributionTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageDistributionTotalUserCountsWithPeriod(string $period): GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageDistributionTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageDistributionUserCountsWithPeriod(string $period): GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageTotalUserCountsWithPeriod(string $period): GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageUserCountsWithPeriod(string $period): GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function getTeamsDeviceUsageUserDetailWithDate(Date $date): GetTeamsDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function getTeamsDeviceUsageUserDetailWithPeriod(string $period): GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsTeamActivityCountsWithPeriodRequestBuilder
    */
    public function getTeamsTeamActivityCountsWithPeriod(string $period): GetTeamsTeamActivityCountsWithPeriodRequestBuilder {
        return new GetTeamsTeamActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsTeamActivityDetailWithDateRequestBuilder
    */
    public function getTeamsTeamActivityDetailWithDate(Date $date): GetTeamsTeamActivityDetailWithDateRequestBuilder {
        return new GetTeamsTeamActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsTeamActivityDetailWithPeriodRequestBuilder
    */
    public function getTeamsTeamActivityDetailWithPeriod(string $period): GetTeamsTeamActivityDetailWithPeriodRequestBuilder {
        return new GetTeamsTeamActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsTeamActivityDistributionCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder
    */
    public function getTeamsTeamActivityDistributionCountsWithPeriod(string $period): GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder {
        return new GetTeamsTeamActivityDistributionCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityCountsWithPeriod(string $period): GetTeamsUserActivityCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityDistributionTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityDistributionTotalUserCountsWithPeriod(string $period): GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityDistributionTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityDistributionUserCountsWithPeriod(string $period): GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityTotalCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityTotalCountsWithPeriod(string $period): GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityTotalCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityTotalDistributionCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityTotalDistributionCountsWithPeriod(string $period): GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityTotalDistributionCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityTotalUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityTotalUserCountsWithPeriod(string $period): GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityTotalUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserCountsWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityUserCountsWithPeriod(string $period): GetTeamsUserActivityUserCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetTeamsUserActivityUserDetailWithDateRequestBuilder
    */
    public function getTeamsUserActivityUserDetailWithDate(Date $date): GetTeamsUserActivityUserDetailWithDateRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getTeamsUserActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetTeamsUserActivityUserDetailWithPeriodRequestBuilder
    */
    public function getTeamsUserActivityUserDetailWithPeriod(string $period): GetTeamsUserActivityUserDetailWithPeriodRequestBuilder {
        return new GetTeamsUserActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getUserArchivedPrintJobs method.
     * @param DateTime $endDateTime Usage: endDateTime='{endDateTime}'
     * @param DateTime $startDateTime Usage: startDateTime='{startDateTime}'
     * @param string $userId Usage: userId='{userId}'
     * @return GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function getUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime, string $userId): GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new GetUserArchivedPrintJobsWithUserIdWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime, $userId);
    }

    /**
     * Provides operations to call the getYammerActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityCountsWithPeriodRequestBuilder
    */
    public function getYammerActivityCountsWithPeriod(string $period): GetYammerActivityCountsWithPeriodRequestBuilder {
        return new GetYammerActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserCountsWithPeriodRequestBuilder
    */
    public function getYammerActivityUserCountsWithPeriod(string $period): GetYammerActivityUserCountsWithPeriodRequestBuilder {
        return new GetYammerActivityUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerActivityUserDetailWithDateRequestBuilder
    */
    public function getYammerActivityUserDetailWithDate(Date $date): GetYammerActivityUserDetailWithDateRequestBuilder {
        return new GetYammerActivityUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerActivityUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerActivityUserDetailWithPeriodRequestBuilder
    */
    public function getYammerActivityUserDetailWithPeriod(string $period): GetYammerActivityUserDetailWithPeriodRequestBuilder {
        return new GetYammerActivityUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageDistributionUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder
    */
    public function getYammerDeviceUsageDistributionUserCountsWithPeriod(string $period): GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageDistributionUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder
    */
    public function getYammerDeviceUsageUserCountsWithPeriod(string $period): GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function getYammerDeviceUsageUserDetailWithDate(Date $date): GetYammerDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerDeviceUsageUserDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder
    */
    public function getYammerDeviceUsageUserDetailWithPeriod(string $period): GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder {
        return new GetYammerDeviceUsageUserDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityCountsWithPeriodRequestBuilder
    */
    public function getYammerGroupsActivityCountsWithPeriod(string $period): GetYammerGroupsActivityCountsWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityCountsWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param Date $date Usage: date={date}
     * @return GetYammerGroupsActivityDetailWithDateRequestBuilder
    */
    public function getYammerGroupsActivityDetailWithDate(Date $date): GetYammerGroupsActivityDetailWithDateRequestBuilder {
        return new GetYammerGroupsActivityDetailWithDateRequestBuilder($this->pathParameters, $this->requestAdapter, $date);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityDetail method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityDetailWithPeriodRequestBuilder
    */
    public function getYammerGroupsActivityDetailWithPeriod(string $period): GetYammerGroupsActivityDetailWithPeriodRequestBuilder {
        return new GetYammerGroupsActivityDetailWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Provides operations to call the getYammerGroupsActivityGroupCounts method.
     * @param string $period Usage: period='{period}'
     * @return GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder
    */
    public function getYammerGroupsActivityGroupCountsWithPeriod(string $period): GetYammerGroupsActivityGroupCountsWithPeriodRequestBuilder {
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
    public function managedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentAbandonmentDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
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
    public function managedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new ManagedDeviceEnrollmentAbandonmentSummaryWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
     * @return ManagedDeviceEnrollmentFailureDetailsRequestBuilder
    */
    public function managedDeviceEnrollmentFailureDetails(): ManagedDeviceEnrollmentFailureDetailsRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
     * @param string $filter Usage: filter='{filter}'
     * @param int $skip Usage: skip={skip}
     * @param string $skipToken Usage: skipToken='{skipToken}'
     * @param int $top Usage: top={top}
     * @return ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
    */
    public function managedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipToken(string $filter, int $skip, string $skipToken, int $top): ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder($this->pathParameters, $this->requestAdapter, $filter, $skip, $skipToken, $top);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentFailureTrends method.
     * @return ManagedDeviceEnrollmentFailureTrendsRequestBuilder
    */
    public function managedDeviceEnrollmentFailureTrends(): ManagedDeviceEnrollmentFailureTrendsRequestBuilder {
        return new ManagedDeviceEnrollmentFailureTrendsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
     * @return ManagedDeviceEnrollmentTopFailuresRequestBuilder
    */
    public function managedDeviceEnrollmentTopFailures(): ManagedDeviceEnrollmentTopFailuresRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the managedDeviceEnrollmentTopFailures method.
     * @param string $period Usage: period='{period}'
     * @return ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder
    */
    public function managedDeviceEnrollmentTopFailuresWithPeriod(string $period): ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder {
        return new ManagedDeviceEnrollmentTopFailuresWithPeriodRequestBuilder($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageSummariesByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageSummariesByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageSummariesByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageSummariesByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property reports in print
     * @param ReportRoot $body 
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ReportRoot $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.userCredentialUsageDetails.item collection
     * @param string $id Unique identifier of the item
     * @return UserCredentialUsageDetailsItemRequestBuilder
    */
    public function userCredentialUsageDetailsById(string $id): UserCredentialUsageDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userCredentialUsageDetails%2Did'] = $id;
        return new UserCredentialUsageDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
