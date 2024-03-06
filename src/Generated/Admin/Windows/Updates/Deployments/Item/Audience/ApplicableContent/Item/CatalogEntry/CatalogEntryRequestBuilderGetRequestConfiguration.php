<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\ApplicableContent\Item\CatalogEntry;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CatalogEntryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CatalogEntryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CatalogEntryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CatalogEntryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CatalogEntryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CatalogEntryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CatalogEntryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CatalogEntryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CatalogEntryRequestBuilderGetQueryParameters {
        return new CatalogEntryRequestBuilderGetQueryParameters($expand, $select);
    }

}
