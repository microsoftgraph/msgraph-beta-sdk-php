<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedAppLogCollectionRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedAppLogCollectionRequestItemRequestBuilderGetRequestConfiguration
*/
class ManagedAppLogCollectionRequestItemRequestBuilderGetRequ_fb344b89 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80|null $queryParameters Request query parameters
    */
    public ?ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedAppLogCollectionRequestItemRequestBuilderGetRequ_fb344b89 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80 {
        return new ManagedAppLogCollectionRequestItemRequestBuilderGetQuer_04c27b80($expand, $select);
    }

}
