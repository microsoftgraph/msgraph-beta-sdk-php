<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigManagerCollections;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConfigManagerCollectionsRequestBuilderGetRequestConfiguration 
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
     * @var ConfigManagerCollectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConfigManagerCollectionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
