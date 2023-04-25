<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuoteLines\Item\Account;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccountRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AccountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccountRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new accountRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccountRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new accountRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccountRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccountRequestBuilderGetQueryParameters {
        return new AccountRequestBuilderGetQueryParameters($expand, $select);
    }

}
