<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\UserRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: HardwareConfigurationUserStateItemRequestBuilderGetRequestConfiguration
*/
class HardwareConfigurationUserStateItemRequestBuilderGetRequ_63fc036c extends BaseRequestConfiguration 
{
    /**
     * @var HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815|null $queryParameters Request query parameters
    */
    public ?HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815 $queryParameters = null;
    
    /**
     * Instantiates a new HardwareConfigurationUserStateItemRequestBuilderGetRequ_63fc036c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815 {
        return new HardwareConfigurationUserStateItemRequestBuilderGetQuer_7f556815($expand, $select);
    }

}
