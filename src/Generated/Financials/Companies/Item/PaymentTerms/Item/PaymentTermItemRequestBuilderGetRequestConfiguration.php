<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\PaymentTerms\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PaymentTermItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PaymentTermItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PaymentTermItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PaymentTermItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PaymentTermItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PaymentTermItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PaymentTermItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PaymentTermItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PaymentTermItemRequestBuilderGetQueryParameters {
        return new PaymentTermItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
