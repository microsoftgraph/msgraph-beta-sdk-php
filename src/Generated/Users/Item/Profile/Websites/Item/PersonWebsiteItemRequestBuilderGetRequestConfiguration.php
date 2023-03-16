<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Profile\Websites\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PersonWebsiteItemRequestBuilderGetRequestConfiguration 
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
     * @var PersonWebsiteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PersonWebsiteItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PersonWebsiteItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PersonWebsiteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PersonWebsiteItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PersonWebsiteItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PersonWebsiteItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PersonWebsiteItemRequestBuilderGetQueryParameters {
        return new PersonWebsiteItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
