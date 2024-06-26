<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies\Item\BrowserSharedCookieItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\BrowserSharedCookie;
use Microsoft\Graph\Beta\Generated\Models\BrowserSharedCookieCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharedCookies property of the microsoft.graph.browserSiteList entity.
*/
class SharedCookiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharedCookies property of the microsoft.graph.browserSiteList entity.
     * @param string $browserSharedCookieId The unique identifier of browserSharedCookie
     * @return BrowserSharedCookieItemRequestBuilder
    */
    public function byBrowserSharedCookieId(string $browserSharedCookieId): BrowserSharedCookieItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['browserSharedCookie%2Did'] = $browserSharedCookieId;
        return new BrowserSharedCookieItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SharedCookiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/edge/internetExplorerMode/siteLists/{browserSiteList%2Did}/sharedCookies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the browserSharedCookie objects and their properties.
     * @param SharedCookiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BrowserSharedCookieCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/browsersitelist-list-sharedcookies?view=graph-rest-beta Find more info here
    */
    public function get(?SharedCookiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BrowserSharedCookieCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new browserSharedCookie object in a browserSiteList.
     * @param BrowserSharedCookie $body The request body
     * @param SharedCookiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BrowserSharedCookie|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/browsersitelist-post-sharedcookies?view=graph-rest-beta Find more info here
    */
    public function post(BrowserSharedCookie $body, ?SharedCookiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BrowserSharedCookie::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the browserSharedCookie objects and their properties.
     * @param SharedCookiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharedCookiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a new browserSharedCookie object in a browserSiteList.
     * @param BrowserSharedCookie $body The request body
     * @param SharedCookiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BrowserSharedCookie $body, ?SharedCookiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SharedCookiesRequestBuilder
    */
    public function withUrl(string $rawUrl): SharedCookiesRequestBuilder {
        return new SharedCookiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
