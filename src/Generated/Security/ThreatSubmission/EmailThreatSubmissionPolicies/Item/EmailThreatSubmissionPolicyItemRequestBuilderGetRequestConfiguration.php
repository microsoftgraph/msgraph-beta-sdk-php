<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\ThreatSubmission\EmailThreatSubmissionPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmailThreatSubmissionPolicyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmailThreatSubmissionPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters {
        return new EmailThreatSubmissionPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
