<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepTenantSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagementTemplateStepTenantSummaryItemRequestBuilderGetRequestConfiguration
*/
class ManagementTemplateStepTenantSummaryItemRequestBuilderGe_8e741bdb extends BaseRequestConfiguration 
{
    /**
     * @var ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d|null $queryParameters Request query parameters
    */
    public ?ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d $queryParameters = null;
    
    /**
     * Instantiates a new ManagementTemplateStepTenantSummaryItemRequestBuilderGe_8e741bdb and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d {
        return new ManagementTemplateStepTenantSummaryItemRequestBuilderGe_9b34c79d($expand, $select);
    }

}
