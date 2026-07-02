<?php

namespace Microsoft\Graph\Beta\Generated\CertificateAuthorities\CertificateBasedApplicationConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CertificateBasedApplicationConfigurationItemRequestBuilderGetRequestConfiguration
*/
class CertificateBasedApplicationConfigurationItemRequestBuil_32526299 extends BaseRequestConfiguration 
{
    /**
     * @var CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7|null $queryParameters Request query parameters
    */
    public ?CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7 $queryParameters = null;
    
    /**
     * Instantiates a new CertificateBasedApplicationConfigurationItemRequestBuil_32526299 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7 {
        return new CertificateBasedApplicationConfigurationItemRequestBuil_29a5c1a7($expand, $select);
    }

}
