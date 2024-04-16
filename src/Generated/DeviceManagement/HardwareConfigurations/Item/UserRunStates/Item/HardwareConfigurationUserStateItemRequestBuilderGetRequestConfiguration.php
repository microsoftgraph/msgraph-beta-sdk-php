<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\UserRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HardwareConfigurationUserStateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HardwareConfigurationUserStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters {
        return new HardwareConfigurationUserStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
