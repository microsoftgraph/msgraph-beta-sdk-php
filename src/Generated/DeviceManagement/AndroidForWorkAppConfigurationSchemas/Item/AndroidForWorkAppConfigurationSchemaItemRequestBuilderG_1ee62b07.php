<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkAppConfigurationSchemas\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration
*/
class AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_1ee62b07 extends BaseRequestConfiguration 
{
    /**
     * @var AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd|null $queryParameters Request query parameters
    */
    public ?AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd $queryParameters = null;
    
    /**
     * Instantiates a new AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_1ee62b07 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd {
        return new AndroidForWorkAppConfigurationSchemaItemRequestBuilderG_28ed99dd($expand, $select);
    }

}
