<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicies\Item\ConditionalAccessSettings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConditionalAccessSettingsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ConditionalAccessSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConditionalAccessSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new conditionalAccessSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConditionalAccessSettingsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ConditionalAccessSettingsRequestBuilderGetQueryParameters {
        return new ConditionalAccessSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new conditionalAccessSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ConditionalAccessSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConditionalAccessSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
