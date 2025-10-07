<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Item\AlertConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AlertConfigurationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AlertConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AlertConfigurationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AlertConfigurationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AlertConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AlertConfigurationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AlertConfigurationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AlertConfigurationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AlertConfigurationRequestBuilderGetQueryParameters {
        return new AlertConfigurationRequestBuilderGetQueryParameters($expand, $select);
    }

}
