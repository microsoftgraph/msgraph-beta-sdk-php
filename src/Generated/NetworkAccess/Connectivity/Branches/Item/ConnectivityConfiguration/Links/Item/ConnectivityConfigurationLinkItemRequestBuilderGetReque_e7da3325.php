<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Connectivity\Branches\Item\ConnectivityConfiguration\Links\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ConnectivityConfigurationLinkItemRequestBuilderGetRequestConfiguration
*/
class ConnectivityConfigurationLinkItemRequestBuilderGetReque_e7da3325 extends BaseRequestConfiguration 
{
    /**
     * @var ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7|null $queryParameters Request query parameters
    */
    public ?ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7 $queryParameters = null;
    
    /**
     * Instantiates a new ConnectivityConfigurationLinkItemRequestBuilderGetReque_e7da3325 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7 {
        return new ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7($expand, $select);
    }

}
