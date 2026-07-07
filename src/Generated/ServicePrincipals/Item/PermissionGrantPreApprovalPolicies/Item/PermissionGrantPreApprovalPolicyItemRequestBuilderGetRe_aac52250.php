<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\PermissionGrantPreApprovalPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PermissionGrantPreApprovalPolicyItemRequestBuilderGetRequestConfiguration
*/
class PermissionGrantPreApprovalPolicyItemRequestBuilderGetRe_aac52250 extends BaseRequestConfiguration 
{
    /**
     * @var PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46|null $queryParameters Request query parameters
    */
    public ?PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46 $queryParameters = null;
    
    /**
     * Instantiates a new PermissionGrantPreApprovalPolicyItemRequestBuilderGetRe_aac52250 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46 {
        return new PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46($expand, $select);
    }

}
