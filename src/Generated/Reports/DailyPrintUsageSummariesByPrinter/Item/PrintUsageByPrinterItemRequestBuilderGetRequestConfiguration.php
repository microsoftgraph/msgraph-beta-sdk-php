<?php

namespace Microsoft\Graph\Beta\Generated\Reports\DailyPrintUsageSummariesByPrinter\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrintUsageByPrinterItemRequestBuilderGetRequestConfiguration 
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
     * @var PrintUsageByPrinterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrintUsageByPrinterItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrintUsageByPrinterItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrintUsageByPrinterItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PrintUsageByPrinterItemRequestBuilderGetQueryParameters {
        return new PrintUsageByPrinterItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PrintUsageByPrinterItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PrintUsageByPrinterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrintUsageByPrinterItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
