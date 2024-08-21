<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\Approval\ApprovalItems\Item\Responses;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ApprovalItemResponse;
use Microsoft\Graph\Beta\Generated\Models\ApprovalItemResponseCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\Approval\ApprovalItems\Item\Responses\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\Approval\ApprovalItems\Item\Responses\Item\ApprovalItemResponseItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the responses property of the microsoft.graph.approvalItem entity.
*/
class ResponsesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the responses property of the microsoft.graph.approvalItem entity.
     * @param string $approvalItemResponseId The unique identifier of approvalItemResponse
     * @return ApprovalItemResponseItemRequestBuilder
    */
    public function byApprovalItemResponseId(string $approvalItemResponseId): ApprovalItemResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approvalItemResponse%2Did'] = $approvalItemResponseId;
        return new ApprovalItemResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ResponsesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/approval/approvalItems/{approvalItem%2Did}/responses{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of approvalItemResponse objects.
     * @param ResponsesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovalItemResponseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/approvalitem-list-responses?view=graph-rest-beta Find more info here
    */
    public function get(?ResponsesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovalItemResponseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new approvalItemResponse object.
     * @param ApprovalItemResponse $body The request body
     * @param ResponsesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovalItemResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/approvalitem-post-responses?view=graph-rest-beta Find more info here
    */
    public function post(ApprovalItemResponse $body, ?ResponsesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovalItemResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of approvalItemResponse objects.
     * @param ResponsesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResponsesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a new approvalItemResponse object.
     * @param ApprovalItemResponse $body The request body
     * @param ResponsesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApprovalItemResponse $body, ?ResponsesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResponsesRequestBuilder
    */
    public function withUrl(string $rawUrl): ResponsesRequestBuilder {
        return new ResponsesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
