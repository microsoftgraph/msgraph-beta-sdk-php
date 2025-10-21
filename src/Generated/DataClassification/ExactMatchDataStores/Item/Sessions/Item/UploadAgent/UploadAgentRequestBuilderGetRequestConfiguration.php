<?php

namespace Microsoft\\Graph\\Beta\\Generated\DataClassification\ExactMatchDataStores\Item\Sessions\Item\UploadAgent;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UploadAgentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UploadAgentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UploadAgentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UploadAgentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UploadAgentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UploadAgentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UploadAgentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UploadAgentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UploadAgentRequestBuilderGetQueryParameters {
        return new UploadAgentRequestBuilderGetQueryParameters($expand, $select);
    }

}
