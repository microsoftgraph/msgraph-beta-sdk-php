<?php

namespace Microsoft\Graph\Beta\Generated\Agents\Item\CopilotTools\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CopilotToolCopilotToolNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CopilotToolCopilotToolNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters {
        return new CopilotToolCopilotToolNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
