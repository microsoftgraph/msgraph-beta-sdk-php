<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ExternalIdentitiesPolicy;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of the tenant-wide externalIdentitiesPolicy object that controls whether external users can leave an Azure AD tenant via self-service controls.
*/
class ExternalIdentitiesPolicyRequestBuilderGetQueryParameters 
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
