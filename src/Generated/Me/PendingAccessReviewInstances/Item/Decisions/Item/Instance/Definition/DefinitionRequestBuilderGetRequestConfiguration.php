<?php

namespace Microsoft\Graph\Beta\Generated\Me\PendingAccessReviewInstances\Item\Decisions\Item\Instance\Definition;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefinitionRequestBuilderGetRequestConfiguration 
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
     * @var DefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefinitionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new definitionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefinitionRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DefinitionRequestBuilderGetQueryParameters {
        return new DefinitionRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new definitionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefinitionRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
