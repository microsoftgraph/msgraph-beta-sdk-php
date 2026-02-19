<?php

namespace Microsoft\Graph\Beta\Generated\Security\Zones\Item\Aggregations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\AggregatedEnvironment;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the aggregations property of the microsoft.graph.security.zone entity.
*/
class AggregatedEnvironmentKindItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AggregatedEnvironmentKindItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/zones/{zone%2Did}/aggregations/{aggregatedEnvironment%2Dkind}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Environment count summaries by type. Read-only. Supports $filter (eq) on the kind property. For example, $filter=aggregations/any(a: a/kind eq 'azureSubscription').
     * @param AggregatedEnvironmentKindItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AggregatedEnvironment|null>
     * @throws Exception
    */
    public function get(?AggregatedEnvironmentKindItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AggregatedEnvironment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Environment count summaries by type. Read-only. Supports $filter (eq) on the kind property. For example, $filter=aggregations/any(a: a/kind eq 'azureSubscription').
     * @param AggregatedEnvironmentKindItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AggregatedEnvironmentKindItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AggregatedEnvironmentKindItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AggregatedEnvironmentKindItemRequestBuilder {
        return new AggregatedEnvironmentKindItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
