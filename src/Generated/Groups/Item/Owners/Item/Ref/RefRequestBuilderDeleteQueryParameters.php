<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Owners\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Use this API to remove an owner from a Microsoft 365 group or a security group through the owners navigation property. When owners are assigned to a group, the last owner (a user object) of the group cannot be removed. This API is available in the following national cloud deployments.
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id Delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id Delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
