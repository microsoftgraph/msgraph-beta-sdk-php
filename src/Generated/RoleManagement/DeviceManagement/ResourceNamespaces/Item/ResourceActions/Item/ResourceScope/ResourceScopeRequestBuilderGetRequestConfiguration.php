<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\ResourceNamespaces\Item\ResourceActions\Item\ResourceScope;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceScopeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResourceScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceScopeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new resourceScopeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResourceScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourceScopeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new resourceScopeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourceScopeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResourceScopeRequestBuilderGetQueryParameters {
        return new ResourceScopeRequestBuilderGetQueryParameters($expand, $select);
    }

}
