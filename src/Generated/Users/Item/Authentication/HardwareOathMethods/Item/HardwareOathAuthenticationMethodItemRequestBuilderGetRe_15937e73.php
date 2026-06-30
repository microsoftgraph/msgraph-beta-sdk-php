<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\HardwareOathMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: HardwareOathAuthenticationMethodItemRequestBuilderGetRequestConfiguration
*/
class HardwareOathAuthenticationMethodItemRequestBuilderGetRe_15937e73 extends BaseRequestConfiguration 
{
    /**
     * @var HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c|null $queryParameters Request query parameters
    */
    public ?HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c $queryParameters = null;
    
    /**
     * Instantiates a new HardwareOathAuthenticationMethodItemRequestBuilderGetRe_15937e73 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c {
        return new HardwareOathAuthenticationMethodItemRequestBuilderGetQu_35acfd0c($expand, $select);
    }

}
