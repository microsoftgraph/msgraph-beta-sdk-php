<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignmentPolicies\Item\CustomExtensionHandlers\Item\CustomExtension;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomExtensionRequestBuilderGetRequestConfiguration 
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
     * @var CustomExtensionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomExtensionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new customExtensionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomExtensionRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CustomExtensionRequestBuilderGetQueryParameters {
        return new CustomExtensionRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new customExtensionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomExtensionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomExtensionRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
