<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageResources\Item\AccessPackageResourceScopes\Item\AccessPackageResource\UploadSessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CustomDataProvidedResourceUploadSessionItemRequestBuilderGetRequestConfiguration
*/
class CustomDataProvidedResourceUploadSessionItemRequestBuild_507ed692 extends BaseRequestConfiguration 
{
    /**
     * @var CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5|null $queryParameters Request query parameters
    */
    public ?CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5 $queryParameters = null;
    
    /**
     * Instantiates a new CustomDataProvidedResourceUploadSessionItemRequestBuild_507ed692 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5 {
        return new CustomDataProvidedResourceUploadSessionItemRequestBuild_20f34dd5($expand, $select);
    }

}
