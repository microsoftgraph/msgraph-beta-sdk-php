<?php

namespace Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RegistrationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RegistrationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RegistrationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new registrationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RegistrationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RegistrationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new registrationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RegistrationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RegistrationRequestBuilderGetQueryParameters {
        return new RegistrationRequestBuilderGetQueryParameters($expand, $select);
    }

}
