<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\Pages\Item\CanvasLayout\HorizontalSections\Item\Columns\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HorizontalSectionColumnItemRequestBuilderGetRequestConfiguration 
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
     * @var HorizontalSectionColumnItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HorizontalSectionColumnItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HorizontalSectionColumnItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HorizontalSectionColumnItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): HorizontalSectionColumnItemRequestBuilderGetQueryParameters {
        return new HorizontalSectionColumnItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new HorizontalSectionColumnItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param HorizontalSectionColumnItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HorizontalSectionColumnItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
