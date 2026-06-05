<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\Versions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CloudCertificationAuthorityVersionItemRequestBuilderGetRequestConfiguration
*/
class CloudCertificationAuthorityVersionItemRequestBuilderGet_de4827c7 extends BaseRequestConfiguration 
{
    /**
     * @var CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67|null $queryParameters Request query parameters
    */
    public ?CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67 $queryParameters = null;
    
    /**
     * Instantiates a new CloudCertificationAuthorityVersionItemRequestBuilderGet_de4827c7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67 {
        return new CloudCertificationAuthorityVersionItemRequestBuilderGet_cf16bd67($expand, $select);
    }

}
