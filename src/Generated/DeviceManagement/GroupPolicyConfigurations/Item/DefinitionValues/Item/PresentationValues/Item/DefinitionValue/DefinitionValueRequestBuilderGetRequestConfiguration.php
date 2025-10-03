<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\GroupPolicyConfigurations\Item\DefinitionValues\Item\PresentationValues\Item\DefinitionValue;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefinitionValueRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefinitionValueRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefinitionValueRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefinitionValueRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefinitionValueRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefinitionValueRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefinitionValueRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefinitionValueRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefinitionValueRequestBuilderGetQueryParameters {
        return new DefinitionValueRequestBuilderGetQueryParameters($expand, $select);
    }

}
