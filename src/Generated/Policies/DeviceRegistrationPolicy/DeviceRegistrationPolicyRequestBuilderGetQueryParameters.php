<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeviceRegistrationPolicy;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a deviceRegistrationPolicy object. Represents deviceRegistrationPolicy quota restrictions, additional authentication, and authorization policies to register device identities to your organization. This API is available in the following national cloud deployments.
*/
class DeviceRegistrationPolicyRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new deviceRegistrationPolicyRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
