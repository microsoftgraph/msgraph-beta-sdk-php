<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogsWithUniqueName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: accessPackageCatalogsWithUniqueNameRequestBuilderGetRequestConfiguration
*/
class AccessPackageCatalogsWithUniqueNameRequestBuilderGetReq_4e1d6d1e extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748|null $queryParameters Request query parameters
    */
    public ?AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748 $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageCatalogsWithUniqueNameRequestBuilderGetReq_4e1d6d1e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748 {
        return new AccessPackageCatalogsWithUniqueNameRequestBuilderGetQue_5dc81748($expand, $select);
    }

}
