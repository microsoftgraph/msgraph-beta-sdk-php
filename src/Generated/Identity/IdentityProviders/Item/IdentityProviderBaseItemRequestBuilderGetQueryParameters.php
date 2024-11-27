<?php

namespace Microsoft\Graph\Beta\Generated\Identity\IdentityProviders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties and relationships of the specified identity provider configured in the tenant. Among the types of providers derived from identityProviderBase, in Microsoft Entra, this operation can get a socialIdentityProvider, appleManagedIdentityProvider (external tenant only), builtinIdentityProvider, or an oidcIdentityProvider (external tenant only) resource. In Azure AD B2C, this operation can get a socialIdentityProvider, appleManagedIdentityProvider, builtinIdentityProvider, or an openIdConnectIdentityProvider resource.
*/
class IdentityProviderBaseItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new IdentityProviderBaseItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
