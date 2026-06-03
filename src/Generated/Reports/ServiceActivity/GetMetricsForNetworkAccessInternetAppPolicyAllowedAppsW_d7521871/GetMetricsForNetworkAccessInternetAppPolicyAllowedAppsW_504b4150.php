<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_d7521871;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessInternetAppPolicyAllowedAppsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_504b4150 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_504b4150 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af {
        return new GetMetricsForNetworkAccessInternetAppPolicyAllowedAppsW_4d19d7af($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
