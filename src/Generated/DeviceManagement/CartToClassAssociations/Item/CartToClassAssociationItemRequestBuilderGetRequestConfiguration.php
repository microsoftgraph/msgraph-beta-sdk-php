<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CartToClassAssociations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CartToClassAssociationItemRequestBuilderGetRequestConfiguration 
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
     * @var CartToClassAssociationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CartToClassAssociationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CartToClassAssociationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CartToClassAssociationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CartToClassAssociationItemRequestBuilderGetQueryParameters {
        return new CartToClassAssociationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CartToClassAssociationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CartToClassAssociationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CartToClassAssociationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
