<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceHealthScriptStates\WithIdWithPolicyIdWithDeviceId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters {
        return new WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
