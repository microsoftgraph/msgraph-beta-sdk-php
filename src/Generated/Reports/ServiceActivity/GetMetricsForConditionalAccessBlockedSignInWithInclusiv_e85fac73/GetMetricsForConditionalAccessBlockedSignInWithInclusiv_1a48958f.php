<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessBlockedSignInWithInclusiv_e85fac73;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForConditionalAccessBlockedSignInWithInclusiv_1a48958f extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4|null $queryParameters Request query parameters
    */
    public ?GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForConditionalAccessBlockedSignInWithInclusiv_1a48958f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4 {
        return new GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
