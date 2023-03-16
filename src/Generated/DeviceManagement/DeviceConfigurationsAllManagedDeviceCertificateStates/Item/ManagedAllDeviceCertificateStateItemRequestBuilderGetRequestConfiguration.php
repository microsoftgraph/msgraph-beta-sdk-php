<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagedAllDeviceCertificateStateItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagedAllDeviceCertificateStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters {
        return new ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
