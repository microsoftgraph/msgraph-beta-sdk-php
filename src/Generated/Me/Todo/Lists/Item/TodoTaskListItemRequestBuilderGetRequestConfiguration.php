<?php

namespace Microsoft\Graph\Beta\Generated\Me\Todo\Lists\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TodoTaskListItemRequestBuilderGetRequestConfiguration 
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
     * @var TodoTaskListItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TodoTaskListItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TodoTaskListItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TodoTaskListItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TodoTaskListItemRequestBuilderGetQueryParameters {
        return new TodoTaskListItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new TodoTaskListItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TodoTaskListItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TodoTaskListItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
