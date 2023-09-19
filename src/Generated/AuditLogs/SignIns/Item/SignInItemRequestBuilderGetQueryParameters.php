<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\SignIns\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a signIn object that contains a specific user sign-in event for your tenant that includes sign-ins where a user is asked to enter a username or password, and session tokens.
*/
class SignInItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new SignInItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
