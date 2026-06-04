<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\UserStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementIntentUserStateItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementIntentUserStateItemRequestBuilderGetReq_0fe14795 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed|null $queryParameters Request query parameters
    */
    public ?DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementIntentUserStateItemRequestBuilderGetReq_0fe14795 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed {
        return new DeviceManagementIntentUserStateItemRequestBuilderGetQue_01d4b2ed($expand, $select);
    }

}
