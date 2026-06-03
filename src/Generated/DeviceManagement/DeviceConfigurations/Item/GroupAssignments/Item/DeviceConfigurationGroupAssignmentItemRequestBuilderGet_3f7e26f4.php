<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\GroupAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceConfigurationGroupAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationGroupAssignmentItemRequestBuilderGet_3f7e26f4 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationGroupAssignmentItemRequestBuilderGet_3f7e26f4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a {
        return new DeviceConfigurationGroupAssignmentItemRequestBuilderGet_ea838c1a($expand, $select);
    }

}
