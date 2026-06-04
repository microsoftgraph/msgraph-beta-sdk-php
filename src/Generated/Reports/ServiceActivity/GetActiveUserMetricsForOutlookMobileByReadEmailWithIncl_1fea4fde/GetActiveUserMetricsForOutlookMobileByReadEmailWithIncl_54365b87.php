<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_1fea4fde;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForOutlookMobileByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_54365b87 extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_54365b87 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c {
        return new GetActiveUserMetricsForOutlookMobileByReadEmailWithIncl_95f5aa1c($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
