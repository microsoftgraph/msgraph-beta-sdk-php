<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetRequestConfiguration
*/
class MicrosoftTunnelServerLogCollectionResponseItemRequestBu_2b5cb34c extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a|null $queryParameters Request query parameters
    */
    public ?MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponseItemRequestBu_2b5cb34c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a {
        return new MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a($expand, $select);
    }

}
