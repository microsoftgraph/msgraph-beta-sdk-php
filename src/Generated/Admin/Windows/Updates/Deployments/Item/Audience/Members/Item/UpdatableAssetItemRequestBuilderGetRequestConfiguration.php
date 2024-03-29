<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Members\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UpdatableAssetItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UpdatableAssetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UpdatableAssetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UpdatableAssetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UpdatableAssetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UpdatableAssetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UpdatableAssetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UpdatableAssetItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UpdatableAssetItemRequestBuilderGetQueryParameters {
        return new UpdatableAssetItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
