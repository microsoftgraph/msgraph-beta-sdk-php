<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Tls\ExternalCertificateAuthorityCertificates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ExternalCertificateAuthorityCertificateItemRequestBuilderGetRequestConfiguration
*/
class ExternalCertificateAuthorityCertificateItemRequestBuild_1b0cdde5 extends BaseRequestConfiguration 
{
    /**
     * @var ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17|null $queryParameters Request query parameters
    */
    public ?ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17 $queryParameters = null;
    
    /**
     * Instantiates a new ExternalCertificateAuthorityCertificateItemRequestBuild_1b0cdde5 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17 {
        return new ExternalCertificateAuthorityCertificateItemRequestBuild_fd955f17($expand, $select);
    }

}
