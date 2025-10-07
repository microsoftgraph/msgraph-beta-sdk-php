<?php

namespace Microsoft\\Graph\\Beta\\Generated\ApprovalWorkflowProviders\Item\PolicyTemplates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GovernancePolicyTemplateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GovernancePolicyTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GovernancePolicyTemplateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GovernancePolicyTemplateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GovernancePolicyTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GovernancePolicyTemplateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GovernancePolicyTemplateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GovernancePolicyTemplateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GovernancePolicyTemplateItemRequestBuilderGetQueryParameters {
        return new GovernancePolicyTemplateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
