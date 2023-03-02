<?php

namespace Microsoft\Graph\Beta\Generated\Security\Labels\RetentionLabels\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetentionLabelItemRequestBuilderGetRequestConfiguration 
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
     * @var RetentionLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetentionLabelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RetentionLabelItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RetentionLabelItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RetentionLabelItemRequestBuilderGetQueryParameters {
        return new RetentionLabelItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new RetentionLabelItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RetentionLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetentionLabelItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
