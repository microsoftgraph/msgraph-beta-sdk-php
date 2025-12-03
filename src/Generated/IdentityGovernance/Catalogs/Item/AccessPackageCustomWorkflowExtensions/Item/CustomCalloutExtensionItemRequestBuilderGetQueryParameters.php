<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\Catalogs\Item\AccessPackageCustomWorkflowExtensions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The attributes of a logic app, which can be called at various stages of an access package request and assignment cycle.
*/
class CustomCalloutExtensionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new CustomCalloutExtensionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
