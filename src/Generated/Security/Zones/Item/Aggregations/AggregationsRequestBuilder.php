<?php

namespace Microsoft\Graph\Beta\Generated\Security\Zones\Item\Aggregations;

use Microsoft\Graph\Beta\Generated\Security\Zones\Item\Aggregations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Zones\Item\Aggregations\Item\AggregatedEnvironmentKindItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /security/zones/{zone-id}/aggregations
*/
class AggregationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the aggregations property of the microsoft.graph.security.zone entity.
     * @param string $aggregatedEnvironmentKind The unique identifier of aggregatedEnvironment
     * @return AggregatedEnvironmentKindItemRequestBuilder
    */
    public function byAggregatedEnvironmentKind(string $aggregatedEnvironmentKind): AggregatedEnvironmentKindItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['aggregatedEnvironment%2Dkind'] = $aggregatedEnvironmentKind;
        return new AggregatedEnvironmentKindItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AggregationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/zones/{zone%2Did}/aggregations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
