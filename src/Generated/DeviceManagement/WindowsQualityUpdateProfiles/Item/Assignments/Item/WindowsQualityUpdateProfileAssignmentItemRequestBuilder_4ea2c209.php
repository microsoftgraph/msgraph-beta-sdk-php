<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdateProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsQualityUpdateProfileAssignmentItemRequestBuilderGetRequestConfiguration
*/
class WindowsQualityUpdateProfileAssignmentItemRequestBuilder_4ea2c209 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99|null $queryParameters Request query parameters
    */
    public ?WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsQualityUpdateProfileAssignmentItemRequestBuilder_4ea2c209 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99 {
        return new WindowsQualityUpdateProfileAssignmentItemRequestBuilder_518c8d99($expand, $select);
    }

}
