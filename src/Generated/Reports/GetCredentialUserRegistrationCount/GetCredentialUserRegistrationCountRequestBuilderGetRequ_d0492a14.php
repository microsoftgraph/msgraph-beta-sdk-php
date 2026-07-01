<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetCredentialUserRegistrationCount;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getCredentialUserRegistrationCountRequestBuilderGetRequestConfiguration
*/
class GetCredentialUserRegistrationCountRequestBuilderGetRequ_d0492a14 extends BaseRequestConfiguration 
{
    /**
     * @var GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85|null $queryParameters Request query parameters
    */
    public ?GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85 $queryParameters = null;
    
    /**
     * Instantiates a new GetCredentialUserRegistrationCountRequestBuilderGetRequ_d0492a14 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85 {
        return new GetCredentialUserRegistrationCountRequestBuilderGetQuer_8416fa85($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
