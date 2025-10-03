<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CountriesRegions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CountryRegionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CountryRegionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CountryRegionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CountryRegionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CountryRegionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CountryRegionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CountryRegionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CountryRegionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CountryRegionItemRequestBuilderGetQueryParameters {
        return new CountryRegionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
