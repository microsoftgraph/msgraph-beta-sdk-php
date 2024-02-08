<?php

namespace Microsoft\Graph\Beta\Generated\App;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppRequestBuilderGetQueryParameters {
        return new AppRequestBuilderGetQueryParameters($expand, $select);
    }

}
