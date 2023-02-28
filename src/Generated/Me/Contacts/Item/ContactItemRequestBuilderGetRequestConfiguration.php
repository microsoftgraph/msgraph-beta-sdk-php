<?php

namespace Microsoft\Graph\Beta\Generated\Me\Contacts\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContactItemRequestBuilderGetRequestConfiguration 
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
     * @var ContactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContactItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ContactItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return ContactItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): ContactItemRequestBuilderGetQueryParameters {
        return new ContactItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new ContactItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ContactItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContactItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
