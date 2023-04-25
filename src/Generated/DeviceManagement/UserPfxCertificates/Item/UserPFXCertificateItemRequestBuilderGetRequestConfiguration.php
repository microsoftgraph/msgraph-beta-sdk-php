<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserPfxCertificates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserPFXCertificateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserPFXCertificateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserPFXCertificateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserPFXCertificateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserPFXCertificateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserPFXCertificateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserPFXCertificateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserPFXCertificateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserPFXCertificateItemRequestBuilderGetQueryParameters {
        return new UserPFXCertificateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
