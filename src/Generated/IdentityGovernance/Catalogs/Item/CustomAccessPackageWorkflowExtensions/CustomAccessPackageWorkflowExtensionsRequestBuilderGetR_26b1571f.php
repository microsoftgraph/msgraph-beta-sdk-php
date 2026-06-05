<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\Catalogs\Item\CustomAccessPackageWorkflowExtensions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: customAccessPackageWorkflowExtensionsRequestBuilderGetRequestConfiguration
*/
class CustomAccessPackageWorkflowExtensionsRequestBuilderGetR_26b1571f extends BaseRequestConfiguration 
{
    /**
     * @var CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b|null $queryParameters Request query parameters
    */
    public ?CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b $queryParameters = null;
    
    /**
     * Instantiates a new CustomAccessPackageWorkflowExtensionsRequestBuilderGetR_26b1571f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b {
        return new CustomAccessPackageWorkflowExtensionsRequestBuilderGetQ_b137ac0b($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
