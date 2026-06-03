<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthorityLeafCertificate\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CloudCertificationAuthorityLeafCertificateItemRequestBuilderGetRequestConfiguration
*/
class CloudCertificationAuthorityLeafCertificateItemRequestBu_57bd12c6 extends BaseRequestConfiguration 
{
    /**
     * @var CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1|null $queryParameters Request query parameters
    */
    public ?CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1 $queryParameters = null;
    
    /**
     * Instantiates a new CloudCertificationAuthorityLeafCertificateItemRequestBu_57bd12c6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1 {
        return new CloudCertificationAuthorityLeafCertificateItemRequestBu_12dd3ba1($expand, $select);
    }

}
