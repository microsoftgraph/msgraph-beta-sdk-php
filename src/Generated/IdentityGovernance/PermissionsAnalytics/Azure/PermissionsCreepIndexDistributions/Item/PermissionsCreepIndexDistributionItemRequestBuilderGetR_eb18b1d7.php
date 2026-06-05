<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsAnalytics\Azure\PermissionsCreepIndexDistributions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PermissionsCreepIndexDistributionItemRequestBuilderGetRequestConfiguration
*/
class PermissionsCreepIndexDistributionItemRequestBuilderGetR_eb18b1d7 extends BaseRequestConfiguration 
{
    /**
     * @var PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a|null $queryParameters Request query parameters
    */
    public ?PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a $queryParameters = null;
    
    /**
     * Instantiates a new PermissionsCreepIndexDistributionItemRequestBuilderGetR_eb18b1d7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a {
        return new PermissionsCreepIndexDistributionItemRequestBuilderGetQ_90ee927a($expand, $select);
    }

}
