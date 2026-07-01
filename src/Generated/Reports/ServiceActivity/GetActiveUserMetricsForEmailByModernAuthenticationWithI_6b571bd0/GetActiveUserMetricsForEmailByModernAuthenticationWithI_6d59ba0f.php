<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForEmailByModernAuthenticationWithI_6b571bd0;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForEmailByModernAuthenticationWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForEmailByModernAuthenticationWithI_6d59ba0f extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForEmailByModernAuthenticationWithI_6d59ba0f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e {
        return new GetActiveUserMetricsForEmailByModernAuthenticationWithI_5cf3ab0e($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
