<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudPCConnectivityIssues;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudPCConnectivityIssues\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudPCConnectivityIssues\Item\CloudPCConnectivityIssueItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPCConnectivityIssue;
use Microsoft\Graph\Beta\Generated\Models\CloudPCConnectivityIssueCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudPCConnectivityIssues property of the microsoft.graph.deviceManagement entity.
*/
class CloudPCConnectivityIssuesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPCConnectivityIssues property of the microsoft.graph.deviceManagement entity.
     * @param string $cloudPCConnectivityIssueId The unique identifier of cloudPCConnectivityIssue
     * @return CloudPCConnectivityIssueItemRequestBuilder
    */
    public function byCloudPCConnectivityIssueId(string $cloudPCConnectivityIssueId): CloudPCConnectivityIssueItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPCConnectivityIssue%2Did'] = $cloudPCConnectivityIssueId;
        return new CloudPCConnectivityIssueItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CloudPCConnectivityIssuesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/cloudPCConnectivityIssues{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of CloudPC Connectivity Issue.
     * @param CloudPCConnectivityIssuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPCConnectivityIssueCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CloudPCConnectivityIssuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPCConnectivityIssueCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to cloudPCConnectivityIssues for deviceManagement
     * @param CloudPCConnectivityIssue $body The request body
     * @param CloudPCConnectivityIssuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPCConnectivityIssue|null>
     * @throws Exception
    */
    public function post(CloudPCConnectivityIssue $body, ?CloudPCConnectivityIssuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPCConnectivityIssue::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of CloudPC Connectivity Issue.
     * @param CloudPCConnectivityIssuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPCConnectivityIssuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to cloudPCConnectivityIssues for deviceManagement
     * @param CloudPCConnectivityIssue $body The request body
     * @param CloudPCConnectivityIssuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudPCConnectivityIssue $body, ?CloudPCConnectivityIssuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudPCConnectivityIssuesRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPCConnectivityIssuesRequestBuilder {
        return new CloudPCConnectivityIssuesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
