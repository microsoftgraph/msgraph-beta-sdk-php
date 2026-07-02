<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthorityLeafCertificate\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of CloudCertificationAuthorityLeafCertificate records associated with account. Original name: CloudCertificationAuthorityLeafCertificateItemRequestBuilderGetQueryParameters
*/
class CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1 
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
     * Instantiates a new CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
