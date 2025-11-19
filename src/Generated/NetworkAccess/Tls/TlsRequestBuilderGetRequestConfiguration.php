<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Tls;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TlsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TlsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TlsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TlsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TlsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TlsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TlsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TlsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TlsRequestBuilderGetQueryParameters {
        return new TlsRequestBuilderGetQueryParameters($expand, $select);
    }

}
