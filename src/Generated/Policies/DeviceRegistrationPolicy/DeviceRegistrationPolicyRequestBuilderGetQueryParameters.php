<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeviceRegistrationPolicy;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a deviceRegistrationPolicy object. Represents deviceRegistrationPolicy quota restrictions, additional authentication, and authorization policies to register device identities to your organization.
*/
class DeviceRegistrationPolicyRequestBuilderGetQueryParameters 
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
