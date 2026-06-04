<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsInformationProtectionWipeActionItemRequestBuilderGetRequestConfiguration
*/
class WindowsInformationProtectionWipeActionItemRequestBuilde_91b95c05 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsInformationProtectionWipeActionItemRequestBuilde_03518337|null $queryParameters Request query parameters
    */
    public ?WindowsInformationProtectionWipeActionItemRequestBuilde_03518337 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsInformationProtectionWipeActionItemRequestBuilde_91b95c05 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsInformationProtectionWipeActionItemRequestBuilde_03518337|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionWipeActionItemRequestBuilde_03518337 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsInformationProtectionWipeActionItemRequestBuilde_03518337.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionWipeActionItemRequestBuilde_03518337
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionWipeActionItemRequestBuilde_03518337 {
        return new WindowsInformationProtectionWipeActionItemRequestBuilde_03518337($expand, $select);
    }

}
