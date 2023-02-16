<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Oauth2PermissionGrants\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OAuth2PermissionGrantItemRequestBuilderGetRequestConfiguration 
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
     * @var OAuth2PermissionGrantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OAuth2PermissionGrantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OAuth2PermissionGrantItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OAuth2PermissionGrantItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): OAuth2PermissionGrantItemRequestBuilderGetQueryParameters {
        return new OAuth2PermissionGrantItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new OAuth2PermissionGrantItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OAuth2PermissionGrantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OAuth2PermissionGrantItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
