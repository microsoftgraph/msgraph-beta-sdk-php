<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedApproval\Item\Request;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RequestRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RequestRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RequestRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RequestRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RequestRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RequestRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RequestRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RequestRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RequestRequestBuilderGetQueryParameters {
        return new RequestRequestBuilderGetQueryParameters($expand, $select);
    }

}
