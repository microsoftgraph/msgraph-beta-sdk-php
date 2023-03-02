<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ApplicationSignInDetailedSummary\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplicationSignInDetailedSummaryItemRequestBuilderGetRequestConfiguration 
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
     * @var ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters {
        return new ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ApplicationSignInDetailedSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicationSignInDetailedSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
