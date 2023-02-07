<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegedAccessRequestBuilderGetRequestConfiguration 
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
     * @var PrivilegedAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessRequestBuilderGetQueryParameters $queryParameters = null;
    
}
