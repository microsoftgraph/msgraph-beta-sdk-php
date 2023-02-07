<?php

namespace Microsoft\Graph\Beta\Generated\Security\IpSecurityProfiles;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IpSecurityProfilesRequestBuilderGetRequestConfiguration 
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
     * @var IpSecurityProfilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IpSecurityProfilesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
