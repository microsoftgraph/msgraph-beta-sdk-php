<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\OnPremisesSyncBehavior;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties of an onPremisesSyncBehavior object. The isCloudManaged property indicates whether the object's source of authority is set to the cloud. If true, updates from on-premises Active Directory are blocked in the cloud; if false, updates from on-premises Active Directory are allowed in the cloud and the object can be taken over by on-premises Active Directory.
*/
class OnPremisesSyncBehaviorRequestBuilderGetQueryParameters 
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
     * Instantiates a new OnPremisesSyncBehaviorRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
