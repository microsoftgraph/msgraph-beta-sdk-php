<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchDataStores\Item\Sessions\Item\UploadAgent;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UploadAgentRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var UploadAgentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UploadAgentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new uploadAgentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UploadAgentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UploadAgentRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new uploadAgentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UploadAgentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UploadAgentRequestBuilderGetQueryParameters {
        return new UploadAgentRequestBuilderGetQueryParameters($expand, $select);
    }

}
