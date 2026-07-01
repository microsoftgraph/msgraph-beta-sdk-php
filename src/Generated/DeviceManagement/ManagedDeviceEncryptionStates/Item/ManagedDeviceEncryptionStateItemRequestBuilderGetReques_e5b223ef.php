<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceEncryptionStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceEncryptionStateItemRequestBuilderGetRequestConfiguration
*/
class ManagedDeviceEncryptionStateItemRequestBuilderGetReques_e5b223ef extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceEncryptionStateItemRequestBuilderGetReques_e5b223ef and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters {
        return new ManagedDeviceEncryptionStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
