<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\WindowsAutopilotSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsAutopilotSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WindowsAutopilotSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsAutopilotSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsAutopilotSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsAutopilotSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsAutopilotSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsAutopilotSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsAutopilotSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsAutopilotSettingsRequestBuilderGetQueryParameters {
        return new WindowsAutopilotSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
