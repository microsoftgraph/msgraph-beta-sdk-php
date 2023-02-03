<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceRoleAssignments\Item\RoleDefinition\RoleSetting;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleSettingRequestBuilderGetRequestConfiguration 
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
     * @var RoleSettingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleSettingRequestBuilderGetQueryParameters $queryParameters = null;
    
}
