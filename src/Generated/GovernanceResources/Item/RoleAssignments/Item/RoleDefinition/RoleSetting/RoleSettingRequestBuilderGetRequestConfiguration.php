<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\Item\RoleDefinition\RoleSetting;

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
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RoleSettingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleSettingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new roleSettingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RoleSettingRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RoleSettingRequestBuilderGetQueryParameters {
        return new RoleSettingRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new roleSettingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoleSettingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleSettingRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
