<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelSites\Item\MicrosoftTunnelServers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelSites\Item\MicrosoftTunnelServers\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelSites\Item\MicrosoftTunnelServers\Item\MicrosoftTunnelServerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelServer;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelServerCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the microsoftTunnelServers property of the microsoft.graph.microsoftTunnelSite entity.
*/
class MicrosoftTunnelServersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the microsoftTunnelServers property of the microsoft.graph.microsoftTunnelSite entity.
     * @param string $microsoftTunnelServerId The unique identifier of microsoftTunnelServer
     * @return MicrosoftTunnelServerItemRequestBuilder
    */
    public function byMicrosoftTunnelServerId(string $microsoftTunnelServerId): MicrosoftTunnelServerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['microsoftTunnelServer%2Did'] = $microsoftTunnelServerId;
        return new MicrosoftTunnelServerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MicrosoftTunnelServersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/microsoftTunnelSites/{microsoftTunnelSite%2Did}/microsoftTunnelServers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     * @param MicrosoftTunnelServersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftTunnelServerCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MicrosoftTunnelServersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftTunnelServerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to microsoftTunnelServers for deviceManagement
     * @param MicrosoftTunnelServer $body The request body
     * @param MicrosoftTunnelServersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftTunnelServer|null>
     * @throws Exception
    */
    public function post(MicrosoftTunnelServer $body, ?MicrosoftTunnelServersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftTunnelServer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     * @param MicrosoftTunnelServersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftTunnelServersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to microsoftTunnelServers for deviceManagement
     * @param MicrosoftTunnelServer $body The request body
     * @param MicrosoftTunnelServersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MicrosoftTunnelServer $body, ?MicrosoftTunnelServersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftTunnelServersRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftTunnelServersRequestBuilder {
        return new MicrosoftTunnelServersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
