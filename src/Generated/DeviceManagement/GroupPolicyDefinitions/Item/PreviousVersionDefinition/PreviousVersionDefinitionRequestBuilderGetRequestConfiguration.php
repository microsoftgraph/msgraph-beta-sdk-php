<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\GroupPolicyDefinitions\Item\PreviousVersionDefinition;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PreviousVersionDefinitionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PreviousVersionDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PreviousVersionDefinitionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PreviousVersionDefinitionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PreviousVersionDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PreviousVersionDefinitionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PreviousVersionDefinitionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PreviousVersionDefinitionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PreviousVersionDefinitionRequestBuilderGetQueryParameters {
        return new PreviousVersionDefinitionRequestBuilderGetQueryParameters($expand, $select);
    }

}
