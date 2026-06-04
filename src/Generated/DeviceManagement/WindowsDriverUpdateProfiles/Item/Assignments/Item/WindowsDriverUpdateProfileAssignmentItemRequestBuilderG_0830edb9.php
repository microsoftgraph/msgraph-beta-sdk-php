<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsDriverUpdateProfileAssignmentItemRequestBuilderGetRequestConfiguration
*/
class WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_0830edb9 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca|null $queryParameters Request query parameters
    */
    public ?WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca $queryParameters = null;
    
    /**
     * Instantiates a new WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_0830edb9 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca {
        return new WindowsDriverUpdateProfileAssignmentItemRequestBuilderG_9a8569ca($expand, $select);
    }

}
