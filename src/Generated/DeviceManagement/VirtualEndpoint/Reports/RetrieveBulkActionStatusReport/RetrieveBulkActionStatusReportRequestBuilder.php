<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\RetrieveBulkActionStatusReport;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the retrieveBulkActionStatusReport method.
*/
class RetrieveBulkActionStatusReportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveBulkActionStatusReportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/reports/retrieveBulkActionStatusReport');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the bulk remote action status report, including data such as the bulk action ID, bulk action display name, initiating user's principal name, action type, and action state.
     * @param RetrieveBulkActionStatusReportPostRequestBody $body The request body
     * @param RetrieveBulkActionStatusReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcreports-retrievebulkactionstatusreport?view=graph-rest-beta Find more info here
    */
    public function post(RetrieveBulkActionStatusReportPostRequestBody $body, ?RetrieveBulkActionStatusReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the bulk remote action status report, including data such as the bulk action ID, bulk action display name, initiating user's principal name, action type, and action state.
     * @param RetrieveBulkActionStatusReportPostRequestBody $body The request body
     * @param RetrieveBulkActionStatusReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RetrieveBulkActionStatusReportPostRequestBody $body, ?RetrieveBulkActionStatusReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetrieveBulkActionStatusReportRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveBulkActionStatusReportRequestBuilder {
        return new RetrieveBulkActionStatusReportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
