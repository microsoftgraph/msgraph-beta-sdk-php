<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Directory\ResourceNamespaces;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceNamespacesRequestBuilderGetRequestConfiguration 
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
     * @var ResourceNamespacesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceNamespacesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
