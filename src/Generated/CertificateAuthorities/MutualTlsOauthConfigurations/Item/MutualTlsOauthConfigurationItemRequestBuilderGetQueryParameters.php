<?php

namespace Microsoft\Graph\Beta\Generated\CertificateAuthorities\MutualTlsOauthConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Defines the trusted certificate authorities for certificates that can be added to Internet of Things (IoT) devices.
*/
class MutualTlsOauthConfigurationItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new MutualTlsOauthConfigurationItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
