<?php

namespace Microsoft\Graph\Beta\Generated\Reports\Sla\AzureADAuthentication;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AzureADAuthenticationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AzureADAuthenticationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AzureADAuthenticationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new azureADAuthenticationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AzureADAuthenticationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AzureADAuthenticationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new azureADAuthenticationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AzureADAuthenticationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AzureADAuthenticationRequestBuilderGetQueryParameters {
        return new AzureADAuthenticationRequestBuilderGetQueryParameters($expand, $select);
    }

}
