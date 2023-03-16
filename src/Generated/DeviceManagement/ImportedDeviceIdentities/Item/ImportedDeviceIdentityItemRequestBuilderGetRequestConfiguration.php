<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ImportedDeviceIdentityItemRequestBuilderGetRequestConfiguration 
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
     * @var ImportedDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ImportedDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ImportedDeviceIdentityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ImportedDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ImportedDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ImportedDeviceIdentityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ImportedDeviceIdentityItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ImportedDeviceIdentityItemRequestBuilderGetQueryParameters {
        return new ImportedDeviceIdentityItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
