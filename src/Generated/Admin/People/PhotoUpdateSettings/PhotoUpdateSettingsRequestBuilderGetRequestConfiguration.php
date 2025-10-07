<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\People\PhotoUpdateSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PhotoUpdateSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PhotoUpdateSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PhotoUpdateSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PhotoUpdateSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PhotoUpdateSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PhotoUpdateSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PhotoUpdateSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PhotoUpdateSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PhotoUpdateSettingsRequestBuilderGetQueryParameters {
        return new PhotoUpdateSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
