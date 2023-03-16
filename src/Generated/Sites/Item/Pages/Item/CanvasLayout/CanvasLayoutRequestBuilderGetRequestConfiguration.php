<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\Pages\Item\CanvasLayout;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CanvasLayoutRequestBuilderGetRequestConfiguration 
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
     * @var CanvasLayoutRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CanvasLayoutRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new canvasLayoutRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CanvasLayoutRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CanvasLayoutRequestBuilderGetQueryParameters {
        return new CanvasLayoutRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new canvasLayoutRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CanvasLayoutRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CanvasLayoutRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
