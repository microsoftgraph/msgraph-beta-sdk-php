<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_af50b6dd;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilderGetRequestConfiguration
*/
class RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_faceaedf extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175|null $queryParameters Request query parameters
    */
    public ?RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175 $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_faceaedf and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $provisioningPolicyId Usage: provisioningPolicyId='@provisioningPolicyId'
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $provisioningPolicyId = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175 {
        return new RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175($count, $filter, $provisioningPolicyId, $search, $skip, $top);
    }

}
