<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserPasswordResetsAndChangesSummary\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the summary of password resets and changes for a specific day. This includes the number of password resets that were self-service and those triggered by an administrator.
*/
class UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new UserPasswordResetsAndChangesSummaryItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
