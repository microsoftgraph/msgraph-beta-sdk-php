<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\SecurityCopilot\Workspaces\Item\Plugins\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PluginNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PluginNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PluginNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PluginNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PluginNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PluginNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PluginNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PluginNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PluginNameItemRequestBuilderGetQueryParameters {
        return new PluginNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
