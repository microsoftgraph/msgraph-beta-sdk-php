<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\UserSettingsPersistenceDetail\RetrieveUserSettingsPersistenceProfilesWithConfigurationId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrieveUserSettingsPersistenceProfilesWithConfigurationIdRequestBuilderGetRequestConfiguration
*/
class RetrieveUserSettingsPersistenceProfilesWithConfiguratio_7ee049cc extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72|null $queryParameters Request query parameters
    */
    public ?RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72 $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveUserSettingsPersistenceProfilesWithConfiguratio_7ee049cc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72 {
        return new RetrieveUserSettingsPersistenceProfilesWithConfiguratio_d6c4ca72($count, $filter, $search, $skip, $top);
    }

}
