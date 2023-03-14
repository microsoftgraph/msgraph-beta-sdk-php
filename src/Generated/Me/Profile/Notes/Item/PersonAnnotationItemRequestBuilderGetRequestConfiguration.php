<?php

namespace Microsoft\Graph\Beta\Generated\Me\Profile\Notes\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PersonAnnotationItemRequestBuilderGetRequestConfiguration 
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
     * @var PersonAnnotationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PersonAnnotationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PersonAnnotationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PersonAnnotationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PersonAnnotationItemRequestBuilderGetQueryParameters {
        return new PersonAnnotationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PersonAnnotationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PersonAnnotationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PersonAnnotationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
