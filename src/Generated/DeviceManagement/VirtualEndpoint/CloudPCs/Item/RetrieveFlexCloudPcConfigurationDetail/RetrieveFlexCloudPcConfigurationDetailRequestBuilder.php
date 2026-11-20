<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\RetrieveFlexCloudPcConfigurationDetail;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcFlexConfigurationDetail;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveFlexCloudPcConfigurationDetail method.
*/
class RetrieveFlexCloudPcConfigurationDetailRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveFlexCloudPcConfigurationDetailRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudPCs/{cloudPC%2Did}/retrieveFlexCloudPcConfigurationDetail()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get Windows 365 Flex (formerly Windows 365 Frontline) configuration details for a Cloud PC, including license availability. The cloudPcFlexConfigurationDetail response indicates whether a Flex license is available, based on the service plan and concurrent-access group for the Cloud PC. This function retrieves license availability, not the power state of the Cloud PC. To retrieve its live access state, use retrieveFlexCloudPcAccessConfiguration.
     * @param RetrieveFlexCloudPcConfigurationDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcFlexConfigurationDetail|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-retrieveflexcloudpcconfigurationdetail?view=graph-rest-beta Find more info here
    */
    public function get(?RetrieveFlexCloudPcConfigurationDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcFlexConfigurationDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get Windows 365 Flex (formerly Windows 365 Frontline) configuration details for a Cloud PC, including license availability. The cloudPcFlexConfigurationDetail response indicates whether a Flex license is available, based on the service plan and concurrent-access group for the Cloud PC. This function retrieves license availability, not the power state of the Cloud PC. To retrieve its live access state, use retrieveFlexCloudPcAccessConfiguration.
     * @param RetrieveFlexCloudPcConfigurationDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveFlexCloudPcConfigurationDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveFlexCloudPcConfigurationDetailRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveFlexCloudPcConfigurationDetailRequestBuilder {
        return new RetrieveFlexCloudPcConfigurationDetailRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
