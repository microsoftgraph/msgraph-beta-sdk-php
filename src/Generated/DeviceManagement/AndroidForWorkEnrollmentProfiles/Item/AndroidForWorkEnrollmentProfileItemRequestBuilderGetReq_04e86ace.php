<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AndroidForWorkEnrollmentProfileItemRequestBuilderGetRequestConfiguration
*/
class AndroidForWorkEnrollmentProfileItemRequestBuilderGetReq_04e86ace extends BaseRequestConfiguration 
{
    /**
     * @var AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2|null $queryParameters Request query parameters
    */
    public ?AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2 $queryParameters = null;
    
    /**
     * Instantiates a new AndroidForWorkEnrollmentProfileItemRequestBuilderGetReq_04e86ace and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2 {
        return new AndroidForWorkEnrollmentProfileItemRequestBuilderGetQue_ed51a9f2($expand, $select);
    }

}
