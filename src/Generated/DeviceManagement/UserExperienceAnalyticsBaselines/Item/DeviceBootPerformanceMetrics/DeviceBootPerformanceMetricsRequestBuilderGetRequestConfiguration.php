<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\DeviceBootPerformanceMetrics;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceBootPerformanceMetricsRequestBuilderGetRequestConfiguration 
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
     * @var DeviceBootPerformanceMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceBootPerformanceMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceBootPerformanceMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceBootPerformanceMetricsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeviceBootPerformanceMetricsRequestBuilderGetQueryParameters {
        return new DeviceBootPerformanceMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new deviceBootPerformanceMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeviceBootPerformanceMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceBootPerformanceMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
