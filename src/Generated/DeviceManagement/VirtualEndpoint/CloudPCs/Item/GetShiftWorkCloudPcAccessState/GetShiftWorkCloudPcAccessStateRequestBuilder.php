<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\GetShiftWorkCloudPcAccessState;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ShiftWorkCloudPcAccessState;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getShiftWorkCloudPcAccessState method.
*/
class GetShiftWorkCloudPcAccessStateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetShiftWorkCloudPcAccessStateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudPCs/{cloudPC%2Did}/getShiftWorkCloudPcAccessState()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the shiftWorkCloudPcAccessState of a shift work Cloud PC.  This API only supports shared-use licenses. For more information, see cloudPcProvisioningPolicy. Shared-use licenses allow three users per license, with one user signed in at a time. Callers can get the latest shift work Cloud PC accessState and determine whether the shift work Cloud PC is accessible to the user.  If a web client needs to connect to a shift work Cloud PC, the sharedCloudPcAccessState validates the bookmark scenario. If sharedCloudPcAccessState is not active/activating/standbyMode, the web client shows a 'bad bookmark'.
     * @param GetShiftWorkCloudPcAccessStateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ShiftWorkCloudPcAccessState|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-getshiftworkcloudpcaccessstate?view=graph-rest-beta Find more info here
    */
    public function get(?GetShiftWorkCloudPcAccessStateRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<ShiftWorkCloudPcAccessState|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, ShiftWorkCloudPcAccessState::class, $errorMappings);
        return $result;
    }

    /**
     * Get the shiftWorkCloudPcAccessState of a shift work Cloud PC.  This API only supports shared-use licenses. For more information, see cloudPcProvisioningPolicy. Shared-use licenses allow three users per license, with one user signed in at a time. Callers can get the latest shift work Cloud PC accessState and determine whether the shift work Cloud PC is accessible to the user.  If a web client needs to connect to a shift work Cloud PC, the sharedCloudPcAccessState validates the bookmark scenario. If sharedCloudPcAccessState is not active/activating/standbyMode, the web client shows a 'bad bookmark'.
     * @param GetShiftWorkCloudPcAccessStateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetShiftWorkCloudPcAccessStateRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetShiftWorkCloudPcAccessStateRequestBuilder
    */
    public function withUrl(string $rawUrl): GetShiftWorkCloudPcAccessStateRequestBuilder {
        return new GetShiftWorkCloudPcAccessStateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
