<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ElevationRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PrivilegeManagementElevationRequestItemRequestBuilderGetRequestConfiguration
*/
class PrivilegeManagementElevationRequestItemRequestBuilderGe_8c87e3a8 extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c|null $queryParameters Request query parameters
    */
    public ?PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegeManagementElevationRequestItemRequestBuilderGe_8c87e3a8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c {
        return new PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c($expand, $select);
    }

}
