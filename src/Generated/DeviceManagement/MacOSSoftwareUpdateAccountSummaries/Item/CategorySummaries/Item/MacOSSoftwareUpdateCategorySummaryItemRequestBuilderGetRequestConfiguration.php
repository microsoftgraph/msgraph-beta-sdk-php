<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetRequestConfiguration 
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
     * @var MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters {
        return new MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
