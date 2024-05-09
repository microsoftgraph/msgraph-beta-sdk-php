<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\MicrosoftGraphWindowsUpdatesUnenrollAssets;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the unenrollAssets method.
*/
class MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/updatableAssets/microsoft.graph.windowsUpdates.unenrollAssets');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Unenroll updatableAsset resources from update management by the deployment service. You can also use the method unenrollAssetsById to unenroll assets.
     * @param UnenrollAssetsPostRequestBody $body The request body
     * @param MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(UnenrollAssetsPostRequestBody $body, ?MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Unenroll updatableAsset resources from update management by the deployment service. You can also use the method unenrollAssetsById to unenroll assets.
     * @param UnenrollAssetsPostRequestBody $body The request body
     * @param MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnenrollAssetsPostRequestBody $body, ?MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesUnenrollAssetsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
