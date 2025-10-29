<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\RetrieveFrontlineCloudPcDetail;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\FrontlineCloudPcDetail;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveFrontlineCloudPcDetail method.
*/
class RetrieveFrontlineCloudPcDetailRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveFrontlineCloudPcDetailRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudPCs/{cloudPC%2Did}/retrieveFrontlineCloudPcDetail()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the frontlineCloudPcDetail of a frontline Cloud PC.  This API only supports shared-use licenses. For more information, see cloudPcProvisioningPolicy. Shared-use licenses allow three users per license, with one user signed in at a time. Callers can get the latest frontline Cloud PC availability and determine whether the frontline Cloud PC is available to a user.
     * @param RetrieveFrontlineCloudPcDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FrontlineCloudPcDetail|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-retrievefrontlinecloudpcdetail?view=graph-rest-beta Find more info here
    */
    public function get(?RetrieveFrontlineCloudPcDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FrontlineCloudPcDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the frontlineCloudPcDetail of a frontline Cloud PC.  This API only supports shared-use licenses. For more information, see cloudPcProvisioningPolicy. Shared-use licenses allow three users per license, with one user signed in at a time. Callers can get the latest frontline Cloud PC availability and determine whether the frontline Cloud PC is available to a user.
     * @param RetrieveFrontlineCloudPcDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveFrontlineCloudPcDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetrieveFrontlineCloudPcDetailRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveFrontlineCloudPcDetailRequestBuilder {
        return new RetrieveFrontlineCloudPcDetailRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
