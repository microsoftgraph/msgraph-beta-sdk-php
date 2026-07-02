<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EmbeddedSIMActivationCodePoolItemRequestBuilderGetRequestConfiguration
*/
class EmbeddedSIMActivationCodePoolItemRequestBuilderGetReque_4c47648e extends BaseRequestConfiguration 
{
    /**
     * @var EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121|null $queryParameters Request query parameters
    */
    public ?EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121 $queryParameters = null;
    
    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolItemRequestBuilderGetReque_4c47648e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121 {
        return new EmbeddedSIMActivationCodePoolItemRequestBuilderGetQuery_077e0121($expand, $select);
    }

}
