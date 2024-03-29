<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\ResourceConnections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceConnectionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResourceConnectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceConnectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResourceConnectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResourceConnectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourceConnectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResourceConnectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourceConnectionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResourceConnectionItemRequestBuilderGetQueryParameters {
        return new ResourceConnectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
