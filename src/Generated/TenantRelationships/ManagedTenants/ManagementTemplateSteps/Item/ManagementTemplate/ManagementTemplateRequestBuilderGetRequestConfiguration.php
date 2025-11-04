<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\Item\ManagementTemplate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagementTemplateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ManagementTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagementTemplateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagementTemplateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagementTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagementTemplateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagementTemplateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagementTemplateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagementTemplateRequestBuilderGetQueryParameters {
        return new ManagementTemplateRequestBuilderGetQueryParameters($expand, $select);
    }

}
