<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Members\Item\GraphServicePrincipal;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a list of the group's direct members. A group can have users, contacts, devices, service principals, and other groups as members. This operation isn't transitive.
*/
class GraphServicePrincipalRequestBuilderGetQueryParameters 
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
     * Instantiates a new GraphServicePrincipalRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
