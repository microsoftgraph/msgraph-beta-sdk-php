<?php

namespace Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\IntelProfiles\Item\Indicators\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration 
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
     * @var IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters {
        return new IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
