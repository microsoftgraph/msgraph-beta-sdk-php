<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\RemoteActionAudits\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RemoteActionAuditItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RemoteActionAuditItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RemoteActionAuditItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RemoteActionAuditItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RemoteActionAuditItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RemoteActionAuditItemRequestBuilderGetQueryParameters {
        return new RemoteActionAuditItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new RemoteActionAuditItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RemoteActionAuditItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteActionAuditItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
