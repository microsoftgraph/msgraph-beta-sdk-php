<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Journals\Item\JournalLines\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class JournalLineItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var JournalLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?JournalLineItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new JournalLineItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param JournalLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?JournalLineItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new JournalLineItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return JournalLineItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): JournalLineItemRequestBuilderGetQueryParameters {
        return new JournalLineItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
