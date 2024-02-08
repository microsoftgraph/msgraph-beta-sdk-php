<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsAnalytics\Gcp\PermissionsCreepIndexDistributions\Item\AuthorizationSystem;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthorizationSystemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuthorizationSystemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthorizationSystemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuthorizationSystemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthorizationSystemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthorizationSystemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthorizationSystemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthorizationSystemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthorizationSystemRequestBuilderGetQueryParameters {
        return new AuthorizationSystemRequestBuilderGetQueryParameters($expand, $select);
    }

}
