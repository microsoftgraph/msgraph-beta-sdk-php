<?php

namespace Microsoft\Graph\Beta\Generated\ThreatSubmission\FileThreats\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FileThreatSubmissionItemRequestBuilderGetRequestConfiguration 
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
     * @var FileThreatSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileThreatSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FileThreatSubmissionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FileThreatSubmissionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): FileThreatSubmissionItemRequestBuilderGetQueryParameters {
        return new FileThreatSubmissionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new FileThreatSubmissionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FileThreatSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FileThreatSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
