<?php

namespace Microsoft\Graph\Beta\Generated\Me\Settings\ContactMergeSuggestions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContactMergeSuggestionsRequestBuilderGetRequestConfiguration 
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
     * @var ContactMergeSuggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContactMergeSuggestionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new contactMergeSuggestionsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ContactMergeSuggestionsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ContactMergeSuggestionsRequestBuilderGetQueryParameters {
        return new ContactMergeSuggestionsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new contactMergeSuggestionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ContactMergeSuggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContactMergeSuggestionsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
