<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Lifecycle\EffectiveGoverningPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EffectiveGoverningPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EffectiveGoverningPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EffectiveGoverningPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EffectiveGoverningPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EffectiveGoverningPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EffectiveGoverningPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EffectiveGoverningPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EffectiveGoverningPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EffectiveGoverningPolicyRequestBuilderGetQueryParameters {
        return new EffectiveGoverningPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
