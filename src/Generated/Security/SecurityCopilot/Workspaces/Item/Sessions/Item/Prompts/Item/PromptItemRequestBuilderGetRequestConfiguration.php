<?php

namespace Microsoft\Graph\Beta\Generated\Security\SecurityCopilot\Workspaces\Item\Sessions\Item\Prompts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PromptItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PromptItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PromptItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PromptItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PromptItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PromptItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PromptItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PromptItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PromptItemRequestBuilderGetQueryParameters {
        return new PromptItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
