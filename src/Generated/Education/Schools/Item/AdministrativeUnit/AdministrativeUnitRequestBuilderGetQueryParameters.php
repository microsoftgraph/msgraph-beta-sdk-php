<?php

namespace Microsoft\Graph\Beta\Generated\Education\Schools\Item\AdministrativeUnit;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the simple directory **administrativeUnit** that corresponds to this **educationSchool**.
*/
class AdministrativeUnitRequestBuilderGetQueryParameters 
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
