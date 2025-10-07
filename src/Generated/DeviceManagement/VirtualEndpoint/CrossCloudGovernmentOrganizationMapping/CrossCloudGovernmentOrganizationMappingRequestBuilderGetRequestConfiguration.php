<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\CrossCloudGovernmentOrganizationMapping;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CrossCloudGovernmentOrganizationMappingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CrossCloudGovernmentOrganizationMappingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters {
        return new CrossCloudGovernmentOrganizationMappingRequestBuilderGetQueryParameters($expand, $select);
    }

}
