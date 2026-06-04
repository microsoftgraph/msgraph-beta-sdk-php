<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_d8ece54f;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessInternetAppPolicyBlockedAppsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_612763e4 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_612763e4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb {
        return new GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_601ae0fb($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
