<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Copy;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DriveItem;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the copy method.
*/
class CopyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CopyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/copy');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Create a copy of a driveItem asynchronously. You can optionally copy exclusively the child items, specify a new parent folder, or provide a new name. Once the request is accepted, the operation is queued and processed asynchronously. Use the monitor URL to track progress until the operation completes.
     * @param CopyPostRequestBody $body The request body
     * @param CopyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveItem|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driveitem-copy?view=graph-rest-beta Find more info here
    */
    public function post(CopyPostRequestBody $body, ?CopyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a copy of a driveItem asynchronously. You can optionally copy exclusively the child items, specify a new parent folder, or provide a new name. Once the request is accepted, the operation is queued and processed asynchronously. Use the monitor URL to track progress until the operation completes.
     * @param CopyPostRequestBody $body The request body
     * @param CopyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CopyPostRequestBody $body, ?CopyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CopyRequestBuilder
    */
    public function withUrl(string $rawUrl): CopyRequestBuilder {
        return new CopyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
