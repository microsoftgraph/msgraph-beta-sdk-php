<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\TenantSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TenantSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TenantSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TenantSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TenantSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TenantSettingsRequestBuilderGetQueryParameters {
        return new TenantSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
