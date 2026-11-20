<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityVerificationStatusRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentityVerificationStatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityVerificationStatusRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityVerificationStatusRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityVerificationStatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityVerificationStatusRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityVerificationStatusRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityVerificationStatusRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentityVerificationStatusRequestBuilderGetQueryParameters {
        return new IdentityVerificationStatusRequestBuilderGetQueryParameters($expand, $select);
    }

}
