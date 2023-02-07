<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Schema\MicrosoftGraphFunctions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphFunctionsRequestBuilderGetRequestConfiguration 
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
     * @var MicrosoftGraphFunctionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphFunctionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
