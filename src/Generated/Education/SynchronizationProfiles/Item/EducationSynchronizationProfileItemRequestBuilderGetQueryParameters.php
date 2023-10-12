<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a school data synchronization profile in the tenant based on the identifier. This API is available in the following national cloud deployments.
*/
class EducationSynchronizationProfileItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new EducationSynchronizationProfileItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
