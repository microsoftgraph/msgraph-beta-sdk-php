<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsNotAutopilotReadyDevice\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsNotAutopilotReadyDeviceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_27af0e84 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_27af0e84 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916 {
        return new UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916($expand, $select);
    }

}
