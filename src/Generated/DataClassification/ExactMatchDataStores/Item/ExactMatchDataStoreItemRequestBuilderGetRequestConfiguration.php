<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchDataStores\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExactMatchDataStoreItemRequestBuilderGetRequestConfiguration 
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
     * @var ExactMatchDataStoreItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExactMatchDataStoreItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExactMatchDataStoreItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExactMatchDataStoreItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ExactMatchDataStoreItemRequestBuilderGetQueryParameters {
        return new ExactMatchDataStoreItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ExactMatchDataStoreItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExactMatchDataStoreItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExactMatchDataStoreItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
