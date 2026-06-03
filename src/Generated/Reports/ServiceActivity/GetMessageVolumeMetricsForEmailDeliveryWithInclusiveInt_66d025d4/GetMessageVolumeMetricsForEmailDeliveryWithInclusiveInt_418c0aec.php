<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_66d025d4;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMessageVolumeMetricsForEmailDeliveryWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_418c0aec extends BaseRequestConfiguration 
{
    /**
     * @var GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2|null $queryParameters Request query parameters
    */
    public ?GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2 $queryParameters = null;
    
    /**
     * Instantiates a new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_418c0aec and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2 {
        return new GetMessageVolumeMetricsForEmailDeliveryWithInclusiveInt_b0edd1a2($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
