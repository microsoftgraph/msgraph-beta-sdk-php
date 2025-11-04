<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\Snapshots\ImportSnapshot;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\CloudPcSnapshotImportActionResult;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the importSnapshot method.
*/
class ImportSnapshotRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ImportSnapshotRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/snapshots/importSnapshot');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Import the snapshot from the customer-managed storage account using the provided information, and store it in the Azure storage account within the Cloud PC service on behalf of the customer.  To provision a new Cloud PC for a licensed user, import a valid .vhd snapshot from a customer-managed storage account into the Azure storage account used by the Cloud PC service.
     * @param ImportSnapshotPostRequestBody $body The request body
     * @param ImportSnapshotRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcSnapshotImportActionResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcsnapshot-importsnapshot?view=graph-rest-beta Find more info here
    */
    public function post(ImportSnapshotPostRequestBody $body, ?ImportSnapshotRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcSnapshotImportActionResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Import the snapshot from the customer-managed storage account using the provided information, and store it in the Azure storage account within the Cloud PC service on behalf of the customer.  To provision a new Cloud PC for a licensed user, import a valid .vhd snapshot from a customer-managed storage account into the Azure storage account used by the Cloud PC service.
     * @param ImportSnapshotPostRequestBody $body The request body
     * @param ImportSnapshotRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ImportSnapshotPostRequestBody $body, ?ImportSnapshotRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ImportSnapshotRequestBuilder
    */
    public function withUrl(string $rawUrl): ImportSnapshotRequestBuilder {
        return new ImportSnapshotRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
