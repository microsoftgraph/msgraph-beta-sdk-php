<?php

namespace Microsoft\Graph\Beta\Generated\Me\Settings\RegionalAndLanguageSettings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RegionalAndLanguageSettingsRequestBuilderGetRequestConfiguration 
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
     * @var RegionalAndLanguageSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RegionalAndLanguageSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new regionalAndLanguageSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RegionalAndLanguageSettingsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RegionalAndLanguageSettingsRequestBuilderGetQueryParameters {
        return new RegionalAndLanguageSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new regionalAndLanguageSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RegionalAndLanguageSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RegionalAndLanguageSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
