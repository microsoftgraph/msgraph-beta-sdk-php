<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CrossCloudGovernmentOrganizationMapping;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: crossCloudGovernmentOrganizationMappingRequestBuilderGetRequestConfiguration
*/
class CrossCloudGovernmentOrganizationMappingRequestBuilderGe_cf000413 extends BaseRequestConfiguration 
{
    /**
     * @var CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f|null $queryParameters Request query parameters
    */
    public ?CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f $queryParameters = null;
    
    /**
     * Instantiates a new CrossCloudGovernmentOrganizationMappingRequestBuilderGe_cf000413 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f {
        return new CrossCloudGovernmentOrganizationMappingRequestBuilderGe_5275a66f($expand, $select);
    }

}
