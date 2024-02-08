<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\PeopleInsights;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PeopleInsightsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PeopleInsightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PeopleInsightsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PeopleInsightsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PeopleInsightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PeopleInsightsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PeopleInsightsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PeopleInsightsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PeopleInsightsRequestBuilderGetQueryParameters {
        return new PeopleInsightsRequestBuilderGetQueryParameters($expand, $select);
    }

}
