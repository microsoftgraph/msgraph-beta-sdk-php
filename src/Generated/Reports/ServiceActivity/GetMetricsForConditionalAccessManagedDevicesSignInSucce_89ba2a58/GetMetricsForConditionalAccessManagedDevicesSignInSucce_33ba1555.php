<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessManagedDevicesSignInSucce_89ba2a58;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForConditionalAccessManagedDevicesSignInSucce_33ba1555 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f|null $queryParameters Request query parameters
    */
    public ?GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForConditionalAccessManagedDevicesSignInSucce_33ba1555 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f {
        return new GetMetricsForConditionalAccessManagedDevicesSignInSucce_ca9c970f($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
