<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementIntentAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementIntentAssignmentItemRequestBuilderGetRe_72a4c88a extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c|null $queryParameters Request query parameters
    */
    public ?DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementIntentAssignmentItemRequestBuilderGetRe_72a4c88a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c {
        return new DeviceManagementIntentAssignmentItemRequestBuilderGetQu_409c964c($expand, $select);
    }

}
