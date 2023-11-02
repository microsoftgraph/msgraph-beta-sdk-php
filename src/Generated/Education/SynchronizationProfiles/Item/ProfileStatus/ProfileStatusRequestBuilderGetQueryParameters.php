<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\ProfileStatus;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the status of a specific school data synchronization profile in the tenant. The response will indicate the status of the sync. This API is available in the following national cloud deployments.
*/
class ProfileStatusRequestBuilderGetQueryParameters 
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
     * Instantiates a new profileStatusRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
