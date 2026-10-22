<?php

namespace Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Dependencies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DependencyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Dependencies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Dependencies\Item\DependencyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dependencies property of the microsoft.graph.plan entity.
*/
class DependenciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dependencies property of the microsoft.graph.plan entity.
     * @param string $dependencyId The unique identifier of dependency
     * @return DependencyItemRequestBuilder
    */
    public function byDependencyId(string $dependencyId): DependencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dependency%2Did'] = $dependencyId;
        return new DependencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DependenciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/planner/plans_v2/{plan%2Did}/dependencies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of dependencies between items in the plan. Read-only. Nullable.
     * @param DependenciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DependencyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DependenciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DependencyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of dependencies between items in the plan. Read-only. Nullable.
     * @param DependenciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DependenciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DependenciesRequestBuilder
    */
    public function withUrl(string $rawUrl): DependenciesRequestBuilder {
        return new DependenciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
