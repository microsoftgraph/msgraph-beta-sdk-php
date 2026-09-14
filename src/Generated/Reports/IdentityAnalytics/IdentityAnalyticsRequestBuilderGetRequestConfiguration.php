<?php

namespace Microsoft\Graph\Beta\Generated\Reports\IdentityAnalytics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityAnalyticsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentityAnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityAnalyticsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityAnalyticsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityAnalyticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityAnalyticsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityAnalyticsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityAnalyticsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentityAnalyticsRequestBuilderGetQueryParameters {
        return new IdentityAnalyticsRequestBuilderGetQueryParameters($expand, $select);
    }

}
