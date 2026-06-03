<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDevicesWithoutCloudIdentity\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_ef0dff32 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_ef0dff32 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592 {
        return new UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_cf7dd592($expand, $select);
    }

}
