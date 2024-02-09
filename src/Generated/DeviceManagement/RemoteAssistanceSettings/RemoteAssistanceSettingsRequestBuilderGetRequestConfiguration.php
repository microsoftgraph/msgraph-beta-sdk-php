<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\RemoteAssistanceSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RemoteAssistanceSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RemoteAssistanceSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RemoteAssistanceSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RemoteAssistanceSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RemoteAssistanceSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteAssistanceSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RemoteAssistanceSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RemoteAssistanceSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RemoteAssistanceSettingsRequestBuilderGetQueryParameters {
        return new RemoteAssistanceSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
