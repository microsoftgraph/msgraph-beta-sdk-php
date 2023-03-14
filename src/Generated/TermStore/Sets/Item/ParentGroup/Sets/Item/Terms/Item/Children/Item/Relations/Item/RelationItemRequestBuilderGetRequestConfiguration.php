<?php

namespace Microsoft\Graph\Beta\Generated\TermStore\Sets\Item\ParentGroup\Sets\Item\Terms\Item\Children\Item\Relations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RelationItemRequestBuilderGetRequestConfiguration 
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
     * @var RelationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RelationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RelationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RelationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RelationItemRequestBuilderGetQueryParameters {
        return new RelationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new RelationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RelationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RelationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
