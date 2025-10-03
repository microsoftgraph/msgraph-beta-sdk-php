<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item\IntendedDeploymentProfile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IntendedDeploymentProfileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IntendedDeploymentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IntendedDeploymentProfileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IntendedDeploymentProfileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntendedDeploymentProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntendedDeploymentProfileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntendedDeploymentProfileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IntendedDeploymentProfileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IntendedDeploymentProfileRequestBuilderGetQueryParameters {
        return new IntendedDeploymentProfileRequestBuilderGetQueryParameters($expand, $select);
    }

}
