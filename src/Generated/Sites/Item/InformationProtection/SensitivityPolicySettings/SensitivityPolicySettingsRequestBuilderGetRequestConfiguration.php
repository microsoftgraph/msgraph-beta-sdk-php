<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\InformationProtection\SensitivityPolicySettings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SensitivityPolicySettingsRequestBuilderGetRequestConfiguration 
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
     * @var SensitivityPolicySettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SensitivityPolicySettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new sensitivityPolicySettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SensitivityPolicySettingsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SensitivityPolicySettingsRequestBuilderGetQueryParameters {
        return new SensitivityPolicySettingsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new sensitivityPolicySettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SensitivityPolicySettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SensitivityPolicySettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
