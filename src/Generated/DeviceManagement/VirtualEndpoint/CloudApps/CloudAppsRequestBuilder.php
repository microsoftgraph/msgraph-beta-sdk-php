<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\Item\CloudPcCloudAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\Publish\PublishRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\Reset\ResetRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyId\RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\Unpublish\UnpublishRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPcCloudApp;
use Microsoft\Graph\Beta\Generated\Models\CloudPcCloudAppCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudApps property of the microsoft.graph.virtualEndpoint entity.
*/
class CloudAppsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the publish method.
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reset method.
    */
    public function reset(): ResetRequestBuilder {
        return new ResetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unpublish method.
    */
    public function unpublish(): UnpublishRequestBuilder {
        return new UnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudApps property of the microsoft.graph.virtualEndpoint entity.
     * @param string $cloudPcCloudAppId The unique identifier of cloudPcCloudApp
     * @return CloudPcCloudAppItemRequestBuilder
    */
    public function byCloudPcCloudAppId(string $cloudPcCloudAppId): CloudPcCloudAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcCloudApp%2Did'] = $cloudPcCloudAppId;
        return new CloudPcCloudAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CloudAppsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudApps{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get cloudApps from deviceManagement
     * @param CloudAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcCloudAppCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CloudAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcCloudAppCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to cloudApps for deviceManagement
     * @param CloudPcCloudApp $body The request body
     * @param CloudAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcCloudApp|null>
     * @throws Exception
    */
    public function post(CloudPcCloudApp $body, ?CloudAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcCloudApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the retrieveDiscoveredApps method.
     * @param string $sourceId Usage: sourceId='{sourceId}'
     * @return RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder
    */
    public function retrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyId(string $sourceId): RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder {
        return new RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilder($this->pathParameters, $this->requestAdapter, $sourceId);
    }

    /**
     * Get cloudApps from deviceManagement
     * @param CloudAppsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudAppsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to cloudApps for deviceManagement
     * @param CloudPcCloudApp $body The request body
     * @param CloudAppsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudPcCloudApp $body, ?CloudAppsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudAppsRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudAppsRequestBuilder {
        return new CloudAppsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
