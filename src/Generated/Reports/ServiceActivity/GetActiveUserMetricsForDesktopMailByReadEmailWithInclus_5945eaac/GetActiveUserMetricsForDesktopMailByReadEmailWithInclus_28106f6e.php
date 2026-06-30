<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_5945eaac;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForDesktopMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_28106f6e extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850 $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_28106f6e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850 {
        return new GetActiveUserMetricsForDesktopMailByReadEmailWithInclus_0cb05850($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
