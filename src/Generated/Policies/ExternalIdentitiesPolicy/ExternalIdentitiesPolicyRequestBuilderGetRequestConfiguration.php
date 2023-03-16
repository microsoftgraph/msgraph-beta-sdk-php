<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ExternalIdentitiesPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalIdentitiesPolicyRequestBuilderGetRequestConfiguration 
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
     * @var ExternalIdentitiesPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalIdentitiesPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new externalIdentitiesPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalIdentitiesPolicyRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ExternalIdentitiesPolicyRequestBuilderGetQueryParameters {
        return new ExternalIdentitiesPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new externalIdentitiesPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalIdentitiesPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalIdentitiesPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
