<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\GetDevicesScheduledToRetire\GetDevicesScheduledToRetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\GetNoncompliantDevicesToRetire\GetNoncompliantDevicesToRetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\HasPayloadLinks\HasPayloadLinksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\RefreshDeviceComplianceReportSummarization\RefreshDeviceComplianceReportSummarizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\SetScheduledRetireState\SetScheduledRetireStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\ValidateComplianceScript\ValidateComplianceScriptRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicy;
use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceCompliancePoliciesRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNoncompliantDevicesToRetire method.
    */
    public function getNoncompliantDevicesToRetire(): GetNoncompliantDevicesToRetireRequestBuilder {
        return new GetNoncompliantDevicesToRetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hasPayloadLinks method.
    */
    public function hasPayloadLinks(): HasPayloadLinksRequestBuilder {
        return new HasPayloadLinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to call the refreshDeviceComplianceReportSummarization method.
    */
    public function refreshDeviceComplianceReportSummarization(): RefreshDeviceComplianceReportSummarizationRequestBuilder {
        return new RefreshDeviceComplianceReportSummarizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the setScheduledRetireState method.
    */
    public function setScheduledRetireState(): SetScheduledRetireStateRequestBuilder {
        return new SetScheduledRetireStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to call the validateComplianceScript method.
    */
    public function validateComplianceScript(): ValidateComplianceScriptRequestBuilder {
        return new ValidateComplianceScriptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceCompliancePoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/deviceCompliancePolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * The device compliance policies.
     * @param DeviceCompliancePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DeviceCompliancePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getDevicesScheduledToRetire method.
     * @return GetDevicesScheduledToRetireRequestBuilder
    */
    public function getDevicesScheduledToRetire(): GetDevicesScheduledToRetireRequestBuilder {
        return new GetDevicesScheduledToRetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Create new navigation property to deviceCompliancePolicies for deviceManagement
     * @param DeviceCompliancePolicy $body The request body
     * @param DeviceCompliancePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(DeviceCompliancePolicy $body, ?DeviceCompliancePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicy::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The device compliance policies.
     * @param DeviceCompliancePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceCompliancePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceCompliancePolicies for deviceManagement
     * @param DeviceCompliancePolicy $body The request body
     * @param DeviceCompliancePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceCompliancePolicy $body, ?DeviceCompliancePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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

}
