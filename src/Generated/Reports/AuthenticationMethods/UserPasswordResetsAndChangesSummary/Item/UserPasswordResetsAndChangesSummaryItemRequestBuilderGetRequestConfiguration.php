<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\AuthenticationMethods\UserPasswordResetsAndChangesSummary\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserPasswordResetsAndChangesSummaryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserPasswordResetsAndChangesSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters {
        return new UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
