<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CustomerPayments\Item\Customer\PaymentMethod;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PaymentMethodRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var PaymentMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PaymentMethodRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new paymentMethodRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PaymentMethodRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PaymentMethodRequestBuilderGetQueryParameters {
        return new PaymentMethodRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new paymentMethodRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PaymentMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PaymentMethodRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
