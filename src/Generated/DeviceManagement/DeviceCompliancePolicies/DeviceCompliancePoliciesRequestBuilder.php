<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\GetDevicesScheduledToRetire\GetDevicesScheduledToRetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\GetNoncompliantDevicesToRetire\GetNoncompliantDevicesToRetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\HasPayloadLinks\HasPayloadLinksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\Item\DeviceCompliancePolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\RefreshDeviceComplianceReportSummarization\RefreshDeviceComplianceReportSummarizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\SetScheduledRetireState\SetScheduledRetireStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\ValidateComplianceScript\ValidateComplianceScriptRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicy;
use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceCompliancePolicies property of the microsoft.graph.deviceManagement entity.
*/
class DeviceCompliancePoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesScheduledToRetire method.
    */
    public function getDevicesScheduledToRetire(): GetDevicesScheduledToRetireRequestBuilder {
        return new GetDevicesScheduledToRetireRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the refreshDeviceComplianceReportSummarization method.
    */
    public function refreshDeviceComplianceReportSummarization(): RefreshDeviceComplianceReportSummarizationRequestBuilder {
        return new RefreshDeviceComplianceReportSummarizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setScheduledRetireState method.
    */
    public function setScheduledRetireState(): SetScheduledRetireStateRequestBuilder {
        return new SetScheduledRetireStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateComplianceScript method.
    */
    public function validateComplianceScript(): ValidateComplianceScriptRequestBuilder {
        return new ValidateComplianceScriptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicies property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceCompliancePolicyId The unique identifier of deviceCompliancePolicy
     * @return DeviceCompliancePolicyItemRequestBuilder
    */
    public function byDeviceCompliancePolicyId(string $deviceCompliancePolicyId): DeviceCompliancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicy%2Did'] = $deviceCompliancePolicyId;
        return new DeviceCompliancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceCompliancePoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceCompliancePolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The device compliance policies.
     * @param DeviceCompliancePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceCompliancePolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceCompliancePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceCompliancePolicies for deviceManagement
     * @param DeviceCompliancePolicy $body The request body
     * @param DeviceCompliancePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceCompliancePolicy|null>
     * @throws Exception
    */
    public function post(DeviceCompliancePolicy $body, ?DeviceCompliancePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
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
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
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
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DeviceCompliancePoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceCompliancePoliciesRequestBuilder {
        return new DeviceCompliancePoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
