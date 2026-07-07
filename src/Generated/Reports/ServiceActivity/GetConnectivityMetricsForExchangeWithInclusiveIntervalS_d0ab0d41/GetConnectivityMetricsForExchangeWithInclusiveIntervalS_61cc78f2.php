<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetConnectivityMetricsForExchangeWithInclusiveIntervalS_d0ab0d41;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getConnectivityMetricsForExchangeWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetConnectivityMetricsForExchangeWithInclusiveIntervalS_61cc78f2 extends BaseRequestConfiguration 
{
    /**
     * @var GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173|null $queryParameters Request query parameters
    */
    public ?GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173 $queryParameters = null;
    
    /**
     * Instantiates a new GetConnectivityMetricsForExchangeWithInclusiveIntervalS_61cc78f2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173 {
        return new GetConnectivityMetricsForExchangeWithInclusiveIntervalS_00302173($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
