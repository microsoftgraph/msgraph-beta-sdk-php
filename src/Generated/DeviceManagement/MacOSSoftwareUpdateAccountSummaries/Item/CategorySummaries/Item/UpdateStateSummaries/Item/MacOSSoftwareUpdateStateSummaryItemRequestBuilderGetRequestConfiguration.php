<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries\Item\UpdateStateSummaries\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetRequestConfiguration 
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
     * @var MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters {
        return new MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
