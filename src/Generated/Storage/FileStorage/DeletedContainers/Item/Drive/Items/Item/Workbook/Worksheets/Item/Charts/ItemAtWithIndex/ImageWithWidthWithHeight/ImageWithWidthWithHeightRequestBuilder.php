<?php

namespace Microsoft\Graph\Beta\Generated\Storage\FileStorage\DeletedContainers\Item\Drive\Items\Item\Workbook\Worksheets\Item\Charts\ItemAtWithIndex\ImageWithWidthWithHeight;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the image method.
*/
class ImageWithWidthWithHeightRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ImageWithWidthWithHeightRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $height Usage: height={height}
     * @param int|null $width Usage: width={width}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $height = null, ?int $width = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/deletedContainers/{fileStorageContainer%2Did}/drive/items/{driveItem%2Did}/workbook/worksheets/{workbookWorksheet%2Did}/charts/itemAt(index={index})/image(width={width},height={height})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['height'] = $height;
            $urlTplParams['width'] = $width;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function image
     * @param ImageWithWidthWithHeightRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImageWithWidthWithHeightGetResponse|null>
     * @throws Exception
    */
    public function get(?ImageWithWidthWithHeightRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImageWithWidthWithHeightGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function image
     * @param ImageWithWidthWithHeightRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ImageWithWidthWithHeightRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ImageWithWidthWithHeightRequestBuilder
    */
    public function withUrl(string $rawUrl): ImageWithWidthWithHeightRequestBuilder {
        return new ImageWithWidthWithHeightRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
