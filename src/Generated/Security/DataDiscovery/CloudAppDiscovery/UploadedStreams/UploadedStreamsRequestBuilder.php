<?php

namespace Microsoft\Graph\Beta\Generated\Security\DataDiscovery\CloudAppDiscovery\UploadedStreams;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\CloudAppDiscoveryReport;
use Microsoft\Graph\Beta\Generated\Models\Security\CloudAppDiscoveryReportCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\DataDiscovery\CloudAppDiscovery\UploadedStreams\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\DataDiscovery\CloudAppDiscovery\UploadedStreams\Item\CloudAppDiscoveryReportItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the uploadedStreams property of the microsoft.graph.security.dataDiscoveryReport entity.
*/
class UploadedStreamsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the uploadedStreams property of the microsoft.graph.security.dataDiscoveryReport entity.
     * @param string $cloudAppDiscoveryReportId The unique identifier of cloudAppDiscoveryReport
     * @return CloudAppDiscoveryReportItemRequestBuilder
    */
    public function byCloudAppDiscoveryReportId(string $cloudAppDiscoveryReportId): CloudAppDiscoveryReportItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudAppDiscoveryReport%2Did'] = $cloudAppDiscoveryReportId;
        return new CloudAppDiscoveryReportItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UploadedStreamsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/dataDiscovery/cloudAppDiscovery/uploadedStreams{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get visibility into all the manually uploaded streams from your firewalls and proxies.
     * @param UploadedStreamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudAppDiscoveryReportCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-datadiscoveryreport-list-uploadedstreams?view=graph-rest-beta Find more info here
    */
    public function get(?UploadedStreamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudAppDiscoveryReportCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to uploadedStreams for security
     * @param CloudAppDiscoveryReport $body The request body
     * @param UploadedStreamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudAppDiscoveryReport|null>
     * @throws Exception
    */
    public function post(CloudAppDiscoveryReport $body, ?UploadedStreamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudAppDiscoveryReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get visibility into all the manually uploaded streams from your firewalls and proxies.
     * @param UploadedStreamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UploadedStreamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to uploadedStreams for security
     * @param CloudAppDiscoveryReport $body The request body
     * @param UploadedStreamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudAppDiscoveryReport $body, ?UploadedStreamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UploadedStreamsRequestBuilder
    */
    public function withUrl(string $rawUrl): UploadedStreamsRequestBuilder {
        return new UploadedStreamsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
