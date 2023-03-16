<?php

namespace Microsoft\Graph\Beta\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\OutlineIcon;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutlineIconRequestBuilderGetRequestConfiguration 
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
     * @var OutlineIconRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutlineIconRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new outlineIconRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutlineIconRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutlineIconRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new outlineIconRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OutlineIconRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OutlineIconRequestBuilderGetQueryParameters {
        return new OutlineIconRequestBuilderGetQueryParameters($expand, $select);
    }

}
