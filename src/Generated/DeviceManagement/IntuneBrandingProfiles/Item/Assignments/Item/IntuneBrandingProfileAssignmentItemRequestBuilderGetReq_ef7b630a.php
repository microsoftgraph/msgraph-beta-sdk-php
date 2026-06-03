<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\IntuneBrandingProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: IntuneBrandingProfileAssignmentItemRequestBuilderGetRequestConfiguration
*/
class IntuneBrandingProfileAssignmentItemRequestBuilderGetReq_ef7b630a extends BaseRequestConfiguration 
{
    /**
     * @var IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded|null $queryParameters Request query parameters
    */
    public ?IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded $queryParameters = null;
    
    /**
     * Instantiates a new IntuneBrandingProfileAssignmentItemRequestBuilderGetReq_ef7b630a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded {
        return new IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded($expand, $select);
    }

}
