<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_f79433d8;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getMetricsForNetworkAccessRemoteNetworkBranchesBGPDisconnectedWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_6f52441c extends BaseRequestConfiguration 
{
    /**
     * @var GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8|null $queryParameters Request query parameters
    */
    public ?GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8 $queryParameters = null;
    
    /**
     * Instantiates a new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_6f52441c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8 {
        return new GetMetricsForNetworkAccessRemoteNetworkBranchesBGPDisco_ac0edfe8($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
