<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\PrivilegeManagementElevations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegeManagementElevationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegeManagementElevationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegeManagementElevationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegeManagementElevationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegeManagementElevationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegeManagementElevationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegeManagementElevationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegeManagementElevationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegeManagementElevationItemRequestBuilderGetQueryParameters {
        return new PrivilegeManagementElevationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
