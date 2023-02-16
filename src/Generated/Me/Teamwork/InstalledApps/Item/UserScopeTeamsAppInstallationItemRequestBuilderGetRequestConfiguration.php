<?php

namespace Microsoft\Graph\Beta\Generated\Me\Teamwork\InstalledApps\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration 
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
     * @var UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters {
        return new UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
