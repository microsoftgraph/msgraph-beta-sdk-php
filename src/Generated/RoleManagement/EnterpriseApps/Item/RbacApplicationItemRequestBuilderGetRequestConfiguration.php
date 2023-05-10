<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RbacApplicationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RbacApplicationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RbacApplicationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RbacApplicationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RbacApplicationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RbacApplicationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RbacApplicationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RbacApplicationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RbacApplicationItemRequestBuilderGetQueryParameters {
        return new RbacApplicationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
