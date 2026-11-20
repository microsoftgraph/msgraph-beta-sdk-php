<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\ObjectConnections\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ObjectConnection;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the objectConnections property of the microsoft.graph.synchronizationJob entity.
*/
class ObjectConnectionObjectItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ObjectConnectionObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/synchronization/jobs/{synchronizationJob%2Did}/objectConnections/{objectConnection%2DobjectId}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an objectConnection to clear the cached linkage record for an object in a synchronizationJob. The service clears the corresponding connector data store cache entry so the object is re-evaluated during a later synchronization cycle. This operation clears the linkage record; it doesn't delete the source or target directory object.
     * @param ObjectConnectionObjectItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/synchronization-synchronizationjob-delete-objectconnections?view=graph-rest-beta Find more info here
    */
    public function delete(?ObjectConnectionObjectItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the objectConnection cached linkage record for a known object in a synchronizationJob. During public preview, you must specify a known objectId. Collection listing isn't supported; a GET request to the objectConnections collection returns 400 Bad Request.
     * @param ObjectConnectionObjectItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ObjectConnection|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/synchronization-objectconnection-get?view=graph-rest-beta Find more info here
    */
    public function get(?ObjectConnectionObjectItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ObjectConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property objectConnections in servicePrincipals
     * @param ObjectConnection $body Represents a connector data store linkage record for an object in a synchronization job.
     * @param ObjectConnectionObjectItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ObjectConnection|null>
     * @throws Exception
    */
    public function patch(ObjectConnection $body, ?ObjectConnectionObjectItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ObjectConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an objectConnection to clear the cached linkage record for an object in a synchronizationJob. The service clears the corresponding connector data store cache entry so the object is re-evaluated during a later synchronization cycle. This operation clears the linkage record; it doesn't delete the source or target directory object.
     * @param ObjectConnectionObjectItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ObjectConnectionObjectItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get the objectConnection cached linkage record for a known object in a synchronizationJob. During public preview, you must specify a known objectId. Collection listing isn't supported; a GET request to the objectConnections collection returns 400 Bad Request.
     * @param ObjectConnectionObjectItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ObjectConnectionObjectItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property objectConnections in servicePrincipals
     * @param ObjectConnection $body Represents a connector data store linkage record for an object in a synchronization job.
     * @param ObjectConnectionObjectItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ObjectConnection $body, ?ObjectConnectionObjectItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return ObjectConnectionObjectItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ObjectConnectionObjectItemRequestBuilder {
        return new ObjectConnectionObjectItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
