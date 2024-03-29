<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Journals\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class JournalItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var JournalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?JournalItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new JournalItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param JournalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?JournalItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new JournalItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return JournalItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): JournalItemRequestBuilderGetQueryParameters {
        return new JournalItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
