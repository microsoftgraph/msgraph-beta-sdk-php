<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\OrganizationSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrganizationSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrganizationSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrganizationSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrganizationSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrganizationSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrganizationSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrganizationSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OrganizationSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OrganizationSettingsRequestBuilderGetQueryParameters {
        return new OrganizationSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
