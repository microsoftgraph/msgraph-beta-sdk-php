<?php

namespace Microsoft\Graph\Beta\Generated\Security\TriggerTypes\RetentionEventTypes\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetentionEventTypeItemRequestBuilderGetRequestConfiguration 
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
     * @var RetentionEventTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetentionEventTypeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RetentionEventTypeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RetentionEventTypeItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RetentionEventTypeItemRequestBuilderGetQueryParameters {
        return new RetentionEventTypeItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new RetentionEventTypeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RetentionEventTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetentionEventTypeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
