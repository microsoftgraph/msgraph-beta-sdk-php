<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\RetrieveRequestStatus;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OperationApprovalRequestEntityStatus;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveRequestStatus method.
*/
class RetrieveRequestStatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveRequestStatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/operationApprovalRequests/retrieveRequestStatus');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action retrieveRequestStatus
     * @param RetrieveRequestStatusPostRequestBody $body The request body
     * @param RetrieveRequestStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OperationApprovalRequestEntityStatus|null>
     * @throws Exception
    */
    public function post(RetrieveRequestStatusPostRequestBody $body, ?RetrieveRequestStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OperationApprovalRequestEntityStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action retrieveRequestStatus
     * @param RetrieveRequestStatusPostRequestBody $body The request body
     * @param RetrieveRequestStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RetrieveRequestStatusPostRequestBody $body, ?RetrieveRequestStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetrieveRequestStatusRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveRequestStatusRequestBuilder {
        return new RetrieveRequestStatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
