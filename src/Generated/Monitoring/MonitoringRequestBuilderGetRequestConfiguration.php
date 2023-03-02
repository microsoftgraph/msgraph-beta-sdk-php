<?php

namespace Microsoft\Graph\Beta\Generated\Monitoring;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MonitoringRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MonitoringRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MonitoringRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new monitoringRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MonitoringRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MonitoringRequestBuilderGetQueryParameters {
        return new MonitoringRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new monitoringRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MonitoringRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MonitoringRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
