<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Entra\UxSetting;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UxSettingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UxSettingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UxSettingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UxSettingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UxSettingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UxSettingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UxSettingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UxSettingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UxSettingRequestBuilderGetQueryParameters {
        return new UxSettingRequestBuilderGetQueryParameters($expand, $select);
    }

}
