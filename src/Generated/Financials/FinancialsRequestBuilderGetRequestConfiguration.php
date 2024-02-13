<?php

namespace Microsoft\Graph\Beta\Generated\Financials;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FinancialsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FinancialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FinancialsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FinancialsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FinancialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FinancialsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FinancialsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FinancialsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FinancialsRequestBuilderGetQueryParameters {
        return new FinancialsRequestBuilderGetQueryParameters($expand, $select);
    }

}
