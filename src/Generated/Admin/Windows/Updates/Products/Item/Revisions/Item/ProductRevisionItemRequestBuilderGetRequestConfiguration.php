<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\Item\Revisions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProductRevisionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProductRevisionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProductRevisionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProductRevisionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProductRevisionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProductRevisionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProductRevisionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProductRevisionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProductRevisionItemRequestBuilderGetQueryParameters {
        return new ProductRevisionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
