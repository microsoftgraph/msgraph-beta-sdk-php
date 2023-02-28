<?php

namespace Microsoft\Graph\Beta\Generated\Reports\CredentialUserRegistrationDetails\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CredentialUserRegistrationDetailsItemRequestBuilderGetRequestConfiguration 
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
     * @var CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters {
        return new CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CredentialUserRegistrationDetailsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
