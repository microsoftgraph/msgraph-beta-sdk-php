<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkSettings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidForWorkSettingsRequestBuilderGetRequestConfiguration 
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
     * @var AndroidForWorkSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AndroidForWorkSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new androidForWorkSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidForWorkSettingsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AndroidForWorkSettingsRequestBuilderGetQueryParameters {
        return new AndroidForWorkSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new androidForWorkSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AndroidForWorkSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidForWorkSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
