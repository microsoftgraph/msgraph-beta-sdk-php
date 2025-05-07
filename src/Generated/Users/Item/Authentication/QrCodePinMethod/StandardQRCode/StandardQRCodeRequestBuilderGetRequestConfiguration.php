<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\QrCodePinMethod\StandardQRCode;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StandardQRCodeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StandardQRCodeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StandardQRCodeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StandardQRCodeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StandardQRCodeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StandardQRCodeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StandardQRCodeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return StandardQRCodeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): StandardQRCodeRequestBuilderGetQueryParameters {
        return new StandardQRCodeRequestBuilderGetQueryParameters($expand, $select);
    }

}
