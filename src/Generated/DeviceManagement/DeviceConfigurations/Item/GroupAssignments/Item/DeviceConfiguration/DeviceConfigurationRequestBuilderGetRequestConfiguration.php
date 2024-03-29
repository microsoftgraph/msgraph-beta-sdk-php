<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\GroupAssignments\Item\DeviceConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceConfigurationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationRequestBuilderGetQueryParameters {
        return new DeviceConfigurationRequestBuilderGetQueryParameters($expand, $select);
    }

}
