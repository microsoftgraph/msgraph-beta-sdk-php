<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedAppLogCollectionRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedAppLogCollectionRequest;
use Microsoft\Graph\Beta\Generated\Models\ManagedAppLogCollectionRequestCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedAppLogCollectionRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\ManagedAppLogCollectionRequests\Item\ManagedAppLogCollectionRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedAppLogCollectionRequests property of the microsoft.graph.user entity.
*/
class ManagedAppLogCollectionRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppLogCollectionRequests property of the microsoft.graph.user entity.
     * @param string $managedAppLogCollectionRequestId The unique identifier of managedAppLogCollectionRequest
     * @return ManagedAppLogCollectionRequestItemRequestBuilder
    */
    public function byManagedAppLogCollectionRequestId(string $managedAppLogCollectionRequestId): ManagedAppLogCollectionRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppLogCollectionRequest%2Did'] = $managedAppLogCollectionRequestId;
        return new ManagedAppLogCollectionRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedAppLogCollectionRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/managedAppLogCollectionRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Zero or more log collection requests triggered for the user.
     * @param ManagedAppLogCollectionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedAppLogCollectionRequestCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagedAppLogCollectionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedAppLogCollectionRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managedAppLogCollectionRequests for users
     * @param ManagedAppLogCollectionRequest $body The request body
     * @param ManagedAppLogCollectionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedAppLogCollectionRequest|null>
     * @throws Exception
    */
    public function post(ManagedAppLogCollectionRequest $body, ?ManagedAppLogCollectionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedAppLogCollectionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Zero or more log collection requests triggered for the user.
     * @param ManagedAppLogCollectionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedAppLogCollectionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to managedAppLogCollectionRequests for users
     * @param ManagedAppLogCollectionRequest $body The request body
     * @param ManagedAppLogCollectionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedAppLogCollectionRequest $body, ?ManagedAppLogCollectionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManagedAppLogCollectionRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedAppLogCollectionRequestsRequestBuilder {
        return new ManagedAppLogCollectionRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
