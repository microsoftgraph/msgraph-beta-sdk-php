<?php

namespace Microsoft\\Graph\\Beta\\Generated\Sites\Item\ContentModels\Item\AddToDrive;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ContentModelUsage;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the addToDrive method.
*/
class AddToDriveRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AddToDriveRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/contentModels/{contentModel%2Did}/addToDrive');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Apply a contentModel to SharePoint document libraries. For an existing model that's already trained, this action automatically processes new documents that are added to the SharePoint libraries.
     * @param AddToDrivePostRequestBody $body The request body
     * @param AddToDriveRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentModelUsage|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/contentmodel-addtodrive?view=graph-rest-beta Find more info here
    */
    public function post(AddToDrivePostRequestBody $body, ?AddToDriveRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentModelUsage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Apply a contentModel to SharePoint document libraries. For an existing model that's already trained, this action automatically processes new documents that are added to the SharePoint libraries.
     * @param AddToDrivePostRequestBody $body The request body
     * @param AddToDriveRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddToDrivePostRequestBody $body, ?AddToDriveRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AddToDriveRequestBuilder
    */
    public function withUrl(string $rawUrl): AddToDriveRequestBuilder {
        return new AddToDriveRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
