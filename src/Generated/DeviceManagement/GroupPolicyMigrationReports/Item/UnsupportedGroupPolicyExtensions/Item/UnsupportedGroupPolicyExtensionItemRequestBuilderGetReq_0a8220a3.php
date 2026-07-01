<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\UnsupportedGroupPolicyExtensions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnsupportedGroupPolicyExtensionItemRequestBuilderGetRequestConfiguration
*/
class UnsupportedGroupPolicyExtensionItemRequestBuilderGetReq_0a8220a3 extends BaseRequestConfiguration 
{
    /**
     * @var UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d|null $queryParameters Request query parameters
    */
    public ?UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d $queryParameters = null;
    
    /**
     * Instantiates a new UnsupportedGroupPolicyExtensionItemRequestBuilderGetReq_0a8220a3 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d {
        return new UnsupportedGroupPolicyExtensionItemRequestBuilderGetQue_9f98787d($expand, $select);
    }

}
