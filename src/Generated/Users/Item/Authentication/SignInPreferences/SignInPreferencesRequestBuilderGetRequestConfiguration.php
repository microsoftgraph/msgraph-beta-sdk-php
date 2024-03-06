<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\SignInPreferences;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SignInPreferencesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SignInPreferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SignInPreferencesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SignInPreferencesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SignInPreferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SignInPreferencesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SignInPreferencesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SignInPreferencesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SignInPreferencesRequestBuilderGetQueryParameters {
        return new SignInPreferencesRequestBuilderGetQueryParameters($expand, $select);
    }

}
