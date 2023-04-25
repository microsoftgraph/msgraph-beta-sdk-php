<?php

namespace Microsoft\Graph\Beta\Generated\Me\Profile\WebAccounts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WebAccountItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WebAccountItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WebAccountItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WebAccountItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebAccountItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebAccountItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebAccountItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WebAccountItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WebAccountItemRequestBuilderGetQueryParameters {
        return new WebAccountItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
