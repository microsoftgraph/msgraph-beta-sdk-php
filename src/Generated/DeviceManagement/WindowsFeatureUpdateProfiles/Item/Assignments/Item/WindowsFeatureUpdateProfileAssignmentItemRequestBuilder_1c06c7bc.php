<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsFeatureUpdateProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsFeatureUpdateProfileAssignmentItemRequestBuilderGetRequestConfiguration
*/
class WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_1c06c7bc extends BaseRequestConfiguration 
{
    /**
     * @var WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47|null $queryParameters Request query parameters
    */
    public ?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_1c06c7bc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47 {
        return new WindowsFeatureUpdateProfileAssignmentItemRequestBuilder_9d0e9c47($expand, $select);
    }

}
