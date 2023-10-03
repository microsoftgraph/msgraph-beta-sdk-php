<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Configuration;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the configuration details of a Microsoft Teams-enabled device, including software versions, peripheral device configuration (for example, camera, display, microphone, and speaker), hardware configuration, and Microsoft Teams client configuration. This API is supported in the following national cloud deployments.
*/
class ConfigurationRequestBuilderGetQueryParameters 
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
     * Instantiates a new configurationRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
