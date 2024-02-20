<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\GetManagedDevicesWithFailedOrPendingApps;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters {
        return new GetManagedDevicesWithFailedOrPendingAppsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
