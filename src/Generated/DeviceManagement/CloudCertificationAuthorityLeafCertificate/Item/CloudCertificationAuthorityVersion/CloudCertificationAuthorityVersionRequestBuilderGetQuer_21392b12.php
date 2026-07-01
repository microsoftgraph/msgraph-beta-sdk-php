<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthorityLeafCertificate\Item\CloudCertificationAuthorityVersion;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The certification authority version that issued this leaf certificate. Read-only. Original name: cloudCertificationAuthorityVersionRequestBuilderGetQueryParameters
*/
class CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12 
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
     * Instantiates a new CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
