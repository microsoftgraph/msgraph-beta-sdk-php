<?php

namespace Microsoft\\Graph\\Beta\\Generated\ThreatSubmission\UrlThreats\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UrlThreatSubmissionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UrlThreatSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UrlThreatSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UrlThreatSubmissionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UrlThreatSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UrlThreatSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UrlThreatSubmissionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UrlThreatSubmissionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UrlThreatSubmissionItemRequestBuilderGetQueryParameters {
        return new UrlThreatSubmissionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
