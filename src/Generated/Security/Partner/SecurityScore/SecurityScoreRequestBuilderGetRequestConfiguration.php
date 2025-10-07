<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\Partner\SecurityScore;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SecurityScoreRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SecurityScoreRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SecurityScoreRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SecurityScoreRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SecurityScoreRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SecurityScoreRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SecurityScoreRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SecurityScoreRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SecurityScoreRequestBuilderGetQueryParameters {
        return new SecurityScoreRequestBuilderGetQueryParameters($expand, $select);
    }

}
