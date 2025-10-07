<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\ThreatSubmission\EmailThreats\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmailThreatSubmissionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmailThreatSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmailThreatSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmailThreatSubmissionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmailThreatSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmailThreatSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmailThreatSubmissionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmailThreatSubmissionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmailThreatSubmissionItemRequestBuilderGetQueryParameters {
        return new EmailThreatSubmissionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
