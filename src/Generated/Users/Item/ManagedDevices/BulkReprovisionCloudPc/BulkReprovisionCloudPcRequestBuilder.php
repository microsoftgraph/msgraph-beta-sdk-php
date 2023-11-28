<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\BulkReprovisionCloudPc;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcBulkRemoteActionResult;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the bulkReprovisionCloudPc method.
*/
class BulkReprovisionCloudPcRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BulkReprovisionCloudPcRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/managedDevices/bulkReprovisionCloudPc');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Bulk reprovision a set of Cloud PC devices with Intune managed device IDs.
     * @param BulkReprovisionCloudPcPostRequestBody $body The request body
     * @param BulkReprovisionCloudPcRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcBulkRemoteActionResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/manageddevice-bulkreprovisioncloudpc?view=graph-rest-1.0 Find more info here
    */
    public function post(BulkReprovisionCloudPcPostRequestBody $body, ?BulkReprovisionCloudPcRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcBulkRemoteActionResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Bulk reprovision a set of Cloud PC devices with Intune managed device IDs.
     * @param BulkReprovisionCloudPcPostRequestBody $body The request body
     * @param BulkReprovisionCloudPcRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkReprovisionCloudPcPostRequestBody $body, ?BulkReprovisionCloudPcRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BulkReprovisionCloudPcRequestBuilder
    */
    public function withUrl(string $rawUrl): BulkReprovisionCloudPcRequestBuilder {
        return new BulkReprovisionCloudPcRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
