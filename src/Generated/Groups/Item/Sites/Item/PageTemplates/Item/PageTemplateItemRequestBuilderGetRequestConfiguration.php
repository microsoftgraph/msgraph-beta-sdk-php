<?php

namespace Microsoft\\Graph\\Beta\\Generated\Groups\Item\Sites\Item\PageTemplates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PageTemplateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PageTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PageTemplateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PageTemplateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PageTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PageTemplateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PageTemplateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PageTemplateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PageTemplateItemRequestBuilderGetQueryParameters {
        return new PageTemplateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
