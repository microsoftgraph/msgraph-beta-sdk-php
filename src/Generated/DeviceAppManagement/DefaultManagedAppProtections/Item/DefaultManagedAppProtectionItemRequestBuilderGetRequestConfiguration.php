<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\DefaultManagedAppProtections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefaultManagedAppProtectionItemRequestBuilderGetRequestConfiguration 
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
     * @var DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters {
        return new DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DefaultManagedAppProtectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefaultManagedAppProtectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
