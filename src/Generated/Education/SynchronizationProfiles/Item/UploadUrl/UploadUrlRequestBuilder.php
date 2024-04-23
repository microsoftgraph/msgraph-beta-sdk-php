<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\UploadUrl;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the uploadUrl method.
*/
class UploadUrlRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UploadUrlRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/synchronizationProfiles/{educationSynchronizationProfile%2Did}/uploadUrl()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a shared access signature (SAS) for uploading source files to Azure blob storage for a specific school data synchronization profile in the tenant. The SAS token has a validity of one hour. The upload URL is provided only for the CSV data provider.
     * @param UploadUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UploadUrlGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationsynchronizationprofile-uploadurl?view=graph-rest-beta Find more info here
    */
    public function get(?UploadUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UploadUrlGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a shared access signature (SAS) for uploading source files to Azure blob storage for a specific school data synchronization profile in the tenant. The SAS token has a validity of one hour. The upload URL is provided only for the CSV data provider.
     * @param UploadUrlRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UploadUrlRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UploadUrlRequestBuilder
    */
    public function withUrl(string $rawUrl): UploadUrlRequestBuilder {
        return new UploadUrlRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
