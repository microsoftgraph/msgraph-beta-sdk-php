<?php

namespace Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the properties and relationships of an administrativeUnit object. Since the **administrativeUnit** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in an **administrativeUnit** instance.
*/
class AdministrativeUnitItemRequestBuilderGetQueryParameters 
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
    
}
