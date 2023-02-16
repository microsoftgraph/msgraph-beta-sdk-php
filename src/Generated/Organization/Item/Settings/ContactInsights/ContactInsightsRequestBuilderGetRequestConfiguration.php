<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\ContactInsights;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContactInsightsRequestBuilderGetRequestConfiguration 
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
     * @var ContactInsightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContactInsightsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new contactInsightsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ContactInsightsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ContactInsightsRequestBuilderGetQueryParameters {
        return new ContactInsightsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new contactInsightsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ContactInsightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContactInsightsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
