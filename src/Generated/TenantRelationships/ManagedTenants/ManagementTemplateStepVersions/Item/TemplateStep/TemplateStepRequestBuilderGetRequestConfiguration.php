<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\TemplateStep;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TemplateStepRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TemplateStepRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TemplateStepRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TemplateStepRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TemplateStepRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TemplateStepRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TemplateStepRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TemplateStepRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TemplateStepRequestBuilderGetQueryParameters {
        return new TemplateStepRequestBuilderGetQueryParameters($expand, $select);
    }

}
