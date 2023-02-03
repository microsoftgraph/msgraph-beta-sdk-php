<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Templates\Item\Schema\MicrosoftGraphFunctions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FunctionsRequestBuilderGetRequestConfiguration 
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
     * @var FunctionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FunctionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
