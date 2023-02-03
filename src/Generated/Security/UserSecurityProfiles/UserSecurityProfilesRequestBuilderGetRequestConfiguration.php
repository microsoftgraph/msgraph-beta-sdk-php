<?php

namespace Microsoft\Graph\Beta\Generated\Security\UserSecurityProfiles;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserSecurityProfilesRequestBuilderGetRequestConfiguration 
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
     * @var UserSecurityProfilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserSecurityProfilesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
