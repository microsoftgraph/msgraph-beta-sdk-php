<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\PeopleInsights;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PeopleInsightsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var PeopleInsightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PeopleInsightsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new peopleInsightsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PeopleInsightsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PeopleInsightsRequestBuilderGetQueryParameters {
        return new PeopleInsightsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new peopleInsightsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PeopleInsightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PeopleInsightsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
