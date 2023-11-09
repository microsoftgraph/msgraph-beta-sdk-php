<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationPolicies\Item\RetrieveLatestUpgradeDefaultBaselinePolicy;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationPolicy;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveLatestUpgradeDefaultBaselinePolicy method.
*/
class RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/configurationPolicies/{deviceManagementConfigurationPolicy%2Did}/retrieveLatestUpgradeDefaultBaselinePolicy()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function retrieveLatestUpgradeDefaultBaselinePolicy
     * @param RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementConfigurationPolicy|null>
     * @throws Exception
    */
    public function get(?RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementConfigurationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function retrieveLatestUpgradeDefaultBaselinePolicy
     * @param RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder {
        return new RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
