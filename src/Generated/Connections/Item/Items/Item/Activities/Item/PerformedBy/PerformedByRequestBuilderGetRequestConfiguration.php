<?php

namespace Microsoft\Graph\Beta\Generated\Connections\Item\Items\Item\Activities\Item\PerformedBy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PerformedByRequestBuilderGetRequestConfiguration 
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
     * @var PerformedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PerformedByRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new performedByRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PerformedByRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PerformedByRequestBuilderGetQueryParameters {
        return new PerformedByRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new performedByRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PerformedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PerformedByRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
