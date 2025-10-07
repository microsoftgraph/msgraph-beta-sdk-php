<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\InformationProtection\SensitivityPolicySettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SensitivityPolicySettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SensitivityPolicySettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SensitivityPolicySettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SensitivityPolicySettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SensitivityPolicySettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SensitivityPolicySettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SensitivityPolicySettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SensitivityPolicySettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SensitivityPolicySettingsRequestBuilderGetQueryParameters {
        return new SensitivityPolicySettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
