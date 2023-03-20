<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CompanyInformation\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CompanyInformationItemRequestBuilderGetRequestConfiguration 
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
     * @var CompanyInformationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CompanyInformationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CompanyInformationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CompanyInformationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CompanyInformationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CompanyInformationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CompanyInformationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CompanyInformationItemRequestBuilderGetQueryParameters {
        return new CompanyInformationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
