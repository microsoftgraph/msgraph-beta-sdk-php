<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetRequestConfiguration 
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
     * @var IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters {
        return new IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
