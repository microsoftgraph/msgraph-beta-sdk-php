<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Connectivity\Branches\Item\ConnectivityConfiguration\Links;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess\ConnectivityConfigurationLink;
use Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess\ConnectivityConfigurationLinkCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Connectivity\Branches\Item\ConnectivityConfiguration\Links\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Connectivity\Branches\Item\ConnectivityConfiguration\Links\Item\ConnectivityConfigurationLinkItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the links property of the microsoft.graph.networkaccess.branchConnectivityConfiguration entity.
*/
class LinksRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the links property of the microsoft.graph.networkaccess.branchConnectivityConfiguration entity.
     * @param string $connectivityConfigurationLinkId The unique identifier of connectivityConfigurationLink
     * @return ConnectivityConfigurationLinkItemRequestBuilder
    */
    public function byConnectivityConfigurationLinkId(string $connectivityConfigurationLinkId): ConnectivityConfigurationLinkItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['connectivityConfigurationLink%2Did'] = $connectivityConfigurationLinkId;
        return new ConnectivityConfigurationLinkItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LinksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/connectivity/branches/{branchSite%2Did}/connectivityConfiguration/links{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List of connectivity configurations for deviceLink objects.
     * @param LinksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConnectivityConfigurationLinkCollectionResponse|null>
     * @throws Exception
    */
    public function get(?LinksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConnectivityConfigurationLinkCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to links for networkAccess
     * @param ConnectivityConfigurationLink $body The request body
     * @param LinksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConnectivityConfigurationLink|null>
     * @throws Exception
    */
    public function post(ConnectivityConfigurationLink $body, ?LinksRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConnectivityConfigurationLink::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List of connectivity configurations for deviceLink objects.
     * @param LinksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LinksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to links for networkAccess
     * @param ConnectivityConfigurationLink $body The request body
     * @param LinksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConnectivityConfigurationLink $body, ?LinksRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LinksRequestBuilder
    */
    public function withUrl(string $rawUrl): LinksRequestBuilder {
        return new LinksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
