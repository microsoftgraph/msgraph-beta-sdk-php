<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\ApplicableContent\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ApplicableContentCatalogEntryItemRequestBuilderGetRequestConfiguration
*/
class ApplicableContentCatalogEntryItemRequestBuilderGetReque_060c92af extends BaseRequestConfiguration 
{
    /**
     * @var ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4|null $queryParameters Request query parameters
    */
    public ?ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4 $queryParameters = null;
    
    /**
     * Instantiates a new ApplicableContentCatalogEntryItemRequestBuilderGetReque_060c92af and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4 {
        return new ApplicableContentCatalogEntryItemRequestBuilderGetQuery_229886b4($expand, $select);
    }

}
