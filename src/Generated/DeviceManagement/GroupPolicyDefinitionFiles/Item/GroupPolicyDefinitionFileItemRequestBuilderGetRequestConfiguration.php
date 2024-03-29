<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitionFiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupPolicyDefinitionFileItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GroupPolicyDefinitionFileItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters {
        return new GroupPolicyDefinitionFileItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
