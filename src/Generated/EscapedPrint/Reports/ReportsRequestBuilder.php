<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports;

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
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
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
        $urlTplParams['applicationSignInDetailedSummary_id'] = $id;
        return new ApplicationSignInDetailedSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/print/reports{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property reports for print
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
     * Get reports from print
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
     * Update the navigation property reports in print
     * @param ReportRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ReportRoot $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.credentialUserRegistrationDetails.item collection
     * @param string $id Unique identifier of the item
     * @return CredentialUserRegistrationDetailsItemRequestBuilder
    */
    public function credentialUserRegistrationDetailsById(string $id): CredentialUserRegistrationDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credentialUserRegistrationDetails_id'] = $id;
        return new CredentialUserRegistrationDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageSummariesByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function dailyPrintUsageSummariesByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.dailyPrintUsageSummariesByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function dailyPrintUsageSummariesByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsDailyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property reports for print
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
     * Get reports from print
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ReportRoot::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageSummariesByPrinter.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder
    */
    public function monthlyPrintUsageSummariesByPrinterById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByPrinterItemPrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.reports.monthlyPrintUsageSummariesByUser.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder
    */
    public function monthlyPrintUsageSummariesByUserById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintReportsMonthlyPrintUsageSummariesByUserItemPrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property reports in print
     * @param ReportRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ReportRoot $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
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
        $urlTplParams['userCredentialUsageDetails_id'] = $id;
        return new UserCredentialUsageDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
