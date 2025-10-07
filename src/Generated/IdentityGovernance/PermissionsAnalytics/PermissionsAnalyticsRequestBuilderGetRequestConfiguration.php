<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\PermissionsAnalytics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionsAnalyticsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PermissionsAnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionsAnalyticsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PermissionsAnalyticsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PermissionsAnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionsAnalyticsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PermissionsAnalyticsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PermissionsAnalyticsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PermissionsAnalyticsRequestBuilderGetQueryParameters {
        return new PermissionsAnalyticsRequestBuilderGetQueryParameters($expand, $select);
    }

}
