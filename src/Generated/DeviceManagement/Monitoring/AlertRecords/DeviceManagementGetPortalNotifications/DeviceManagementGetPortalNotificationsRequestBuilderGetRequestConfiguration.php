<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\AlertRecords\DeviceManagementGetPortalNotifications;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceManagementGetPortalNotificationsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var DeviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return DeviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): DeviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters {
        return new DeviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

    /**
     * Instantiates a new deviceManagementGetPortalNotificationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DeviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementGetPortalNotificationsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
