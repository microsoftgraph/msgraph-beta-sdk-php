<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Employees\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmployeeItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmployeeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmployeeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmployeeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmployeeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmployeeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmployeeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmployeeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmployeeItemRequestBuilderGetQueryParameters {
        return new EmployeeItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
