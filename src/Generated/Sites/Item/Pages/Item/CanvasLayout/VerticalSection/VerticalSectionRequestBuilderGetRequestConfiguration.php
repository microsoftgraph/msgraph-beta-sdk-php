<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\Pages\Item\CanvasLayout\VerticalSection;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VerticalSectionRequestBuilderGetRequestConfiguration 
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
     * @var VerticalSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VerticalSectionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new verticalSectionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VerticalSectionRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): VerticalSectionRequestBuilderGetQueryParameters {
        return new VerticalSectionRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new verticalSectionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param VerticalSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VerticalSectionRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
