<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_794c6e2c;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_6536818f extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47 $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_6536818f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47 {
        return new GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_075bdf47($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
