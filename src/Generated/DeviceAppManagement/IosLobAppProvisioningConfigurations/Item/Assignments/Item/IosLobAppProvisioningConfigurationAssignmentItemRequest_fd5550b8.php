<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: IosLobAppProvisioningConfigurationAssignmentItemRequestBuilderGetRequestConfiguration
*/
class IosLobAppProvisioningConfigurationAssignmentItemRequest_fd5550b8 extends BaseRequestConfiguration 
{
    /**
     * @var IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03|null $queryParameters Request query parameters
    */
    public ?IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03 $queryParameters = null;
    
    /**
     * Instantiates a new IosLobAppProvisioningConfigurationAssignmentItemRequest_fd5550b8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03 {
        return new IosLobAppProvisioningConfigurationAssignmentItemRequest_9f62ba03($expand, $select);
    }

}
