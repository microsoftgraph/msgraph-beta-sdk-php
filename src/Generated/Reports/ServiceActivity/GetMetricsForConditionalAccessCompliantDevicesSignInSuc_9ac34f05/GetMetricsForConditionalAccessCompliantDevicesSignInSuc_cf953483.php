<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessCompliantDevicesSignInSuc_9ac34f05;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForConditionalAccessCompliantDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForConditionalAccessCompliantDevicesSignInSuc_cf953483 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b|null $queryParameters Request query parameters
    */
    public ?GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForConditionalAccessCompliantDevicesSignInSuc_cf953483 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b {
        return new GetMetricsForConditionalAccessCompliantDevicesSignInSuc_ad2fbc1b($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
