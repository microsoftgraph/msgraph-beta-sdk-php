<?php

namespace Microsoft\Graph\Beta\Generated\Directory\DeletedItems\Item\GraphGroup;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a list of recently deleted directory objects from deleted items. The following types are supported:- administrativeUnit- application- certificateBasedAuthPki- certificateAuthorityDetail- externalUserProfile- group- pendingExternalUserProfile- servicePrincipal- user
*/
class GraphGroupRequestBuilderGetQueryParameters 
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
     * Instantiates a new GraphGroupRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
