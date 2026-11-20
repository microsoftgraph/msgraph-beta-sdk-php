<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\ObjectConnections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ObjectConnectionObjectItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ObjectConnectionObjectItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ObjectConnectionObjectItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ObjectConnectionObjectItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ObjectConnectionObjectItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ObjectConnectionObjectItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ObjectConnectionObjectItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ObjectConnectionObjectItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ObjectConnectionObjectItemRequestBuilderGetQueryParameters {
        return new ObjectConnectionObjectItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
