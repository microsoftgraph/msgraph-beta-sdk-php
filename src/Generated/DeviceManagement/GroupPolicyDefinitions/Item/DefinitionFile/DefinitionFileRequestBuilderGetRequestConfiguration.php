<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\DefinitionFile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefinitionFileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefinitionFileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefinitionFileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new definitionFileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefinitionFileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefinitionFileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new definitionFileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefinitionFileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefinitionFileRequestBuilderGetQueryParameters {
        return new DefinitionFileRequestBuilderGetQueryParameters($expand, $select);
    }

}
