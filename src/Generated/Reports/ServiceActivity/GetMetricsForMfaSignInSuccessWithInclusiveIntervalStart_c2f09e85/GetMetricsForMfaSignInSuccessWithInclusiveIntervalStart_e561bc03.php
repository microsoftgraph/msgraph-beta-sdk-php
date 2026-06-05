<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_c2f09e85;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForMfaSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_e561bc03 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf|null $queryParameters Request query parameters
    */
    public ?GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_e561bc03 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf {
        return new GetMetricsForMfaSignInSuccessWithInclusiveIntervalStart_03a69ecf($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
