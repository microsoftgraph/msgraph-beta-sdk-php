<?php

namespace Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDns\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PassiveDnsRecordItemRequestBuilderGetRequestConfiguration 
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
     * @var PassiveDnsRecordItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PassiveDnsRecordItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PassiveDnsRecordItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PassiveDnsRecordItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PassiveDnsRecordItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PassiveDnsRecordItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PassiveDnsRecordItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PassiveDnsRecordItemRequestBuilderGetQueryParameters {
        return new PassiveDnsRecordItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
