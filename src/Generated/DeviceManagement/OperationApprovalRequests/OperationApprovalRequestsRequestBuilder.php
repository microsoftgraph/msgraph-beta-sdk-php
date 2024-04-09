<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\CancelMyRequest\CancelMyRequestRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\Item\OperationApprovalRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\RetrieveMyRequestByIdWithId\RetrieveMyRequestByIdWithIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\RetrieveMyRequests\RetrieveMyRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalRequests\RetrieveRequestStatus\RetrieveRequestStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OperationApprovalRequest;
use Microsoft\Graph\Beta\Generated\Models\OperationApprovalRequestCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the operationApprovalRequests property of the microsoft.graph.deviceManagement entity.
*/
class OperationApprovalRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the cancelMyRequest method.
    */
    public function cancelMyRequest(): CancelMyRequestRequestBuilder {
        return new CancelMyRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveMyRequests method.
    */
    public function retrieveMyRequests(): RetrieveMyRequestsRequestBuilder {
        return new RetrieveMyRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveRequestStatus method.
    */
    public function retrieveRequestStatus(): RetrieveRequestStatusRequestBuilder {
        return new RetrieveRequestStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operationApprovalRequests property of the microsoft.graph.deviceManagement entity.
     * @param string $operationApprovalRequestId The unique identifier of operationApprovalRequest
     * @return OperationApprovalRequestItemRequestBuilder
    */
    public function byOperationApprovalRequestId(string $operationApprovalRequestId): OperationApprovalRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['operationApprovalRequest%2Did'] = $operationApprovalRequestId;
        return new OperationApprovalRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OperationApprovalRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/operationApprovalRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The Operation Approval Requests
     * @param OperationApprovalRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OperationApprovalRequestCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OperationApprovalRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OperationApprovalRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to operationApprovalRequests for deviceManagement
     * @param OperationApprovalRequest $body The request body
     * @param OperationApprovalRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OperationApprovalRequest|null>
     * @throws Exception
    */
    public function post(OperationApprovalRequest $body, ?OperationApprovalRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OperationApprovalRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the retrieveMyRequestById method.
     * @param string $id Usage: id='{id}'
     * @return RetrieveMyRequestByIdWithIdRequestBuilder
    */
    public function retrieveMyRequestByIdWithId(string $id): RetrieveMyRequestByIdWithIdRequestBuilder {
        return new RetrieveMyRequestByIdWithIdRequestBuilder($this->pathParameters, $this->requestAdapter, $id);
    }

    /**
     * The Operation Approval Requests
     * @param OperationApprovalRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OperationApprovalRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to operationApprovalRequests for deviceManagement
     * @param OperationApprovalRequest $body The request body
     * @param OperationApprovalRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OperationApprovalRequest $body, ?OperationApprovalRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OperationApprovalRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): OperationApprovalRequestsRequestBuilder {
        return new OperationApprovalRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
