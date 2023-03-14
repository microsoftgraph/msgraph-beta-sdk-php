<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration 
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
     * @var ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters {
        return new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ImportedWindowsAutopilotDeviceIdentityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
