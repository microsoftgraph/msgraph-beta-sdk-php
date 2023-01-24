<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\MigratableTo;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MigratableToRequestBuilderGetRequestConfiguration 
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
     * @var MigratableToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MigratableToRequestBuilderGetQueryParameters $queryParameters = null;
    
}
