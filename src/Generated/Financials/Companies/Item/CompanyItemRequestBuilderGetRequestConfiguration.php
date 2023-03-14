<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CompanyItemRequestBuilderGetRequestConfiguration 
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
     * @var CompanyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CompanyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CompanyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CompanyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CompanyItemRequestBuilderGetQueryParameters {
        return new CompanyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CompanyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CompanyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CompanyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
