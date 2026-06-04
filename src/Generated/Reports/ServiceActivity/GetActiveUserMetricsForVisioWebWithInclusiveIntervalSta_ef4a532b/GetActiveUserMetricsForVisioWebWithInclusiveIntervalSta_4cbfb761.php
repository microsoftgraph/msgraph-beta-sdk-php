<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_ef4a532b;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_4cbfb761 extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_4cbfb761 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec {
        return new GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_7f4362ec($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
