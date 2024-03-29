<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmbeddedSIMActivationCodePoolItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters {
        return new EmbeddedSIMActivationCodePoolItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
