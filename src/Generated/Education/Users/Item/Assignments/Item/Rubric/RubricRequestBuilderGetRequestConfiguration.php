<?php

namespace Microsoft\Graph\Beta\Generated\Education\Users\Item\Assignments\Item\Rubric;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RubricRequestBuilderGetRequestConfiguration 
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
     * @var RubricRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RubricRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new rubricRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RubricRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RubricRequestBuilderGetQueryParameters {
        return new RubricRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new rubricRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RubricRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RubricRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
