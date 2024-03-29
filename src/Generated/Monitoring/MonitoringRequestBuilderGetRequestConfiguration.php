<?php

namespace Microsoft\Graph\Beta\Generated\Monitoring;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MonitoringRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MonitoringRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MonitoringRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MonitoringRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MonitoringRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MonitoringRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MonitoringRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MonitoringRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MonitoringRequestBuilderGetQueryParameters {
        return new MonitoringRequestBuilderGetQueryParameters($expand, $select);
    }

}
