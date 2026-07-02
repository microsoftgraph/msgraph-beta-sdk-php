<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\Traffic\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: NetworkAccessTrafficTransactionItemRequestBuilderGetRequestConfiguration
*/
class NetworkAccessTrafficTransactionItemRequestBuilderGetReq_6cad4687 extends BaseRequestConfiguration 
{
    /**
     * @var NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed|null $queryParameters Request query parameters
    */
    public ?NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed $queryParameters = null;
    
    /**
     * Instantiates a new NetworkAccessTrafficTransactionItemRequestBuilderGetReq_6cad4687 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed {
        return new NetworkAccessTrafficTransactionItemRequestBuilderGetQue_687c29ed($expand, $select);
    }

}
