<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\Versions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of all certification authority versions, including active, staged, retired, and expired versions. This navigation property provides access to the full version history of the certification authority. Use $expand=versions to include this collection in the response. Read-only. Original name: CloudCertificationAuthorityVersionItemRequestBuilderGetQueryParameters
*/
class CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
