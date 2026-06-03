<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_2ed1bee3;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getUsageMetricsForTeamsByMeetingsJoinedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_eeae89e8 extends BaseRequestConfiguration 
{
    /**
     * @var GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5|null $queryParameters Request query parameters
    */
    public ?GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5 $queryParameters = null;
    
    /**
     * Instantiates a new GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_eeae89e8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5 {
        return new GetUsageMetricsForTeamsByMeetingsJoinedWithInclusiveInt_ae883eb5($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
