<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\GeneralLedgerEntries\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GeneralLedgerEntryItemRequestBuilderGetRequestConfiguration 
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
     * @var GeneralLedgerEntryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GeneralLedgerEntryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GeneralLedgerEntryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GeneralLedgerEntryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GeneralLedgerEntryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GeneralLedgerEntryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GeneralLedgerEntryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GeneralLedgerEntryItemRequestBuilderGetQueryParameters {
        return new GeneralLedgerEntryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
