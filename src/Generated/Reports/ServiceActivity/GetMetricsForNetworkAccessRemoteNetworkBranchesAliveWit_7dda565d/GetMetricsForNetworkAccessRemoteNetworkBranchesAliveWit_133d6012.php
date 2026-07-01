<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_7dda565d;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessRemoteNetworkBranchesAliveWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_133d6012 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_133d6012 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8 {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesAliveWit_1bc002f8($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
