<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\ResourcePerformanceMetrics;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourcePerformanceMetricsRequestBuilderGetRequestConfiguration 
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
     * @var ResourcePerformanceMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourcePerformanceMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new resourcePerformanceMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourcePerformanceMetricsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ResourcePerformanceMetricsRequestBuilderGetQueryParameters {
        return new ResourcePerformanceMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new resourcePerformanceMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ResourcePerformanceMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourcePerformanceMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
