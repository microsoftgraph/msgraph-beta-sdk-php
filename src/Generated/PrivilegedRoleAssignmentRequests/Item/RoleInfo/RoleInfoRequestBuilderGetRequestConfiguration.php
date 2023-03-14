<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignmentRequests\Item\RoleInfo;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleInfoRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RoleInfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleInfoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new roleInfoRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RoleInfoRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RoleInfoRequestBuilderGetQueryParameters {
        return new RoleInfoRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new roleInfoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoleInfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleInfoRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
