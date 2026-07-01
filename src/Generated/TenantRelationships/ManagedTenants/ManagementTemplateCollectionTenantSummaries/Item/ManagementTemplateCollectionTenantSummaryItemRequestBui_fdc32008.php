<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollectionTenantSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagementTemplateCollectionTenantSummaryItemRequestBuilderGetRequestConfiguration
*/
class ManagementTemplateCollectionTenantSummaryItemRequestBui_fdc32008 extends BaseRequestConfiguration 
{
    /**
     * @var ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220|null $queryParameters Request query parameters
    */
    public ?ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220 $queryParameters = null;
    
    /**
     * Instantiates a new ManagementTemplateCollectionTenantSummaryItemRequestBui_fdc32008 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220 {
        return new ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220($expand, $select);
    }

}
