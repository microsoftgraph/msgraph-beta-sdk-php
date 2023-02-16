<?php

namespace Microsoft\Graph\Beta\Generated\Directory\OutboundSharedUserProfiles\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutboundSharedUserProfileUserItemRequestBuilderGetRequestConfiguration 
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
     * @var OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters {
        return new OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new OutboundSharedUserProfileUserItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutboundSharedUserProfileUserItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
