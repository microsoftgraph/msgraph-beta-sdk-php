<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration\PreTokenIssuance;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PreTokenIssuanceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PreTokenIssuanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PreTokenIssuanceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PreTokenIssuanceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PreTokenIssuanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PreTokenIssuanceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PreTokenIssuanceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PreTokenIssuanceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PreTokenIssuanceRequestBuilderGetQueryParameters {
        return new PreTokenIssuanceRequestBuilderGetQueryParameters($expand, $select);
    }

}
