<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\IntuneBrandingProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IntuneBrandingProfileAssignmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IntuneBrandingProfileAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters {
        return new IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
