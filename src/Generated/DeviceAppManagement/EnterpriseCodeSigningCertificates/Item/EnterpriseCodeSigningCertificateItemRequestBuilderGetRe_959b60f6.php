<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\EnterpriseCodeSigningCertificates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EnterpriseCodeSigningCertificateItemRequestBuilderGetRequestConfiguration
*/
class EnterpriseCodeSigningCertificateItemRequestBuilderGetRe_959b60f6 extends BaseRequestConfiguration 
{
    /**
     * @var EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da|null $queryParameters Request query parameters
    */
    public ?EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da $queryParameters = null;
    
    /**
     * Instantiates a new EnterpriseCodeSigningCertificateItemRequestBuilderGetRe_959b60f6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da {
        return new EnterpriseCodeSigningCertificateItemRequestBuilderGetQu_84fc34da($expand, $select);
    }

}
