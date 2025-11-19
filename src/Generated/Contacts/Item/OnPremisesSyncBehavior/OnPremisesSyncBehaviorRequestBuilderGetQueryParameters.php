<?php

namespace Microsoft\\Graph\\Beta\\Generated\Contacts\Item\OnPremisesSyncBehavior;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Indicates the state of synchronization for an orgContact between the cloud and on-premises Active Directory. Supports $filter only with advanced query capabilities, for example, $filter=onPremisesSyncBehavior/isCloudManaged eq true&$count=true.
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
