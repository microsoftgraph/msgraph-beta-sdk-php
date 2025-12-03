<?php

namespace Microsoft\Graph\Beta\Generated\AgentRegistry\AgentInstances\Item\AgentCardManifest;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgentCardManifestRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgentCardManifestRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgentCardManifestRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgentCardManifestRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgentCardManifestRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgentCardManifestRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgentCardManifestRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AgentCardManifestRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AgentCardManifestRequestBuilderGetQueryParameters {
        return new AgentCardManifestRequestBuilderGetQueryParameters($expand, $select);
    }

}
