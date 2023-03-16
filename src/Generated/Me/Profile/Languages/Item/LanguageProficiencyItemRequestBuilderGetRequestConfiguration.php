<?php

namespace Microsoft\Graph\Beta\Generated\Me\Profile\Languages\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LanguageProficiencyItemRequestBuilderGetRequestConfiguration 
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
     * @var LanguageProficiencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LanguageProficiencyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LanguageProficiencyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LanguageProficiencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LanguageProficiencyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LanguageProficiencyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LanguageProficiencyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LanguageProficiencyItemRequestBuilderGetQueryParameters {
        return new LanguageProficiencyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
