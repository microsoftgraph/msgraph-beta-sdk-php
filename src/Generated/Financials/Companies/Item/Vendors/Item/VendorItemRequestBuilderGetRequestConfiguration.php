<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Vendors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VendorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VendorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VendorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VendorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VendorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VendorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VendorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VendorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VendorItemRequestBuilderGetQueryParameters {
        return new VendorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
