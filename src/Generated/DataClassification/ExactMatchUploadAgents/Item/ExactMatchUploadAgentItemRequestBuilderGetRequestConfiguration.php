<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchUploadAgents\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExactMatchUploadAgentItemRequestBuilderGetRequestConfiguration 
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
     * @var ExactMatchUploadAgentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExactMatchUploadAgentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExactMatchUploadAgentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExactMatchUploadAgentItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ExactMatchUploadAgentItemRequestBuilderGetQueryParameters {
        return new ExactMatchUploadAgentItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ExactMatchUploadAgentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExactMatchUploadAgentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExactMatchUploadAgentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
