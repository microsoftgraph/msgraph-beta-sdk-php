<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserPasswordResetsAndChangesSummary\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserPasswordResetsAndChangesSummaryItemRequestBuilderGetRequestConfiguration
*/
class UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_86baa845 extends BaseRequestConfiguration 
{
    /**
     * @var UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa|null $queryParameters Request query parameters
    */
    public ?UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa $queryParameters = null;
    
    /**
     * Instantiates a new UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_86baa845 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa {
        return new UserPasswordResetsAndChangesSummaryItemRequestBuilderGe_a5e61ffa($expand, $select);
    }

}
