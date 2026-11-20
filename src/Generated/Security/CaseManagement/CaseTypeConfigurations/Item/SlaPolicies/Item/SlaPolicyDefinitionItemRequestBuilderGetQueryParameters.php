<?php

namespace Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\SlaPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The contained SLA policy definitions configured for this case type. Supports $filter and $orderby on createdBy, createdDateTime, description, displayName, id, isActive, lastModifiedBy, and lastModifiedDateTime on the collection endpoint. For information about supported query parameters, see List slaPolicies. Also supports $count, $select, and $top on the collection endpoint. Supports $expand=slaPolicies when getting a case type configuration.
*/
class SlaPolicyDefinitionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new SlaPolicyDefinitionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
