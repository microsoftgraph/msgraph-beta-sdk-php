<?php

namespace Microsoft\\Graph\\Beta\\Generated\Groups\Item\AcceptedSenders\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a user or group from the accepted-senders list of the specified group.
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id The delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id The delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
