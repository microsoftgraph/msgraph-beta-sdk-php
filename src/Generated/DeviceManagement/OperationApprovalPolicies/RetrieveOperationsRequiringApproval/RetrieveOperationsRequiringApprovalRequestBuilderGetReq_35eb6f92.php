<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\OperationApprovalPolicies\RetrieveOperationsRequiringApproval;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrieveOperationsRequiringApprovalRequestBuilderGetRequestConfiguration
*/
class RetrieveOperationsRequiringApprovalRequestBuilderGetReq_35eb6f92 extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198|null $queryParameters Request query parameters
    */
    public ?RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198 $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveOperationsRequiringApprovalRequestBuilderGetReq_35eb6f92 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198 {
        return new RetrieveOperationsRequiringApprovalRequestBuilderGetQue_28aa2198($count, $filter, $search, $skip, $top);
    }

}
