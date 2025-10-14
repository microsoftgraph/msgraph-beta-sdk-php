<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\ServiceActivity\GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters {
        return new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
