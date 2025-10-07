<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRules\Item\RuleDefinition;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RuleDefinitionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RuleDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RuleDefinitionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RuleDefinitionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RuleDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RuleDefinitionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RuleDefinitionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RuleDefinitionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RuleDefinitionRequestBuilderGetQueryParameters {
        return new RuleDefinitionRequestBuilderGetQueryParameters($expand, $select);
    }

}
