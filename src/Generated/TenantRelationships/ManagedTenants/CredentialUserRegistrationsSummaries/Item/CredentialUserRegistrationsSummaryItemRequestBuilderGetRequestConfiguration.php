<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CredentialUserRegistrationsSummaryItemRequestBuilderGetRequestConfiguration 
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
     * @var CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters {
        return new CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CredentialUserRegistrationsSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
