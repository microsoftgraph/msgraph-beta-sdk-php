<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new androidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters {
        return new AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

    /**
     * Instantiates a new androidDeviceOwnerEnrollmentProfilesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidDeviceOwnerEnrollmentProfilesRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
