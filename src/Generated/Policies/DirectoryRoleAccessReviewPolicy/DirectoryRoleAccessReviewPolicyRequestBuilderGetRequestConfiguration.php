<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DirectoryRoleAccessReviewPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryRoleAccessReviewPolicyRequestBuilderGetRequestConfiguration 
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
     * @var DirectoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new directoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DirectoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DirectoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters {
        return new DirectoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new directoryRoleAccessReviewPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DirectoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DirectoryRoleAccessReviewPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
