<?php

namespace Microsoft\\Graph\\Beta\\Generated\EmployeeExperience\Goals;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GoalsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GoalsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GoalsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GoalsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GoalsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GoalsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GoalsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GoalsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GoalsRequestBuilderGetQueryParameters {
        return new GoalsRequestBuilderGetQueryParameters($expand, $select);
    }

}
