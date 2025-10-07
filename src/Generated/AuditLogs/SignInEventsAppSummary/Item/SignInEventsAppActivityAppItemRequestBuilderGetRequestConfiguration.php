<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsAppSummary\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SignInEventsAppActivityAppItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SignInEventsAppActivityAppItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters {
        return new SignInEventsAppActivityAppItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
