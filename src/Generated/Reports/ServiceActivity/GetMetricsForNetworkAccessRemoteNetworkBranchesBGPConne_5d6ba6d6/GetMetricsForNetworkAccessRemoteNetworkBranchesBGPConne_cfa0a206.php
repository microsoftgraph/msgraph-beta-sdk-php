<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_5d6ba6d6;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessRemoteNetworkBranchesBGPConnectedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_cfa0a206 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_cfa0a206 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7 {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPConne_b5deded7($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
