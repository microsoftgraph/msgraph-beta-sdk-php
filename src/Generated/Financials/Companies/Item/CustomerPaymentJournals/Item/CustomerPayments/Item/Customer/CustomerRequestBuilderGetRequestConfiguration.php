<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CustomerPaymentJournals\Item\CustomerPayments\Item\Customer;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomerRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CustomerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomerRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomerRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomerRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomerRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomerRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomerRequestBuilderGetQueryParameters {
        return new CustomerRequestBuilderGetQueryParameters($expand, $select);
    }

}
