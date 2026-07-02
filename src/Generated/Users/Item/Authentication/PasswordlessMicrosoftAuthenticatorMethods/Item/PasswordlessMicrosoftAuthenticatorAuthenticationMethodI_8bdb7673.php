<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilderGetRequestConfiguration
*/
class PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_8bdb7673 extends BaseRequestConfiguration 
{
    /**
     * @var PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2|null $queryParameters Request query parameters
    */
    public ?PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2 $queryParameters = null;
    
    /**
     * Instantiates a new PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_8bdb7673 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2 {
        return new PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_ed6beed2($expand, $select);
    }

}
