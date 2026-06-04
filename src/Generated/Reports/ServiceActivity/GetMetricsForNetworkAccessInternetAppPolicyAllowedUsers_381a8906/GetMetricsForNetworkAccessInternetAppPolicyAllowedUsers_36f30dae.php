<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_381a8906;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessInternetAppPolicyAllowedUsersWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_36f30dae extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_36f30dae and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249 {
        return new GetMetricsForNetworkAccessInternetAppPolicyAllowedUsers_9da07249($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
