<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotDeploymentProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsAutopilotDeploymentProfileItemRequestBuilderGetRequestConfiguration
*/
class WindowsAutopilotDeploymentProfileItemRequestBuilderGetR_03137de5 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf|null $queryParameters Request query parameters
    */
    public ?WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf $queryParameters = null;
    
    /**
     * Instantiates a new WindowsAutopilotDeploymentProfileItemRequestBuilderGetR_03137de5 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf {
        return new WindowsAutopilotDeploymentProfileItemRequestBuilderGetQ_f8f7fadf($expand, $select);
    }

}
