<?php

namespace Microsoft\Graph\Beta\Generated\ProgramControls\Item\Program\Controls;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ControlsRequestBuilderGetRequestConfiguration 
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
     * @var ControlsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ControlsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
