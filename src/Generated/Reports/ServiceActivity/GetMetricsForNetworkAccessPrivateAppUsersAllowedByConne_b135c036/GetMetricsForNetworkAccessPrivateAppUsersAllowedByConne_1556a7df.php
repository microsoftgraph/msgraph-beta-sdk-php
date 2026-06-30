<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b135c036;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessPrivateAppUsersAllowedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_1556a7df extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_1556a7df and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff {
        return new GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b0e5ebff($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
