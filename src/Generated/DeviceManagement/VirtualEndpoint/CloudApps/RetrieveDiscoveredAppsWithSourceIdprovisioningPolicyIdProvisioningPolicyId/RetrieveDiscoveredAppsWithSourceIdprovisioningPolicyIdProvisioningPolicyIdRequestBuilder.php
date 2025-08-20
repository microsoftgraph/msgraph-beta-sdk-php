<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveDiscoveredApps method.
*/
class RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $sourceId Usage: sourceId='{sourceId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $sourceId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudApps/retrieveDiscoveredApps(sourceId=\'{sourceId}\',provisioningPolicyId=\'@provisioningPolicyId\'){?%24count,%24filter,%24search,%24skip,%24top,provisioningPolicyId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['sourceId'] = $sourceId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of cloudPcDiscoveredApp objects whose appdetails can be used to map to a cloudPcCloudApp object.
     * @param RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpccloudapp-retrievediscoveredapps?view=graph-rest-beta Find more info here
    */
    public function get(?RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of cloudPcDiscoveredApp objects whose appdetails can be used to map to a cloudPcCloudApp object.
     * @param RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder {
        return new RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
