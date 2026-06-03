<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCustomAttributeShellScripts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceCustomAttributeShellScriptItemRequestBuilderGetRequestConfiguration
*/
class DeviceCustomAttributeShellScriptItemRequestBuilderGetRe_76f1b003 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de|null $queryParameters Request query parameters
    */
    public ?DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de $queryParameters = null;
    
    /**
     * Instantiates a new DeviceCustomAttributeShellScriptItemRequestBuilderGetRe_76f1b003 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de {
        return new DeviceCustomAttributeShellScriptItemRequestBuilderGetQu_dfd524de($expand, $select);
    }

}
