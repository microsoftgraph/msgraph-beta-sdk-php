<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Item\Audience\ApplicableContent\Item\MatchedDevices\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ApplicableContentDeviceMatchDeviceItemRequestBuilderGetRequestConfiguration
*/
class ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_961d2b43 extends BaseRequestConfiguration 
{
    /**
     * @var ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec|null $queryParameters Request query parameters
    */
    public ?ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec $queryParameters = null;
    
    /**
     * Instantiates a new ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_961d2b43 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec {
        return new ApplicableContentDeviceMatchDeviceItemRequestBuilderGet_bf4852ec($expand, $select);
    }

}
