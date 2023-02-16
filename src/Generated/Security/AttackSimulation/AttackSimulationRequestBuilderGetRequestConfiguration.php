<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttackSimulationRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AttackSimulationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttackSimulationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new attackSimulationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AttackSimulationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AttackSimulationRequestBuilderGetQueryParameters {
        return new AttackSimulationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new attackSimulationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AttackSimulationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttackSimulationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
