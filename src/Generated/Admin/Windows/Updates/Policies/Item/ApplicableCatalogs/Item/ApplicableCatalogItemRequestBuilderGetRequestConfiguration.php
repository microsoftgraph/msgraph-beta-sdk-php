<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Policies\Item\ApplicableCatalogs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplicableCatalogItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApplicableCatalogItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplicableCatalogItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApplicableCatalogItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplicableCatalogItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicableCatalogItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplicableCatalogItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicableCatalogItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplicableCatalogItemRequestBuilderGetQueryParameters {
        return new ApplicableCatalogItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
