<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary\ManufacturerRegression\Item\UserExperienceAnalyticsMetricItemRequestBuilder as MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryManufacturerRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary\ManufacturerRegression\ManufacturerRegressionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary\ModelRegression\Item\UserExperienceAnalyticsMetricItemRequestBuilder as MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryModelRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary\ModelRegression\ModelRegressionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary\OperatingSystemRegression\Item\UserExperienceAnalyticsMetricItemRequestBuilder as MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryOperatingSystemRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary\OperatingSystemRegression\OperatingSystemRegressionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRegressionSummary\SummarizeDeviceRegressionPerformanceWithSummarizeBy\SummarizeDeviceRegressionPerformanceWithSummarizeByRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\UserExperienceAnalyticsRegressionSummary;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UserExperienceAnalyticsRegressionSummaryRequestBuilder 
{
    public function manufacturerRegression(): ManufacturerRegressionRequestBuilder {
        return new ManufacturerRegressionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function modelRegression(): ModelRegressionRequestBuilder {
        return new ModelRegressionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function operatingSystemRegression(): OperatingSystemRegressionRequestBuilder {
        return new OperatingSystemRegressionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new UserExperienceAnalyticsRegressionSummaryRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsRegressionSummary{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property userExperienceAnalyticsRegressionSummary for deviceManagement
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
     * User experience analytics regression summary
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
     * Update the navigation property userExperienceAnalyticsRegressionSummary in deviceManagement
     * @param UserExperienceAnalyticsRegressionSummary $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(UserExperienceAnalyticsRegressionSummary $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property userExperienceAnalyticsRegressionSummary for deviceManagement
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
     * User experience analytics regression summary
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, UserExperienceAnalyticsRegressionSummary::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.userExperienceAnalyticsRegressionSummary.manufacturerRegression.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryManufacturerRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder
    */
    public function manufacturerRegressionById(string $id): MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryManufacturerRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsMetric_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryManufacturerRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.userExperienceAnalyticsRegressionSummary.modelRegression.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryModelRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder
    */
    public function modelRegressionById(string $id): MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryModelRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsMetric_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryModelRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.userExperienceAnalyticsRegressionSummary.operatingSystemRegression.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryOperatingSystemRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder
    */
    public function operatingSystemRegressionById(string $id): MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryOperatingSystemRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsMetric_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDeviceManagementUserExperienceAnalyticsRegressionSummaryOperatingSystemRegressionItemUserExperienceAnalyticsMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property userExperienceAnalyticsRegressionSummary in deviceManagement
     * @param UserExperienceAnalyticsRegressionSummary $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(UserExperienceAnalyticsRegressionSummary $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the summarizeDeviceRegressionPerformance method.
     * @param string $summarizeBy Usage: summarizeBy='{summarizeBy}'
     * @return SummarizeDeviceRegressionPerformanceWithSummarizeByRequestBuilder
    */
    public function summarizeDeviceRegressionPerformanceWithSummarizeBy(string $summarizeBy): SummarizeDeviceRegressionPerformanceWithSummarizeByRequestBuilder {
        return new SummarizeDeviceRegressionPerformanceWithSummarizeByRequestBuilder($this->pathParameters, $this->requestAdapter, $summarizeBy);
    }

}
