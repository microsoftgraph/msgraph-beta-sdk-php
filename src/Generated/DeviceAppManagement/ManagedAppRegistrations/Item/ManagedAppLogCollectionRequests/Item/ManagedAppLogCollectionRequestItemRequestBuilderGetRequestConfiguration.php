<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppRegistrations\Item\ManagedAppLogCollectionRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagedAppLogCollectionRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ManagedAppLogCollectionRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters {
        return new ManagedAppLogCollectionRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
