<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedApproval;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegedApprovalRequestBuilderGetRequestConfiguration 
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
     * @var PrivilegedApprovalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegedApprovalRequestBuilderGetQueryParameters $queryParameters = null;
    
}
