<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedAllDeviceCertificateStateItemRequestBuilderGetRequestConfiguration
*/
class ManagedAllDeviceCertificateStateItemRequestBuilderGetRe_7e53f87f extends BaseRequestConfiguration 
{
    /**
     * @var ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38|null $queryParameters Request query parameters
    */
    public ?ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedAllDeviceCertificateStateItemRequestBuilderGetRe_7e53f87f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38 {
        return new ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38($expand, $select);
    }

}
