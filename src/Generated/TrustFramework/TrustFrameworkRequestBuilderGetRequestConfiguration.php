<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TrustFrameworkRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TrustFrameworkRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TrustFrameworkRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TrustFrameworkRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TrustFrameworkRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TrustFrameworkRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TrustFrameworkRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TrustFrameworkRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TrustFrameworkRequestBuilderGetQueryParameters {
        return new TrustFrameworkRequestBuilderGetQueryParameters($expand, $select);
    }

}
