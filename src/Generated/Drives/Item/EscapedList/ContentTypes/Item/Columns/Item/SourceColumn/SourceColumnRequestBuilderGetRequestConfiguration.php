<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\EscapedList\ContentTypes\Item\Columns\Item\SourceColumn;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SourceColumnRequestBuilderGetRequestConfiguration 
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
     * @var SourceColumnRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SourceColumnRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new sourceColumnRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SourceColumnRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SourceColumnRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new sourceColumnRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SourceColumnRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SourceColumnRequestBuilderGetQueryParameters {
        return new SourceColumnRequestBuilderGetQueryParameters($expand, $select);
    }

}
