<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\TenantAttachRBAC;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantAttachRBACRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TenantAttachRBACRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantAttachRBACRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new tenantAttachRBACRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TenantAttachRBACRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantAttachRBACRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new tenantAttachRBACRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantAttachRBACRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TenantAttachRBACRequestBuilderGetQueryParameters {
        return new TenantAttachRBACRequestBuilderGetQueryParameters($expand, $select);
    }

}
