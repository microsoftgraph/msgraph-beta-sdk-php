<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsSummary\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SignInEventsActivityItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SignInEventsActivityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SignInEventsActivityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SignInEventsActivityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SignInEventsActivityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SignInEventsActivityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SignInEventsActivityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SignInEventsActivityItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SignInEventsActivityItemRequestBuilderGetQueryParameters {
        return new SignInEventsActivityItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
