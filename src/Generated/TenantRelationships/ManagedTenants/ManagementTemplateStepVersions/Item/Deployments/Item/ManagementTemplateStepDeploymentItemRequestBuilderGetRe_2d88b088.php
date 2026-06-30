<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\Deployments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagementTemplateStepDeploymentItemRequestBuilderGetRequestConfiguration
*/
class ManagementTemplateStepDeploymentItemRequestBuilderGetRe_2d88b088 extends BaseRequestConfiguration 
{
    /**
     * @var ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5|null $queryParameters Request query parameters
    */
    public ?ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5 $queryParameters = null;
    
    /**
     * Instantiates a new ManagementTemplateStepDeploymentItemRequestBuilderGetRe_2d88b088 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5 {
        return new ManagementTemplateStepDeploymentItemRequestBuilderGetQu_885942f5($expand, $select);
    }

}
