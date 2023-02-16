<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\RebootAnalyticsMetrics;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RebootAnalyticsMetricsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RebootAnalyticsMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RebootAnalyticsMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new rebootAnalyticsMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RebootAnalyticsMetricsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RebootAnalyticsMetricsRequestBuilderGetQueryParameters {
        return new RebootAnalyticsMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new rebootAnalyticsMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RebootAnalyticsMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RebootAnalyticsMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
