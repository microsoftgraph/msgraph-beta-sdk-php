<?php

namespace Microsoft\Graph\Beta\Generated\Domains\Item\SharedEmailDomainInvitations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharedEmailDomainInvitationItemRequestBuilderGetRequestConfiguration 
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
     * @var SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters {
        return new SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SharedEmailDomainInvitationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharedEmailDomainInvitationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
