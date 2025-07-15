<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Tls\ExternalCertificateAuthorityCertificates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalCertificateAuthorityCertificateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalCertificateAuthorityCertificateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters {
        return new ExternalCertificateAuthorityCertificateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
