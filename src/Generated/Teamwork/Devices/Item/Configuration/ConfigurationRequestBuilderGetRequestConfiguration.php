<?php

namespace Microsoft\\Graph\\Beta\\Generated\Teamwork\Devices\Item\Configuration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConfigurationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConfigurationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConfigurationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConfigurationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConfigurationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConfigurationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConfigurationRequestBuilderGetQueryParameters {
        return new ConfigurationRequestBuilderGetQueryParameters($expand, $select);
    }

}
