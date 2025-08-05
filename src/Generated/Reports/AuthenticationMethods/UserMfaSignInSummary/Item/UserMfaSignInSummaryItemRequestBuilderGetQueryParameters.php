<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserMfaSignInSummary\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the total count of MFA vs non-MFA sign-in counts for a specified period.
*/
class UserMfaSignInSummaryItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new UserMfaSignInSummaryItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
