<?php

namespace Microsoft\Graph\Beta\Generated\Reports\Security\GetAttackSimulationSimulationUserCoverage;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetAttackSimulationSimulationUserCoverageRequestBuilderGetRequestConfiguration 
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
     * @var GetAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters {
        return new GetAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

    /**
     * Instantiates a new getAttackSimulationSimulationUserCoverageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param GetAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAttackSimulationSimulationUserCoverageRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
