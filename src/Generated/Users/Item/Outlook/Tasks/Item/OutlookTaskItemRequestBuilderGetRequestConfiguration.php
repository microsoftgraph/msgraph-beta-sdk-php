<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Outlook\Tasks\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutlookTaskItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var OutlookTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutlookTaskItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OutlookTaskItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return OutlookTaskItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): OutlookTaskItemRequestBuilderGetQueryParameters {
        return new OutlookTaskItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new OutlookTaskItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OutlookTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutlookTaskItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
