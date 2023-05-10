<?php

namespace Microsoft\Graph\Beta\Generated\Policies\MobileDeviceManagementPolicies\Item\IncludedGroups\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Delete a group from the list of groups included in a mobile app management policy.
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
