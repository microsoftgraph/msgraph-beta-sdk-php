<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\HealthMonitoring;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HealthMonitoringRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HealthMonitoringRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HealthMonitoringRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HealthMonitoringRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HealthMonitoringRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HealthMonitoringRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HealthMonitoringRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HealthMonitoringRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HealthMonitoringRequestBuilderGetQueryParameters {
        return new HealthMonitoringRequestBuilderGetQueryParameters($expand, $select);
    }

}
