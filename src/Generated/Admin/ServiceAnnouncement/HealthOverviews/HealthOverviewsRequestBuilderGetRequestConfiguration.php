<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ServiceAnnouncement\HealthOverviews;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HealthOverviewsRequestBuilderGetRequestConfiguration 
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
     * @var HealthOverviewsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HealthOverviewsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new healthOverviewsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HealthOverviewsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HealthOverviewsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new healthOverviewsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return HealthOverviewsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): HealthOverviewsRequestBuilderGetQueryParameters {
        return new HealthOverviewsRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
