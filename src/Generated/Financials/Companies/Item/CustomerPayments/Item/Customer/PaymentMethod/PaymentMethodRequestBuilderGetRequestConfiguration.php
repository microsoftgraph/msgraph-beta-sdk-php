<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CustomerPayments\Item\Customer\PaymentMethod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PaymentMethodRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PaymentMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PaymentMethodRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PaymentMethodRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PaymentMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PaymentMethodRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PaymentMethodRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PaymentMethodRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PaymentMethodRequestBuilderGetQueryParameters {
        return new PaymentMethodRequestBuilderGetQueryParameters($expand, $select);
    }

}
