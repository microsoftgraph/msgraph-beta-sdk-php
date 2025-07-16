<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetCloudPcRecommendationReports;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getCloudPcRecommendationReports method.
*/
class GetCloudPcRecommendationReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetCloudPcRecommendationReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/reports/getCloudPcRecommendationReports');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the device recommendation reports for Cloud PCs, such as the usage category report. The usage category report categorizes a Cloud PC as Undersized, Oversized, Rightsized, or Underutilized, and also provides the recommended SKU when the Cloud PC isn't Rightsized.
     * @param GetCloudPcRecommendationReportsPostRequestBody $body The request body
     * @param GetCloudPcRecommendationReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcreports-getcloudpcrecommendationreports?view=graph-rest-beta Find more info here
    */
    public function post(GetCloudPcRecommendationReportsPostRequestBody $body, ?GetCloudPcRecommendationReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the device recommendation reports for Cloud PCs, such as the usage category report. The usage category report categorizes a Cloud PC as Undersized, Oversized, Rightsized, or Underutilized, and also provides the recommended SKU when the Cloud PC isn't Rightsized.
     * @param GetCloudPcRecommendationReportsPostRequestBody $body The request body
     * @param GetCloudPcRecommendationReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetCloudPcRecommendationReportsPostRequestBody $body, ?GetCloudPcRecommendationReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetCloudPcRecommendationReportsRequestBuilder
    */
    public function withUrl(string $rawUrl): GetCloudPcRecommendationReportsRequestBuilder {
        return new GetCloudPcRecommendationReportsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
