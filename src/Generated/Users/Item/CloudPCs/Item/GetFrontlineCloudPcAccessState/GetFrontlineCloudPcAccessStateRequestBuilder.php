<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\CloudPCs\Item\GetFrontlineCloudPcAccessState;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\FrontlineCloudPcAccessState;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getFrontlineCloudPcAccessState method.
*/
class GetFrontlineCloudPcAccessStateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetFrontlineCloudPcAccessStateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/cloudPCs/{cloudPC%2Did}/getFrontlineCloudPcAccessState()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the frontlineCloudPcAccessState of a frontline Cloud PC.  This API only supports shared-use licenses. For more information, see cloudPcProvisioningPolicy. Shared-use licenses allow three users per license, with one user signed in at a time. Callers can get the latest frontline Cloud PC accessState and determine whether the frontline Cloud PC is accessible to a user.  If a web client needs to connect to a frontline Cloud PC, the sharedCloudPcAccessState validates the bookmark scenario. If sharedCloudPcAccessState isn't active/activating/standbyMode, the web client shows a bad bookmark.
     * @param GetFrontlineCloudPcAccessStateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FrontlineCloudPcAccessState|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-getfrontlinecloudpcaccessstate?view=graph-rest-beta Find more info here
    */
    public function get(?GetFrontlineCloudPcAccessStateRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<FrontlineCloudPcAccessState|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, FrontlineCloudPcAccessState::class, $errorMappings);
        return $result;
    }

    /**
     * Get the frontlineCloudPcAccessState of a frontline Cloud PC.  This API only supports shared-use licenses. For more information, see cloudPcProvisioningPolicy. Shared-use licenses allow three users per license, with one user signed in at a time. Callers can get the latest frontline Cloud PC accessState and determine whether the frontline Cloud PC is accessible to a user.  If a web client needs to connect to a frontline Cloud PC, the sharedCloudPcAccessState validates the bookmark scenario. If sharedCloudPcAccessState isn't active/activating/standbyMode, the web client shows a bad bookmark.
     * @param GetFrontlineCloudPcAccessStateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetFrontlineCloudPcAccessStateRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetFrontlineCloudPcAccessStateRequestBuilder
    */
    public function withUrl(string $rawUrl): GetFrontlineCloudPcAccessStateRequestBuilder {
        return new GetFrontlineCloudPcAccessStateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
