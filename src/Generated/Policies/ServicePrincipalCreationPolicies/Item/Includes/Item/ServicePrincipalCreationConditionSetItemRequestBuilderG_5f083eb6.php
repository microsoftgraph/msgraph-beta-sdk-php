<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Includes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ServicePrincipalCreationConditionSetItemRequestBuilderGetRequestConfiguration
*/
class ServicePrincipalCreationConditionSetItemRequestBuilderG_5f083eb6 extends BaseRequestConfiguration 
{
    /**
     * @var ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335 $queryParameters = null;
    
    /**
     * Instantiates a new ServicePrincipalCreationConditionSetItemRequestBuilderG_5f083eb6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335 {
        return new ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335($expand, $select);
    }

}
