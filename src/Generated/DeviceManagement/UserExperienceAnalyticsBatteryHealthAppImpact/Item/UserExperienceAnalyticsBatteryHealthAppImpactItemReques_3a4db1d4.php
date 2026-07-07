<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthAppImpact\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsBatteryHealthAppImpactItemReques_3a4db1d4 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthAppImpactItemReques_3a4db1d4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06 {
        return new UserExperienceAnalyticsBatteryHealthAppImpactItemReques_70232c06($expand, $select);
    }

}
