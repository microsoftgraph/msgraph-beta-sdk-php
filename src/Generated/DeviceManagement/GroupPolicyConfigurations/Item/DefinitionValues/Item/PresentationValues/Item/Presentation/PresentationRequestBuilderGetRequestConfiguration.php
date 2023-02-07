<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\DefinitionValues\Item\PresentationValues\Item\Presentation;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PresentationRequestBuilderGetRequestConfiguration 
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
     * @var PresentationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PresentationRequestBuilderGetQueryParameters $queryParameters = null;
    
}
