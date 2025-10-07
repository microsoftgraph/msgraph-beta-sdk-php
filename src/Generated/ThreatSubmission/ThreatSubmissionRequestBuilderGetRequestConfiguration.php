<?php

namespace Microsoft\\Graph\\Beta\\Generated\ThreatSubmission;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatSubmissionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ThreatSubmissionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatSubmissionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ThreatSubmissionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ThreatSubmissionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThreatSubmissionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ThreatSubmissionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ThreatSubmissionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ThreatSubmissionRequestBuilderGetQueryParameters {
        return new ThreatSubmissionRequestBuilderGetQueryParameters($expand, $select);
    }

}
