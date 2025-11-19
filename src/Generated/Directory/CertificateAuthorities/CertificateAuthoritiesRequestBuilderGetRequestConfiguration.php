<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\CertificateAuthorities;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CertificateAuthoritiesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CertificateAuthoritiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CertificateAuthoritiesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CertificateAuthoritiesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateAuthoritiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateAuthoritiesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateAuthoritiesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CertificateAuthoritiesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CertificateAuthoritiesRequestBuilderGetQueryParameters {
        return new CertificateAuthoritiesRequestBuilderGetQueryParameters($expand, $select);
    }

}
