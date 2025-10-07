<?php

namespace Microsoft\\Graph\\Beta\\Generated\Policies\AccessReviewPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessReviewPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AccessReviewPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessReviewPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccessReviewPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessReviewPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessReviewPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessReviewPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessReviewPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessReviewPolicyRequestBuilderGetQueryParameters {
        return new AccessReviewPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
