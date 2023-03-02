<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetRequestConfiguration 
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
     * @var UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters {
        return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
