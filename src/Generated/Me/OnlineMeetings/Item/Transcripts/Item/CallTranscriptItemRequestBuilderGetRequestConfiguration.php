<?php

namespace Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\Transcripts\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CallTranscriptItemRequestBuilderGetRequestConfiguration 
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
     * @var CallTranscriptItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CallTranscriptItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CallTranscriptItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CallTranscriptItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CallTranscriptItemRequestBuilderGetQueryParameters {
        return new CallTranscriptItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CallTranscriptItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CallTranscriptItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CallTranscriptItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
