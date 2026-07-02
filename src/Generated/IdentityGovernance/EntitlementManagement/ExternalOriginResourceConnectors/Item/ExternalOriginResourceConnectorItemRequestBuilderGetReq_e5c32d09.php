<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ExternalOriginResourceConnectorItemRequestBuilderGetRequestConfiguration
*/
class ExternalOriginResourceConnectorItemRequestBuilderGetReq_e5c32d09 extends BaseRequestConfiguration 
{
    /**
     * @var ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87|null $queryParameters Request query parameters
    */
    public ?ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87 $queryParameters = null;
    
    /**
     * Instantiates a new ExternalOriginResourceConnectorItemRequestBuilderGetReq_e5c32d09 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87 {
        return new ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87($expand, $select);
    }

}
