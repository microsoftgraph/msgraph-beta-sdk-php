<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRuleDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedTenantAlertRuleDefinitionItemRequestBuilderGetRequestConfiguration
*/
class ManagedTenantAlertRuleDefinitionItemRequestBuilderGetRe_5e10abe6 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e|null $queryParameters Request query parameters
    */
    public ?ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e $queryParameters = null;
    
    /**
     * Instantiates a new ManagedTenantAlertRuleDefinitionItemRequestBuilderGetRe_5e10abe6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e {
        return new ManagedTenantAlertRuleDefinitionItemRequestBuilderGetQu_b4dd900e($expand, $select);
    }

}
