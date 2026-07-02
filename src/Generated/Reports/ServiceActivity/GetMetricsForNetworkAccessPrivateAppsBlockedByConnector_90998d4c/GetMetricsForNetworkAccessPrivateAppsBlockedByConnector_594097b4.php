<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_90998d4c;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessPrivateAppsBlockedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_594097b4 extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_594097b4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e {
        return new GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_77cd440e($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
