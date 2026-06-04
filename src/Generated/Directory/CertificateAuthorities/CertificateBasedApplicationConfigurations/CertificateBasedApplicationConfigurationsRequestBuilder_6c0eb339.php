<?php

namespace Microsoft\Graph\Beta\Generated\Directory\CertificateAuthorities\CertificateBasedApplicationConfigurations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: certificateBasedApplicationConfigurationsRequestBuilderGetRequestConfiguration
*/
class CertificateBasedApplicationConfigurationsRequestBuilder_6c0eb339 extends BaseRequestConfiguration 
{
    /**
     * @var CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1|null $queryParameters Request query parameters
    */
    public ?CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1 $queryParameters = null;
    
    /**
     * Instantiates a new CertificateBasedApplicationConfigurationsRequestBuilder_6c0eb339 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1 {
        return new CertificateBasedApplicationConfigurationsRequestBuilder_d48576d1($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
