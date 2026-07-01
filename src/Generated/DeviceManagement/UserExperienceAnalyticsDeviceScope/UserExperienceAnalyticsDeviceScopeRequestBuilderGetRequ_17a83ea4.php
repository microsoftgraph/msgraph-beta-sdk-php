<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScope;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsDeviceScopeRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceScopeRequestBuilderGetRequ_17a83ea4 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceScopeRequestBuilderGetRequ_17a83ea4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8 {
        return new UserExperienceAnalyticsDeviceScopeRequestBuilderGetQuer_ecc884b8($expand, $select);
    }

}
