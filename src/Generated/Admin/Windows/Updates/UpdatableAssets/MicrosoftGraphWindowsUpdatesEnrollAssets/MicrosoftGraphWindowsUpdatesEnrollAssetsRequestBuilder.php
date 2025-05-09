<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\MicrosoftGraphWindowsUpdatesEnrollAssets;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the enrollAssets method.
*/
class MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/updatableAssets/microsoft.graph.windowsUpdates.enrollAssets');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Enroll updatableAsset resources in update management by Windows Autopatch. You can enroll an azureADDevice resource in update management, but may not enroll an updatableAssetGroup in update management. Enrolling a Microsoft Entra device in update management automatically creates an azureADDevice object if it does not already exist. You can also use the method enrollAssetsById to enroll assets.
     * @param EnrollAssetsPostRequestBody $body The request body
     * @param MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(EnrollAssetsPostRequestBody $body, ?MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Enroll updatableAsset resources in update management by Windows Autopatch. You can enroll an azureADDevice resource in update management, but may not enroll an updatableAssetGroup in update management. Enrolling a Microsoft Entra device in update management automatically creates an azureADDevice object if it does not already exist. You can also use the method enrollAssetsById to enroll assets.
     * @param EnrollAssetsPostRequestBody $body The request body
     * @param MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EnrollAssetsPostRequestBody $body, ?MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesEnrollAssetsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
