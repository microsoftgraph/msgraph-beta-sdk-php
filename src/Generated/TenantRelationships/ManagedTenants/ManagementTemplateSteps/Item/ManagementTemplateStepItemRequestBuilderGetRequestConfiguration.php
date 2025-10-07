<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagementTemplateStepItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ManagementTemplateStepItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagementTemplateStepItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagementTemplateStepItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagementTemplateStepItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagementTemplateStepItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagementTemplateStepItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagementTemplateStepItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagementTemplateStepItemRequestBuilderGetQueryParameters {
        return new ManagementTemplateStepItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
