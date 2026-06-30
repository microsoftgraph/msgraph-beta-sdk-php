<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_be61b996;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForExcelWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_1b2fef13 extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192 $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_1b2fef13 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192 {
        return new GetActiveUserMetricsForExcelWebWithInclusiveIntervalSta_2296d192($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
