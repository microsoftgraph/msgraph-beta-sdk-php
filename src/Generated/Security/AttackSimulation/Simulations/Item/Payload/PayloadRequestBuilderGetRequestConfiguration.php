<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation\Simulations\Item\Payload;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PayloadRequestBuilderGetRequestConfiguration 
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
     * @var PayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PayloadRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new payloadRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PayloadRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PayloadRequestBuilderGetQueryParameters {
        return new PayloadRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new payloadRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PayloadRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
