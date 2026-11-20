<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters {
        return new ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
