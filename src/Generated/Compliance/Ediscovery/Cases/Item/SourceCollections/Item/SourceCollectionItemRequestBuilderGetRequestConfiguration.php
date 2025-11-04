<?php

namespace Microsoft\\Graph\\Beta\\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SourceCollectionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SourceCollectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SourceCollectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SourceCollectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SourceCollectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SourceCollectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SourceCollectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SourceCollectionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SourceCollectionItemRequestBuilderGetQueryParameters {
        return new SourceCollectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
