<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\GetManagedDevicesWithFailedOrPendingApps;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getManagedDevicesWithFailedOrPendingAppsRequestBuilderGetRequestConfiguration
*/
class GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_48b554e7 extends BaseRequestConfiguration 
{
    /**
     * @var GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f|null $queryParameters Request query parameters
    */
    public ?GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f $queryParameters = null;
    
    /**
     * Instantiates a new GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_48b554e7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f {
        return new GetManagedDevicesWithFailedOrPendingAppsRequestBuilderG_28fccb3f($count, $filter, $search, $skip, $top);
    }

}
