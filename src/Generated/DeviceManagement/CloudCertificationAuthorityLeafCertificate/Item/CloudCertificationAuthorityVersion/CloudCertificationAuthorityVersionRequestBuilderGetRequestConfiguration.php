<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthorityLeafCertificate\Item\CloudCertificationAuthorityVersion;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudCertificationAuthorityVersionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CloudCertificationAuthorityVersionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters {
        return new CloudCertificationAuthorityVersionRequestBuilderGetQueryParameters($expand, $select);
    }

}
