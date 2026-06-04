<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CredentialUserRegistrationsSummaryItemRequestBuilderGetRequestConfiguration
*/
class CredentialUserRegistrationsSummaryItemRequestBuilderGet_b7b1e9ff extends BaseRequestConfiguration 
{
    /**
     * @var CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff|null $queryParameters Request query parameters
    */
    public ?CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff $queryParameters = null;
    
    /**
     * Instantiates a new CredentialUserRegistrationsSummaryItemRequestBuilderGet_b7b1e9ff and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff {
        return new CredentialUserRegistrationsSummaryItemRequestBuilderGet_2620d5ff($expand, $select);
    }

}
