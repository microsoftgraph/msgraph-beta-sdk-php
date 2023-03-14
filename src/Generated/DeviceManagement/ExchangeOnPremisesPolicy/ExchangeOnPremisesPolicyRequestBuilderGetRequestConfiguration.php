<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExchangeOnPremisesPolicyRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ExchangeOnPremisesPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExchangeOnPremisesPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new exchangeOnPremisesPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExchangeOnPremisesPolicyRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ExchangeOnPremisesPolicyRequestBuilderGetQueryParameters {
        return new ExchangeOnPremisesPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new exchangeOnPremisesPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExchangeOnPremisesPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExchangeOnPremisesPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
