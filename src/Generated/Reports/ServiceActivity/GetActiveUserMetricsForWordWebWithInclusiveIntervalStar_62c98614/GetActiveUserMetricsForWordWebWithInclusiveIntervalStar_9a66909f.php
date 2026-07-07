<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_62c98614;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForWordWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_9a66909f extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943 $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_9a66909f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943 {
        return new GetActiveUserMetricsForWordWebWithInclusiveIntervalStar_cb66b943($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
