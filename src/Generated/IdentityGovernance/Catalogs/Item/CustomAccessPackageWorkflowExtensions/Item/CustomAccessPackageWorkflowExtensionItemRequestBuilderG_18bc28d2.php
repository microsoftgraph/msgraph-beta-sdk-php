<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\Catalogs\Item\CustomAccessPackageWorkflowExtensions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CustomAccessPackageWorkflowExtensionItemRequestBuilderGetRequestConfiguration
*/
class CustomAccessPackageWorkflowExtensionItemRequestBuilderG_18bc28d2 extends BaseRequestConfiguration 
{
    /**
     * @var CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd|null $queryParameters Request query parameters
    */
    public ?CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd $queryParameters = null;
    
    /**
     * Instantiates a new CustomAccessPackageWorkflowExtensionItemRequestBuilderG_18bc28d2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd {
        return new CustomAccessPackageWorkflowExtensionItemRequestBuilderG_57d2f0bd($expand, $select);
    }

}
