<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignUps\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SelfServiceSignUpItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SelfServiceSignUpItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SelfServiceSignUpItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SelfServiceSignUpItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SelfServiceSignUpItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SelfServiceSignUpItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SelfServiceSignUpItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SelfServiceSignUpItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SelfServiceSignUpItemRequestBuilderGetQueryParameters {
        return new SelfServiceSignUpItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
