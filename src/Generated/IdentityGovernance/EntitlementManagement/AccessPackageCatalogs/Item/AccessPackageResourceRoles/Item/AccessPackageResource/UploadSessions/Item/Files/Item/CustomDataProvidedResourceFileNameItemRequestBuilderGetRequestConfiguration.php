<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageResourceRoles\Item\AccessPackageResource\UploadSessions\Item\Files\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomDataProvidedResourceFileNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomDataProvidedResourceFileNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters {
        return new CustomDataProvidedResourceFileNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
