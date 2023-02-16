<?php

namespace Microsoft\Graph\Beta\Generated\ThreatSubmission;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatSubmissionRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ThreatSubmissionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatSubmissionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new threatSubmissionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ThreatSubmissionRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ThreatSubmissionRequestBuilderGetQueryParameters {
        return new ThreatSubmissionRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new threatSubmissionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ThreatSubmissionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThreatSubmissionRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
