<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\GroupPolicyDefinitions\Item\NextVersionDefinition\PreviousVersionDefinition\Category;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CategoryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CategoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CategoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CategoryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CategoryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CategoryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CategoryRequestBuilderGetQueryParameters {
        return new CategoryRequestBuilderGetQueryParameters($expand, $select);
    }

}
