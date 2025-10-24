<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Connectivity\MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrl;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess\WebCategory;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getWebCategoryByUrl method.
*/
class MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $url Usage: url='{url}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $url = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/connectivity/microsoft.graph.networkaccess.getWebCategoryByUrl(url=\'{url}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['url'] = $url;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getWebCategoryByUrl
     * @param MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WebCategory|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WebCategory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getWebCategoryByUrl
     * @param MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilder {
        return new MicrosoftGraphNetworkaccessGetWebCategoryByUrlWithUrlRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
