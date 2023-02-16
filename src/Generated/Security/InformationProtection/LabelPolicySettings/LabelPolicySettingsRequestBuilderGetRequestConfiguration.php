<?php

namespace Microsoft\Graph\Beta\Generated\Security\InformationProtection\LabelPolicySettings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LabelPolicySettingsRequestBuilderGetRequestConfiguration 
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
     * @var LabelPolicySettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LabelPolicySettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new labelPolicySettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LabelPolicySettingsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): LabelPolicySettingsRequestBuilderGetQueryParameters {
        return new LabelPolicySettingsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new labelPolicySettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param LabelPolicySettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LabelPolicySettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
