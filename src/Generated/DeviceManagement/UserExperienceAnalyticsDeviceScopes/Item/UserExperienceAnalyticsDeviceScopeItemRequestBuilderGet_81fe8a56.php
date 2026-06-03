<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScopes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDeviceScopeItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_81fe8a56 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_81fe8a56 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5 {
        return new UserExperienceAnalyticsDeviceScopeItemRequestBuilderGet_86ec80b5($expand, $select);
    }

}
