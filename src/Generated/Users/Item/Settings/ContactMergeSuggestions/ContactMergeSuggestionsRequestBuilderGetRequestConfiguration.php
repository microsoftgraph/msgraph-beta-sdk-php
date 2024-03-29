<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Settings\ContactMergeSuggestions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContactMergeSuggestionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ContactMergeSuggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContactMergeSuggestionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ContactMergeSuggestionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ContactMergeSuggestionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContactMergeSuggestionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ContactMergeSuggestionsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ContactMergeSuggestionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ContactMergeSuggestionsRequestBuilderGetQueryParameters {
        return new ContactMergeSuggestionsRequestBuilderGetQueryParameters($expand, $select);
    }

}
