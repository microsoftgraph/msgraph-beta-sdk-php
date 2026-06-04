<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_215ae664;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getUsageMetricsForTeamsByLaunchWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_e4bbd9ad extends BaseRequestConfiguration 
{
    /**
     * @var GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334|null $queryParameters Request query parameters
    */
    public ?GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334 $queryParameters = null;
    
    /**
     * Instantiates a new GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_e4bbd9ad and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334 {
        return new GetUsageMetricsForTeamsByLaunchWithInclusiveIntervalSta_d731f334($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
