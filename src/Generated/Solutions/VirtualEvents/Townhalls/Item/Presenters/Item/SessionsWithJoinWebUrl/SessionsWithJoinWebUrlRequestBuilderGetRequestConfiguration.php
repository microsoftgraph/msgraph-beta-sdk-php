<?php

namespace Microsoft\\Graph\\Beta\\Generated\Solutions\VirtualEvents\Townhalls\Item\Presenters\Item\SessionsWithJoinWebUrl;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SessionsWithJoinWebUrlRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SessionsWithJoinWebUrlRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SessionsWithJoinWebUrlRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SessionsWithJoinWebUrlRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SessionsWithJoinWebUrlRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SessionsWithJoinWebUrlRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SessionsWithJoinWebUrlRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SessionsWithJoinWebUrlRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SessionsWithJoinWebUrlRequestBuilderGetQueryParameters {
        return new SessionsWithJoinWebUrlRequestBuilderGetQueryParameters($expand, $select);
    }

}
