<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Catalog\Entries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CatalogEntryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CatalogEntryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CatalogEntryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CatalogEntryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CatalogEntryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CatalogEntryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CatalogEntryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CatalogEntryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CatalogEntryItemRequestBuilderGetQueryParameters {
        return new CatalogEntryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
