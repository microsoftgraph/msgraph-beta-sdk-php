<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_db52a6d7;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForOneNoteWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_f952b771 extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1 $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_f952b771 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1 {
        return new GetActiveUserMetricsForOneNoteWebWithInclusiveIntervalS_b7b7d2d1($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
