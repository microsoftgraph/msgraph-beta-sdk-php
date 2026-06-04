<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagementTemplateStepVersionItemRequestBuilderGetRequestConfiguration
*/
class ManagementTemplateStepVersionItemRequestBuilderGetReque_f1c5a1bc extends BaseRequestConfiguration 
{
    /**
     * @var ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb|null $queryParameters Request query parameters
    */
    public ?ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb $queryParameters = null;
    
    /**
     * Instantiates a new ManagementTemplateStepVersionItemRequestBuilderGetReque_f1c5a1bc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb {
        return new ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb($expand, $select);
    }

}
