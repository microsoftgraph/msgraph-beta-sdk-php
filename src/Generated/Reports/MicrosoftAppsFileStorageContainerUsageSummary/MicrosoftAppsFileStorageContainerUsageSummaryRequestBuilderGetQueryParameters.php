<?php

namespace Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get storage usage data for SharePoint Embedded file storage containers in a tenant. The response follows a hierarchical structure: Tenant > Geo > App. Use $expand to include nested levels. This method is available in the global service only.
*/
class MicrosoftAppsFileStorageContainerUsageSummaryRequestBuilderGetQueryParameters 
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
     * Instantiates a new MicrosoftAppsFileStorageContainerUsageSummaryRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
