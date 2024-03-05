<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\GetCustomizedSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetCustomizedSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetCustomizedSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetCustomizedSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetCustomizedSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetCustomizedSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetCustomizedSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetCustomizedSettingsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetCustomizedSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetCustomizedSettingsRequestBuilderGetQueryParameters {
        return new GetCustomizedSettingsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
