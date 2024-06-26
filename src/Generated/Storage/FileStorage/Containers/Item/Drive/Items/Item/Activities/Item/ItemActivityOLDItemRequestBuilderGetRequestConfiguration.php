<?php

namespace Microsoft\Graph\Beta\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Activities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ItemActivityOLDItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ItemActivityOLDItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ItemActivityOLDItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ItemActivityOLDItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ItemActivityOLDItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ItemActivityOLDItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ItemActivityOLDItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ItemActivityOLDItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ItemActivityOLDItemRequestBuilderGetQueryParameters {
        return new ItemActivityOLDItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
