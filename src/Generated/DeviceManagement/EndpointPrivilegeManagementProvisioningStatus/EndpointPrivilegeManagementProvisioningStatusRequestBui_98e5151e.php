<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EndpointPrivilegeManagementProvisioningStatus;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: endpointPrivilegeManagementProvisioningStatusRequestBuilderGetRequestConfiguration
*/
class EndpointPrivilegeManagementProvisioningStatusRequestBui_98e5151e extends BaseRequestConfiguration 
{
    /**
     * @var EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9|null $queryParameters Request query parameters
    */
    public ?EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9 $queryParameters = null;
    
    /**
     * Instantiates a new EndpointPrivilegeManagementProvisioningStatusRequestBui_98e5151e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9 {
        return new EndpointPrivilegeManagementProvisioningStatusRequestBui_4d5dbad9($expand, $select);
    }

}
