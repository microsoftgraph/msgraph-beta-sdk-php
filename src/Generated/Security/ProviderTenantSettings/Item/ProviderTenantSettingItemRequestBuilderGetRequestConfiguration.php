<?php

namespace Microsoft\Graph\Beta\Generated\Security\ProviderTenantSettings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProviderTenantSettingItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProviderTenantSettingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProviderTenantSettingItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProviderTenantSettingItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProviderTenantSettingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProviderTenantSettingItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProviderTenantSettingItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProviderTenantSettingItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProviderTenantSettingItemRequestBuilderGetQueryParameters {
        return new ProviderTenantSettingItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
