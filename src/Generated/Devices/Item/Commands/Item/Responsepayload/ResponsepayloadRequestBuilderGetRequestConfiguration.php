<?php

namespace Microsoft\Graph\Beta\Generated\Devices\Item\Commands\Item\Responsepayload;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResponsepayloadRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ResponsepayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResponsepayloadRequestBuilderGetQueryParameters $queryParameters = null;
    
}
