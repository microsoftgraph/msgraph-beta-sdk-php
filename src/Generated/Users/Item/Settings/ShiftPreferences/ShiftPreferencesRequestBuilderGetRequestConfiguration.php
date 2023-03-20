<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Settings\ShiftPreferences;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ShiftPreferencesRequestBuilderGetRequestConfiguration 
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
     * @var ShiftPreferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ShiftPreferencesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new shiftPreferencesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ShiftPreferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ShiftPreferencesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new shiftPreferencesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ShiftPreferencesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ShiftPreferencesRequestBuilderGetQueryParameters {
        return new ShiftPreferencesRequestBuilderGetQueryParameters($expand, $select);
    }

}
