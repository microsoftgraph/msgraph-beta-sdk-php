<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\Devices\Item\Commands\Item\Responsepayload;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResponsepayloadRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResponsepayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResponsepayloadRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResponsepayloadRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResponsepayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResponsepayloadRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResponsepayloadRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResponsepayloadRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResponsepayloadRequestBuilderGetQueryParameters {
        return new ResponsepayloadRequestBuilderGetQueryParameters($expand, $select);
    }

}
