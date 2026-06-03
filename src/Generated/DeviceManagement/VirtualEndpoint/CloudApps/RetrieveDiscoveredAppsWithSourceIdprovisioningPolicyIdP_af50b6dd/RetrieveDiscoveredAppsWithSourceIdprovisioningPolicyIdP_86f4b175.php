<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudApps\RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_af50b6dd;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a list of cloudPcDiscoveredApp objects whose appdetails can be used to map to a cloudPcCloudApp object. Original name: retrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdProvisioningPolicyIdRequestBuilderGetQueryParameters
*/
class RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @var string|null $provisioningPolicyId Usage: provisioningPolicyId='@provisioningPolicyId'
    */
    public ?string $provisioningPolicyId = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * Instantiates a new RetrieveDiscoveredAppsWithSourceIdprovisioningPolicyIdP_86f4b175 and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $provisioningPolicyId Usage: provisioningPolicyId='@provisioningPolicyId'
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?bool $count = null, ?string $filter = null, ?string $provisioningPolicyId = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->count = $count;
        $this->filter = $filter;
        $this->provisioningPolicyId = $provisioningPolicyId;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
