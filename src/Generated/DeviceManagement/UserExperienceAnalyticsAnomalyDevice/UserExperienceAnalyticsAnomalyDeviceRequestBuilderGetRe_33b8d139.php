<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyDevice;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsAnomalyDeviceRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetRe_33b8d139 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetRe_33b8d139 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d {
        return new UserExperienceAnalyticsAnomalyDeviceRequestBuilderGetQu_0a41a98d($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
