<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CredentialUserRegistrationsSummaryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CredentialUserRegistrationsSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters {
        return new CredentialUserRegistrationsSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
