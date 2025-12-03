<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationGroupMappings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharePointGroupIdentityMappingItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SharePointGroupIdentityMappingItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters {
        return new SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
