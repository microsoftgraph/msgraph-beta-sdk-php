<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Microsoft365Apps\InstallationOptions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InstallationOptionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InstallationOptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InstallationOptionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new installationOptionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InstallationOptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InstallationOptionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new installationOptionsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InstallationOptionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InstallationOptionsRequestBuilderGetQueryParameters {
        return new InstallationOptionsRequestBuilderGetQueryParameters($expand, $select);
    }

}
