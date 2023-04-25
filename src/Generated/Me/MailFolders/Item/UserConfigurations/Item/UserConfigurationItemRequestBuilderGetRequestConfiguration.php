<?php

namespace Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\UserConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserConfigurationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserConfigurationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserConfigurationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return UserConfigurationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): UserConfigurationItemRequestBuilderGetQueryParameters {
        return new UserConfigurationItemRequestBuilderGetQueryParameters($select);
    }

}
