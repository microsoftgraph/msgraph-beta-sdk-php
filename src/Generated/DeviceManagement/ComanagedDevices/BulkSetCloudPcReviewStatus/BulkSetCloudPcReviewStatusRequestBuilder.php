<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\BulkSetCloudPcReviewStatus;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcBulkRemoteActionResult;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the bulkSetCloudPcReviewStatus method.
*/
class BulkSetCloudPcReviewStatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BulkSetCloudPcReviewStatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/comanagedDevices/bulkSetCloudPcReviewStatus');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set the review status of multiple Cloud PC devices with a single request that includes the IDs of Intune managed devices.
     * @param BulkSetCloudPcReviewStatusPostRequestBody $body The request body
     * @param BulkSetCloudPcReviewStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcBulkRemoteActionResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/manageddevice-bulksetcloudpcreviewstatus?view=graph-rest-beta Find more info here
    */
    public function post(BulkSetCloudPcReviewStatusPostRequestBody $body, ?BulkSetCloudPcReviewStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcBulkRemoteActionResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Set the review status of multiple Cloud PC devices with a single request that includes the IDs of Intune managed devices.
     * @param BulkSetCloudPcReviewStatusPostRequestBody $body The request body
     * @param BulkSetCloudPcReviewStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkSetCloudPcReviewStatusPostRequestBody $body, ?BulkSetCloudPcReviewStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BulkSetCloudPcReviewStatusRequestBuilder
    */
    public function withUrl(string $rawUrl): BulkSetCloudPcReviewStatusRequestBuilder {
        return new BulkSetCloudPcReviewStatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
