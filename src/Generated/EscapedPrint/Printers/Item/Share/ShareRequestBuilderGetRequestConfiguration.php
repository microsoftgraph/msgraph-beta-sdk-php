<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Printers\Item\Share;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ShareRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ShareRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ShareRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ShareRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ShareRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ShareRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ShareRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ShareRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ShareRequestBuilderGetQueryParameters {
        return new ShareRequestBuilderGetQueryParameters($expand, $select);
    }

}
