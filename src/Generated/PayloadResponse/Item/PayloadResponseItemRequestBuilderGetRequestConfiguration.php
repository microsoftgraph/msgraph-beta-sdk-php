<?php

namespace Microsoft\\Graph\\Beta\\Generated\PayloadResponse\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PayloadResponseItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PayloadResponseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PayloadResponseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PayloadResponseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PayloadResponseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PayloadResponseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PayloadResponseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PayloadResponseItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PayloadResponseItemRequestBuilderGetQueryParameters {
        return new PayloadResponseItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
