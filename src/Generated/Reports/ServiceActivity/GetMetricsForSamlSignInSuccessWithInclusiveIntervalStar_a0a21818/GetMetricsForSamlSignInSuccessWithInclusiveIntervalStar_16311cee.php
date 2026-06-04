<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a0a21818;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForSamlSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_16311cee extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4|null $queryParameters Request query parameters
    */
    public ?GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_16311cee and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4 {
        return new GetMetricsForSamlSignInSuccessWithInclusiveIntervalStar_a121c3e4($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
