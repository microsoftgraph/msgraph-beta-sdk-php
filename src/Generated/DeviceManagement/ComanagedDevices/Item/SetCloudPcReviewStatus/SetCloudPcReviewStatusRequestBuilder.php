<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\SetCloudPcReviewStatus;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setCloudPcReviewStatus method.
*/
class SetCloudPcReviewStatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetCloudPcReviewStatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/comanagedDevices/{managedDevice%2Did}/setCloudPcReviewStatus');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set the review status of a specific Cloud PC device. Use this API to set the review status of a Cloud PC to in review if you consider a Cloud PC as suspicious. After the review is completed, use this API again to set the Cloud PC back to a normal state.
     * @param SetCloudPcReviewStatusPostRequestBody $body The request body
     * @param SetCloudPcReviewStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/manageddevice-setcloudpcreviewstatus?view=graph-rest-1.0 Find more info here
    */
    public function post(SetCloudPcReviewStatusPostRequestBody $body, ?SetCloudPcReviewStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Set the review status of a specific Cloud PC device. Use this API to set the review status of a Cloud PC to in review if you consider a Cloud PC as suspicious. After the review is completed, use this API again to set the Cloud PC back to a normal state.
     * @param SetCloudPcReviewStatusPostRequestBody $body The request body
     * @param SetCloudPcReviewStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SetCloudPcReviewStatusPostRequestBody $body, ?SetCloudPcReviewStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SetCloudPcReviewStatusRequestBuilder
    */
    public function withUrl(string $rawUrl): SetCloudPcReviewStatusRequestBuilder {
        return new SetCloudPcReviewStatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
