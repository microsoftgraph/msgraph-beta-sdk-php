<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Devices\Item\RegisteredOwners\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a user as a registered owner of the device. This API is available in the following national cloud deployments.
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
