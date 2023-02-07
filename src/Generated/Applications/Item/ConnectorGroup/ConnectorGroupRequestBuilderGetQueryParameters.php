<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\ConnectorGroup;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The connectorGroup the application is using with Azure AD Application Proxy. Nullable.
*/
class ConnectorGroupRequestBuilderGetQueryParameters 
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
