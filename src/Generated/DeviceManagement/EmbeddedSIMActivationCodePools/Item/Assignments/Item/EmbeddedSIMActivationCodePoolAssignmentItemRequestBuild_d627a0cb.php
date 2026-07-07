<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilderGetRequestConfiguration
*/
class EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_d627a0cb extends BaseRequestConfiguration 
{
    /**
     * @var EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3|null $queryParameters Request query parameters
    */
    public ?EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3 $queryParameters = null;
    
    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_d627a0cb and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3 {
        return new EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3($expand, $select);
    }

}
