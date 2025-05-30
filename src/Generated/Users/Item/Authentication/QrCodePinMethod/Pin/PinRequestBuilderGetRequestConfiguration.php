<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\QrCodePinMethod\Pin;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PinRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PinRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PinRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PinRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PinRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PinRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PinRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PinRequestBuilderGetQueryParameters {
        return new PinRequestBuilderGetQueryParameters($expand, $select);
    }

}
