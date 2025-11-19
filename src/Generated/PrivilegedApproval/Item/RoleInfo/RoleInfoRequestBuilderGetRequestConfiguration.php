<?php

namespace Microsoft\\Graph\\Beta\\Generated\PrivilegedApproval\Item\RoleInfo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleInfoRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RoleInfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleInfoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RoleInfoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoleInfoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleInfoRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RoleInfoRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RoleInfoRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RoleInfoRequestBuilderGetQueryParameters {
        return new RoleInfoRequestBuilderGetQueryParameters($expand, $select);
    }

}
