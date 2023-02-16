<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\UserCredentialUsageDetails\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserCredentialUsageDetailsItemRequestBuilderGetRequestConfiguration 
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
     * @var UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters {
        return new UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new UserCredentialUsageDetailsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserCredentialUsageDetailsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
