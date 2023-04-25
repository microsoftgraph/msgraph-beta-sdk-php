<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkAppConfigurationSchemas\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters {
        return new AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
