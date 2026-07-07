<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AppleUserInitiatedEnrollmentProfileItemRequestBuilderGetRequestConfiguration
*/
class AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_69f87f9d extends BaseRequestConfiguration 
{
    /**
     * @var AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a|null $queryParameters Request query parameters
    */
    public ?AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a $queryParameters = null;
    
    /**
     * Instantiates a new AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_69f87f9d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a {
        return new AppleUserInitiatedEnrollmentProfileItemRequestBuilderGe_3890838a($expand, $select);
    }

}
