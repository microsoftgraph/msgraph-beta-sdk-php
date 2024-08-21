<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Entra;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EntraRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EntraRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EntraRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EntraRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EntraRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EntraRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EntraRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EntraRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EntraRequestBuilderGetQueryParameters {
        return new EntraRequestBuilderGetQueryParameters($expand, $select);
    }

}
