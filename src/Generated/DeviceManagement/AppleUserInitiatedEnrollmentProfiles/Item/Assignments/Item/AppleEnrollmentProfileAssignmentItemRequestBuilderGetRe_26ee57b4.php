<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AppleEnrollmentProfileAssignmentItemRequestBuilderGetRequestConfiguration
*/
class AppleEnrollmentProfileAssignmentItemRequestBuilderGetRe_26ee57b4 extends BaseRequestConfiguration 
{
    /**
     * @var AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686|null $queryParameters Request query parameters
    */
    public ?AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686 $queryParameters = null;
    
    /**
     * Instantiates a new AppleEnrollmentProfileAssignmentItemRequestBuilderGetRe_26ee57b4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686 {
        return new AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686($expand, $select);
    }

}
