<?php

namespace Microsoft\Graph\Beta\Generated\Programs\Item\Controls\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProgramControlItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ProgramControlItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProgramControlItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProgramControlItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProgramControlItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ProgramControlItemRequestBuilderGetQueryParameters {
        return new ProgramControlItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ProgramControlItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ProgramControlItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProgramControlItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
