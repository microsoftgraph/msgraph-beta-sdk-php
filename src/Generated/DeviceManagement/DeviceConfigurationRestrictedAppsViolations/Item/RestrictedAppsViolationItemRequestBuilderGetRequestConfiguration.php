<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationRestrictedAppsViolations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RestrictedAppsViolationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RestrictedAppsViolationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RestrictedAppsViolationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RestrictedAppsViolationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RestrictedAppsViolationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RestrictedAppsViolationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RestrictedAppsViolationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RestrictedAppsViolationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RestrictedAppsViolationItemRequestBuilderGetQueryParameters {
        return new RestrictedAppsViolationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
