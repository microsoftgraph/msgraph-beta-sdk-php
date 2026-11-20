<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\ObjectConnections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\ObjectConnections\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\ObjectConnections\Item\ObjectConnectionObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ObjectConnection;
use Microsoft\Graph\Beta\Generated\Models\ObjectConnectionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the objectConnections property of the microsoft.graph.synchronizationJob entity.
*/
class ObjectConnectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the objectConnections property of the microsoft.graph.synchronizationJob entity.
     * @param string $objectConnectionObjectId The unique identifier of objectConnection
     * @return ObjectConnectionObjectItemRequestBuilder
    */
    public function byObjectConnectionObjectId(string $objectConnectionObjectId): ObjectConnectionObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['objectConnection%2DobjectId'] = $objectConnectionObjectId;
        return new ObjectConnectionObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ObjectConnectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/synchronization/jobs/{synchronizationJob%2Did}/objectConnections{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Connector data store linkage records contained by the job. During public preview, retrieve an individual connection using a known objectId, or delete it to clear its cached linkage. Collection listing isn't supported and returns 400 Bad Request.
     * @param ObjectConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ObjectConnectionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ObjectConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ObjectConnectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to objectConnections for applications
     * @param ObjectConnection $body Represents a connector data store linkage record for an object in a synchronization job.
     * @param ObjectConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ObjectConnection|null>
     * @throws Exception
    */
    public function post(ObjectConnection $body, ?ObjectConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ObjectConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Connector data store linkage records contained by the job. During public preview, retrieve an individual connection using a known objectId, or delete it to clear its cached linkage. Collection listing isn't supported and returns 400 Bad Request.
     * @param ObjectConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ObjectConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to objectConnections for applications
     * @param ObjectConnection $body Represents a connector data store linkage record for an object in a synchronization job.
     * @param ObjectConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ObjectConnection $body, ?ObjectConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ObjectConnectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ObjectConnectionsRequestBuilder {
        return new ObjectConnectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
