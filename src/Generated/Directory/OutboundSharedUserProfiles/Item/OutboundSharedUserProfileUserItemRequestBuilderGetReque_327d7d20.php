<?php

namespace Microsoft\Graph\Beta\Generated\Directory\OutboundSharedUserProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OutboundSharedUserProfileUserItemRequestBuilderGetRequestConfiguration
*/
class OutboundSharedUserProfileUserItemRequestBuilderGetReque_327d7d20 extends BaseRequestConfiguration 
{
    /**
     * @var OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886|null $queryParameters Request query parameters
    */
    public ?OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886 $queryParameters = null;
    
    /**
     * Instantiates a new OutboundSharedUserProfileUserItemRequestBuilderGetReque_327d7d20 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886 {
        return new OutboundSharedUserProfileUserItemRequestBuilderGetQuery_74230886($expand, $select);
    }

}
