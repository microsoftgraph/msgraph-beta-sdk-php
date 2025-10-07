<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\CertificateAuthorities\CertificateBasedApplicationConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CertificateBasedApplicationConfigurationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CertificateBasedApplicationConfigurationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters {
        return new CertificateBasedApplicationConfigurationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
