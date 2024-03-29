<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\ReferenceDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReferenceDefinitionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReferenceDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReferenceDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReferenceDefinitionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReferenceDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReferenceDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReferenceDefinitionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReferenceDefinitionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReferenceDefinitionItemRequestBuilderGetQueryParameters {
        return new ReferenceDefinitionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
