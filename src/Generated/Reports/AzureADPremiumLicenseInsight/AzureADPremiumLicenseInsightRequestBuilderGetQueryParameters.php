<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AzureADPremiumLicenseInsight;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the premium license utilization insight for the tenant. This API returns data about how many premium licenses are entitled and how the associated P1 and P2 features are being used. The calling tenant must have at least one Microsoft Entra ID P1 or P2 license. Tenants without a premium license receive a 403 Forbidden response with the missingLicense error code.
*/
class AzureADPremiumLicenseInsightRequestBuilderGetQueryParameters 
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
     * Instantiates a new AzureADPremiumLicenseInsightRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
