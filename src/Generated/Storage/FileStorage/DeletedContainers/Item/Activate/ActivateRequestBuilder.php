<?php

namespace Microsoft\Graph\Beta\Generated\Storage\FileStorage\DeletedContainers\Item\Activate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the activate method.
*/
class ActivateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ActivateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/deletedContainers/{fileStorageContainer%2Did}/activate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Activate a fileStorageContainer object. A fileStorageContainer object is created in an inactive state, as indicated by the status property. A container that isn't activated within 24 hours after creation is automatically deleted. Upon activation, the value of the status property changes from inactive to active. A file storage container can be activated by calling this API or any API that updates or modifies it or its content. For example, uploading a file to a file storage container activates it. It's also activated when you add permissions to it or update them, or create a custom property on it.
     * @param ActivateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainer-activate?view=graph-rest-beta Find more info here
    */
    public function post(?ActivateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Activate a fileStorageContainer object. A fileStorageContainer object is created in an inactive state, as indicated by the status property. A container that isn't activated within 24 hours after creation is automatically deleted. Upon activation, the value of the status property changes from inactive to active. A file storage container can be activated by calling this API or any API that updates or modifies it or its content. For example, uploading a file to a file storage container activates it. It's also activated when you add permissions to it or update them, or create a custom property on it.
     * @param ActivateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ActivateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ActivateRequestBuilder
    */
    public function withUrl(string $rawUrl): ActivateRequestBuilder {
        return new ActivateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
