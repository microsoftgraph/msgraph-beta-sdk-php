<?php

namespace Microsoft\Graph\Beta\Generated\Security\Triggers\RetentionEvents\Item\RetentionEventType;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetentionEventTypeRequestBuilderGetRequestConfiguration 
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
     * @var RetentionEventTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetentionEventTypeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new retentionEventTypeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RetentionEventTypeRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RetentionEventTypeRequestBuilderGetQueryParameters {
        return new RetentionEventTypeRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new retentionEventTypeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RetentionEventTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetentionEventTypeRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
