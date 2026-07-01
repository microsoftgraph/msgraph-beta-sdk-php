<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_bc926148;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForPowerPointWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_029767ab extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409 $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_029767ab and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409 {
        return new GetActiveUserMetricsForPowerPointWebWithInclusiveInterv_472b5409($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
