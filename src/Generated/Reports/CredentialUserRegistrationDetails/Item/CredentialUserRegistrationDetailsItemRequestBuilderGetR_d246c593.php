<?php

namespace Microsoft\Graph\Beta\Generated\Reports\CredentialUserRegistrationDetails\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CredentialUserRegistrationDetailsItemRequestBuilderGetRequestConfiguration
*/
class CredentialUserRegistrationDetailsItemRequestBuilderGetR_d246c593 extends BaseRequestConfiguration 
{
    /**
     * @var CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c|null $queryParameters Request query parameters
    */
    public ?CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c $queryParameters = null;
    
    /**
     * Instantiates a new CredentialUserRegistrationDetailsItemRequestBuilderGetR_d246c593 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c {
        return new CredentialUserRegistrationDetailsItemRequestBuilderGetQ_f790f67c($expand, $select);
    }

}
