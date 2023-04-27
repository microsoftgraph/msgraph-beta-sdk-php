<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Item\UpdatableAssetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\WindowsUpdatesEnrollAssets\WindowsUpdatesEnrollAssetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\WindowsUpdatesEnrollAssetsById\WindowsUpdatesEnrollAssetsByIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\WindowsUpdatesUnenrollAssets\WindowsUpdatesUnenrollAssetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\WindowsUpdatesUnenrollAssetsById\WindowsUpdatesUnenrollAssetsByIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAssetCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the updatableAssets property of the microsoft.graph.adminWindowsUpdates entity.
*/
class UpdatableAssetsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enrollAssets method.
    */
    public function windowsUpdatesEnrollAssets(): WindowsUpdatesEnrollAssetsRequestBuilder {
        return new WindowsUpdatesEnrollAssetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enrollAssetsById method.
    */
    public function windowsUpdatesEnrollAssetsById(): WindowsUpdatesEnrollAssetsByIdRequestBuilder {
        return new WindowsUpdatesEnrollAssetsByIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unenrollAssets method.
    */
    public function windowsUpdatesUnenrollAssets(): WindowsUpdatesUnenrollAssetsRequestBuilder {
        return new WindowsUpdatesUnenrollAssetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unenrollAssetsById method.
    */
    public function windowsUpdatesUnenrollAssetsById(): WindowsUpdatesUnenrollAssetsByIdRequestBuilder {
        return new WindowsUpdatesUnenrollAssetsByIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the updatableAssets property of the microsoft.graph.adminWindowsUpdates entity.
     * @param string $updatableAssetId Unique identifier of the item
     * @return UpdatableAssetItemRequestBuilder
    */
    public function byUpdatableAssetId(string $updatableAssetId): UpdatableAssetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['updatableAsset%2Did'] = $updatableAssetId;
        return new UpdatableAssetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UpdatableAssetsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/updatableAssets{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Assets registered with the deployment service that can receive updates.
     * @param UpdatableAssetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?UpdatableAssetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UpdatableAssetCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to updatableAssets for admin
     * @param UpdatableAsset $body The request body
     * @param UpdatableAssetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(UpdatableAsset $body, ?UpdatableAssetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UpdatableAsset::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Assets registered with the deployment service that can receive updates.
     * @param UpdatableAssetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UpdatableAssetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to updatableAssets for admin
     * @param UpdatableAsset $body The request body
     * @param UpdatableAssetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdatableAsset $body, ?UpdatableAssetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
