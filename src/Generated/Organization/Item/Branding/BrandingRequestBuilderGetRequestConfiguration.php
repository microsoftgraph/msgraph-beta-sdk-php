<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Branding;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BrandingRequestBuilderGetRequestConfiguration 
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
     * @var BrandingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BrandingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new brandingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BrandingRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): BrandingRequestBuilderGetQueryParameters {
        return new BrandingRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new brandingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param BrandingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BrandingRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
