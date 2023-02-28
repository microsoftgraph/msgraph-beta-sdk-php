<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\SymantecCodeSigningCertificate;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SymantecCodeSigningCertificateRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var SymantecCodeSigningCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SymantecCodeSigningCertificateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new symantecCodeSigningCertificateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SymantecCodeSigningCertificateRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SymantecCodeSigningCertificateRequestBuilderGetQueryParameters {
        return new SymantecCodeSigningCertificateRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new symantecCodeSigningCertificateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SymantecCodeSigningCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SymantecCodeSigningCertificateRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
