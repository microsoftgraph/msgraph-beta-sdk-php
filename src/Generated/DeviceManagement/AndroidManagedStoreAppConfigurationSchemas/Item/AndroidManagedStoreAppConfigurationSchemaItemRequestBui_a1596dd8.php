<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAppConfigurationSchemas\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration
*/
class AndroidManagedStoreAppConfigurationSchemaItemRequestBui_a1596dd8 extends BaseRequestConfiguration 
{
    /**
     * @var AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc|null $queryParameters Request query parameters
    */
    public ?AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc $queryParameters = null;
    
    /**
     * Instantiates a new AndroidManagedStoreAppConfigurationSchemaItemRequestBui_a1596dd8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc {
        return new AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc($expand, $select);
    }

}
