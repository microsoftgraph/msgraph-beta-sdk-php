<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAppConfigurationSchemas\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration 
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
     * @var AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters {
        return new AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
