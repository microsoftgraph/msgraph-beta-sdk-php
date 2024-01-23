<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\Item\CancelApproval;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the cancelApproval method.
*/
class CancelApprovalRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CancelApprovalRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/operationApprovalRequests/{operationApprovalRequest%2Did}/cancelApproval');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Cancels an already approved instance of an operationApprovalRequest.
     * @param CancelApprovalPostRequestBody $body The request body
     * @param CancelApprovalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CancelApprovalPostResponse|null>
     * @throws Exception
    */
    public function post(CancelApprovalPostRequestBody $body, ?CancelApprovalRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CancelApprovalPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Cancels an already approved instance of an operationApprovalRequest.
     * @param CancelApprovalPostRequestBody $body The request body
     * @param CancelApprovalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CancelApprovalPostRequestBody $body, ?CancelApprovalRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CancelApprovalRequestBuilder
    */
    public function withUrl(string $rawUrl): CancelApprovalRequestBuilder {
        return new CancelApprovalRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
