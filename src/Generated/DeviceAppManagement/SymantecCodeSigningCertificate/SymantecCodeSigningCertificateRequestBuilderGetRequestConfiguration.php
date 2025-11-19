<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\SymantecCodeSigningCertificate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SymantecCodeSigningCertificateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SymantecCodeSigningCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SymantecCodeSigningCertificateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SymantecCodeSigningCertificateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SymantecCodeSigningCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SymantecCodeSigningCertificateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SymantecCodeSigningCertificateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SymantecCodeSigningCertificateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SymantecCodeSigningCertificateRequestBuilderGetQueryParameters {
        return new SymantecCodeSigningCertificateRequestBuilderGetQueryParameters($expand, $select);
    }

}
