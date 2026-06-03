<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsImpactingProcess\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsImpactingProcessItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsImpactingProcessItemRequestBuild_9391776f extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsImpactingProcessItemRequestBuild_9391776f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab {
        return new UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab($expand, $select);
    }

}
