<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsRemoteConnectionItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsRemoteConnectionItemRequestBuild_27deb260 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsRemoteConnectionItemRequestBuild_27deb260 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c {
        return new UserExperienceAnalyticsRemoteConnectionItemRequestBuild_849b242c($expand, $select);
    }

}
