<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Settings\RegionalAndLanguageSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RegionalAndLanguageSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RegionalAndLanguageSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RegionalAndLanguageSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new regionalAndLanguageSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RegionalAndLanguageSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RegionalAndLanguageSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new regionalAndLanguageSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RegionalAndLanguageSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RegionalAndLanguageSettingsRequestBuilderGetQueryParameters {
        return new RegionalAndLanguageSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
