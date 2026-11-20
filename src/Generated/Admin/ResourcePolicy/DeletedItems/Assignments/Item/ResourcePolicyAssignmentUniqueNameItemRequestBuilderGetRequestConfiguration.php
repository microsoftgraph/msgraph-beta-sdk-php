<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\DeletedItems\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters {
        return new ResourcePolicyAssignmentUniqueNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
