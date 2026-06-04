<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_bd23993d;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_cff78eef extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4|null $queryParameters Request query parameters
    */
    public ?GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_cff78eef and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4 {
        return new GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_9c5066e4($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
