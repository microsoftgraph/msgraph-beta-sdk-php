<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicies\Item\DeviceManagementExchangeOnPremisesPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementExchangeOnPremisesPolicy;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementExchangeOnPremisesPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exchangeOnPremisesPolicies property of the microsoft.graph.deviceManagement entity.
*/
class ExchangeOnPremisesPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exchangeOnPremisesPolicies property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceManagementExchangeOnPremisesPolicyId The unique identifier of deviceManagementExchangeOnPremisesPolicy
     * @return DeviceManagementExchangeOnPremisesPolicyItemRequestBuilder
    */
    public function byDeviceManagementExchangeOnPremisesPolicyId(string $deviceManagementExchangeOnPremisesPolicyId): DeviceManagementExchangeOnPremisesPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementExchangeOnPremisesPolicy%2Did'] = $deviceManagementExchangeOnPremisesPolicyId;
        return new DeviceManagementExchangeOnPremisesPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExchangeOnPremisesPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/exchangeOnPremisesPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of Exchange On Premisis policies configured by the tenant.
     * @param ExchangeOnPremisesPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementExchangeOnPremisesPolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ExchangeOnPremisesPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementExchangeOnPremisesPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to exchangeOnPremisesPolicies for deviceManagement
     * @param DeviceManagementExchangeOnPremisesPolicy $body The request body
     * @param ExchangeOnPremisesPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementExchangeOnPremisesPolicy|null>
     * @throws Exception
    */
    public function post(DeviceManagementExchangeOnPremisesPolicy $body, ?ExchangeOnPremisesPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementExchangeOnPremisesPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of Exchange On Premisis policies configured by the tenant.
     * @param ExchangeOnPremisesPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExchangeOnPremisesPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to exchangeOnPremisesPolicies for deviceManagement
     * @param DeviceManagementExchangeOnPremisesPolicy $body The request body
     * @param ExchangeOnPremisesPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementExchangeOnPremisesPolicy $body, ?ExchangeOnPremisesPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExchangeOnPremisesPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): ExchangeOnPremisesPoliciesRequestBuilder {
        return new ExchangeOnPremisesPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
