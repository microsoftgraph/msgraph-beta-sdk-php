<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Settings\ForwardingOptions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\ForwardingOptions;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the forwardingOptions property of the microsoft.graph.networkaccess.settings entity.
*/
class ForwardingOptionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ForwardingOptionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/settings/forwardingOptions{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property forwardingOptions for networkAccess
     * @param ForwardingOptionsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ForwardingOptionsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the forwarding options for the tenant, with a specific focus on the 'skipDnsLookupState' flag. This flag determines whether DNS lookup will be skipped, allowing Microsoft 365 traffic to be forwarded directly to the Front Door using the client-resolved destination.
     * @param ForwardingOptionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ForwardingOptions|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-forwardingoptions-get?view=graph-rest-beta Find more info here
    */
    public function get(?ForwardingOptionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ForwardingOptions::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * the forwarding options for the tenant, with a specific focus on the skipDnsLookupState flag. This flag determines whether DNS lookup will be skipped, allowing Microsoft 365 traffic to be forwarded directly to the Front Door using the client-resolved destination.
     * @param ForwardingOptions $body The request body
     * @param ForwardingOptionsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ForwardingOptions|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-forwardingoptions-update?view=graph-rest-beta Find more info here
    */
    public function patch(ForwardingOptions $body, ?ForwardingOptionsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ForwardingOptions::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property forwardingOptions for networkAccess
     * @param ForwardingOptionsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ForwardingOptionsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Retrieve the forwarding options for the tenant, with a specific focus on the 'skipDnsLookupState' flag. This flag determines whether DNS lookup will be skipped, allowing Microsoft 365 traffic to be forwarded directly to the Front Door using the client-resolved destination.
     * @param ForwardingOptionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ForwardingOptionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * the forwarding options for the tenant, with a specific focus on the skipDnsLookupState flag. This flag determines whether DNS lookup will be skipped, allowing Microsoft 365 traffic to be forwarded directly to the Front Door using the client-resolved destination.
     * @param ForwardingOptions $body The request body
     * @param ForwardingOptionsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ForwardingOptions $body, ?ForwardingOptionsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return ForwardingOptionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ForwardingOptionsRequestBuilder {
        return new ForwardingOptionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
