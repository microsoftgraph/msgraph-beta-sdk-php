<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\ConfigurationManagement\ConfigurationApplications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConfigurationApplicationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConfigurationApplicationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConfigurationApplicationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConfigurationApplicationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConfigurationApplicationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConfigurationApplicationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConfigurationApplicationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConfigurationApplicationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConfigurationApplicationItemRequestBuilderGetQueryParameters {
        return new ConfigurationApplicationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
