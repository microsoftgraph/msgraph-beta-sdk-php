<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_d04e48af;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForOutlookMacByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_ca993dd8 extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538 $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_ca993dd8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538 {
        return new GetActiveUserMetricsForOutlookMacByReadEmailWithInclusi_318a6538($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
