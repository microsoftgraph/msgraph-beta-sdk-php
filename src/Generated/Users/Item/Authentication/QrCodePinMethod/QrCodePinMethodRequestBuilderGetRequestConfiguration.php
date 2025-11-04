<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\Authentication\QrCodePinMethod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class QrCodePinMethodRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var QrCodePinMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?QrCodePinMethodRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new QrCodePinMethodRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param QrCodePinMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?QrCodePinMethodRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new QrCodePinMethodRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return QrCodePinMethodRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): QrCodePinMethodRequestBuilderGetQueryParameters {
        return new QrCodePinMethodRequestBuilderGetQueryParameters($expand, $select);
    }

}
