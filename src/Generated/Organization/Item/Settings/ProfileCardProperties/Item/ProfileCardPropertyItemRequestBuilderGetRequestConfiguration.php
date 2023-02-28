<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\ProfileCardProperties\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProfileCardPropertyItemRequestBuilderGetRequestConfiguration 
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
     * @var ProfileCardPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProfileCardPropertyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProfileCardPropertyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProfileCardPropertyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ProfileCardPropertyItemRequestBuilderGetQueryParameters {
        return new ProfileCardPropertyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ProfileCardPropertyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ProfileCardPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProfileCardPropertyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
