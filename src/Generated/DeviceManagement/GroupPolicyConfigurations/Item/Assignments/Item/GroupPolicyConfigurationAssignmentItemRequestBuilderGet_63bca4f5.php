<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: GroupPolicyConfigurationAssignmentItemRequestBuilderGetRequestConfiguration
*/
class GroupPolicyConfigurationAssignmentItemRequestBuilderGet_63bca4f5 extends BaseRequestConfiguration 
{
    /**
     * @var GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49|null $queryParameters Request query parameters
    */
    public ?GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49 $queryParameters = null;
    
    /**
     * Instantiates a new GroupPolicyConfigurationAssignmentItemRequestBuilderGet_63bca4f5 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49 {
        return new GroupPolicyConfigurationAssignmentItemRequestBuilderGet_03284a49($expand, $select);
    }

}
