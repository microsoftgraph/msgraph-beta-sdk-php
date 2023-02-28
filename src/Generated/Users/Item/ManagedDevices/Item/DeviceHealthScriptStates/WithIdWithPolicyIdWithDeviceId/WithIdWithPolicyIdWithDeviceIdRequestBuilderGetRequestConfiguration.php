<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\DeviceHealthScriptStates\WithIdWithPolicyIdWithDeviceId;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration 
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
     * @var WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters {
        return new WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
