<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: GroupPolicyUploadedDefinitionFileItemRequestBuilderGetRequestConfiguration
*/
class GroupPolicyUploadedDefinitionFileItemRequestBuilderGetR_22a808da extends BaseRequestConfiguration 
{
    /**
     * @var GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6|null $queryParameters Request query parameters
    */
    public ?GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6 $queryParameters = null;
    
    /**
     * Instantiates a new GroupPolicyUploadedDefinitionFileItemRequestBuilderGetR_22a808da and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6 {
        return new GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQ_c2aa9cc6($expand, $select);
    }

}
