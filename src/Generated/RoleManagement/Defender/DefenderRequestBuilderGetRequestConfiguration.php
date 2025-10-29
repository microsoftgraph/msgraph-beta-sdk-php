<?php

namespace Microsoft\\Graph\\Beta\\Generated\RoleManagement\Defender;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefenderRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefenderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefenderRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefenderRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefenderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefenderRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefenderRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefenderRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefenderRequestBuilderGetQueryParameters {
        return new DefenderRequestBuilderGetQueryParameters($expand, $select);
    }

}
