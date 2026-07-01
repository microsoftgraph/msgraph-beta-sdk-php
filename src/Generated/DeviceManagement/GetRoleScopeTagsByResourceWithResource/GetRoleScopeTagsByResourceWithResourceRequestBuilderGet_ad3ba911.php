<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GetRoleScopeTagsByResourceWithResource;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getRoleScopeTagsByResourceWithResourceRequestBuilderGetRequestConfiguration
*/
class GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_ad3ba911 extends BaseRequestConfiguration 
{
    /**
     * @var GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a|null $queryParameters Request query parameters
    */
    public ?GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a $queryParameters = null;
    
    /**
     * Instantiates a new GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_ad3ba911 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a {
        return new GetRoleScopeTagsByResourceWithResourceRequestBuilderGet_2e02d31a($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
