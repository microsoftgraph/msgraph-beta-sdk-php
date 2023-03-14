<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegedSignupStatusItemRequestBuilderGetRequestConfiguration 
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
     * @var PrivilegedSignupStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegedSignupStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedSignupStatusItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedSignupStatusItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PrivilegedSignupStatusItemRequestBuilderGetQueryParameters {
        return new PrivilegedSignupStatusItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PrivilegedSignupStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedSignupStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedSignupStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
