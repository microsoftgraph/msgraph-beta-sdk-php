<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_127ff88c;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getAudioStreamsOverUdpMetricsForTeamsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_1e7ceb8d extends BaseRequestConfiguration 
{
    /**
     * @var GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95|null $queryParameters Request query parameters
    */
    public ?GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95 $queryParameters = null;
    
    /**
     * Instantiates a new GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_1e7ceb8d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95 {
        return new GetAudioStreamsOverUdpMetricsForTeamsWithInclusiveInter_8e6f5a95($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
