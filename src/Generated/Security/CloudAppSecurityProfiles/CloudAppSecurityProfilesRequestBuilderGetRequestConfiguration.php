<?php

namespace Microsoft\Graph\Beta\Generated\Security\CloudAppSecurityProfiles;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudAppSecurityProfilesRequestBuilderGetRequestConfiguration 
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
     * @var CloudAppSecurityProfilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudAppSecurityProfilesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
