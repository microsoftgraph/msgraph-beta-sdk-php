<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthorityLeafCertificate\Item\CloudCertificationAuthorityVersion;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: cloudCertificationAuthorityVersionRequestBuilderGetRequestConfiguration
*/
class CloudCertificationAuthorityVersionRequestBuilderGetRequ_48104304 extends BaseRequestConfiguration 
{
    /**
     * @var CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12|null $queryParameters Request query parameters
    */
    public ?CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12 $queryParameters = null;
    
    /**
     * Instantiates a new CloudCertificationAuthorityVersionRequestBuilderGetRequ_48104304 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12 {
        return new CloudCertificationAuthorityVersionRequestBuilderGetQuer_21392b12($expand, $select);
    }

}
