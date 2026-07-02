<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_0fa5a220;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessInternetAppPolicyBlockedUsersWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_d4d8a089 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_d4d8a089 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9 {
        return new GetMetricsForNetworkAccessInternetAppPolicyBlockedUsers_f0cb29d9($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
