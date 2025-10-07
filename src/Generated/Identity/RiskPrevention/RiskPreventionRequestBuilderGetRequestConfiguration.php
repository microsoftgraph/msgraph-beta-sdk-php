<?php

namespace Microsoft\\Graph\\Beta\\Generated\Identity\RiskPrevention;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskPreventionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RiskPreventionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskPreventionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RiskPreventionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RiskPreventionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RiskPreventionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RiskPreventionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RiskPreventionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RiskPreventionRequestBuilderGetQueryParameters {
        return new RiskPreventionRequestBuilderGetQueryParameters($expand, $select);
    }

}
