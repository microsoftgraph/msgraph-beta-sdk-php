<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_28fa2da6;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessPrivateAppUsersBlockedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_4b3e2243 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_4b3e2243 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7 {
        return new GetMetricsForNetworkAccessPrivateAppUsersBlockedByConne_816bc0d7($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
