<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: deviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationsAllManagedDeviceCertificateStatesRe_011a068d extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationsAllManagedDeviceCertificateStatesRe_011a068d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc {
        return new DeviceConfigurationsAllManagedDeviceCertificateStatesRe_ded3e9fc($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
