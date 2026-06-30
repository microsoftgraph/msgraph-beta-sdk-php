<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_1781beab;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessPrivateAppsAllowedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_50741d94 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_50741d94 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080 {
        return new GetMetricsForNetworkAccessPrivateAppsAllowedByConnector_4cd7c080($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
