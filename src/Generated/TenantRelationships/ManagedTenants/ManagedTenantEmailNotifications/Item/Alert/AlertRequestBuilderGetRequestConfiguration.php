<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\Item\Alert;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AlertRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AlertRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AlertRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AlertRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AlertRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AlertRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AlertRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AlertRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AlertRequestBuilderGetQueryParameters {
        return new AlertRequestBuilderGetQueryParameters($expand, $select);
    }

}
