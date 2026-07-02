<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackageAssignmentResourceRoles\Item\AccessPackageResourceRole\AccessPackageResource\AccessPackageResourceScopes\Item\AccessPackageResource\UploadSessions\Item\Files\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CustomDataProvidedResourceFileItemRequestBuilderGetRequestConfiguration
*/
class CustomDataProvidedResourceFileItemRequestBuilderGetRequ_bee4c2a9 extends BaseRequestConfiguration 
{
    /**
     * @var CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e|null $queryParameters Request query parameters
    */
    public ?CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e $queryParameters = null;
    
    /**
     * Instantiates a new CustomDataProvidedResourceFileItemRequestBuilderGetRequ_bee4c2a9 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e {
        return new CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e($expand, $select);
    }

}
