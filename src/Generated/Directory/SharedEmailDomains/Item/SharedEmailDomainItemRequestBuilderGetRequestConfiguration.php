<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\SharedEmailDomains\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharedEmailDomainItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SharedEmailDomainItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharedEmailDomainItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SharedEmailDomainItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharedEmailDomainItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharedEmailDomainItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SharedEmailDomainItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharedEmailDomainItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharedEmailDomainItemRequestBuilderGetQueryParameters {
        return new SharedEmailDomainItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
