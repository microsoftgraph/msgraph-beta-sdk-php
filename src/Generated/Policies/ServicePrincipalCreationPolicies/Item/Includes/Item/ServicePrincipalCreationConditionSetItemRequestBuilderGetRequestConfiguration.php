<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Includes\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServicePrincipalCreationConditionSetItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters {
        return new ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ServicePrincipalCreationConditionSetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
