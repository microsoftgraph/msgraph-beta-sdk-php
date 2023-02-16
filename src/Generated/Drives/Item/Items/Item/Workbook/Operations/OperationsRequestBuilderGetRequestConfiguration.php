<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Operations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OperationsRequestBuilderGetRequestConfiguration 
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
     * @var OperationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OperationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new operationsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return OperationsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $orderby = null, ?string $search = null, ?array $select = null): OperationsRequestBuilderGetQueryParameters {
        return new OperationsRequestBuilderGetQueryParameters($expand, $orderby, $search, $select);
    }

    /**
     * Instantiates a new operationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OperationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OperationsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
