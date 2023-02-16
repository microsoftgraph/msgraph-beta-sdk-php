<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item\DefinitionFile;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefinitionFileRequestBuilderGetRequestConfiguration 
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
     * @var DefinitionFileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefinitionFileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new definitionFileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefinitionFileRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DefinitionFileRequestBuilderGetQueryParameters {
        return new DefinitionFileRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new definitionFileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DefinitionFileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefinitionFileRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
