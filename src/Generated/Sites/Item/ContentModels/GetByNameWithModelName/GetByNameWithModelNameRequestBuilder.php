<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\ContentModels\GetByNameWithModelName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ContentModel;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Sites\Item\ContentModels\GetByNameWithModelName\AddToDrive\AddToDriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\ContentModels\GetByNameWithModelName\GetAppliedDrives\GetAppliedDrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\ContentModels\GetByNameWithModelName\RemoveFromDrive\RemoveFromDriveRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getByName method.
*/
class GetByNameWithModelNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the addToDrive method.
    */
    public function addToDrive(): AddToDriveRequestBuilder {
        return new AddToDriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAppliedDrives method.
    */
    public function getAppliedDrives(): GetAppliedDrivesRequestBuilder {
        return new GetAppliedDrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeFromDrive method.
    */
    public function removeFromDrive(): RemoveFromDriveRequestBuilder {
        return new RemoveFromDriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GetByNameWithModelNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $modelName Usage: modelName='{modelName}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $modelName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/contentModels/getByName(modelName=\'{modelName}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['modelName'] = $modelName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties and relationships of a contentModel object by its model name. The name should be the full model filename, including the file extension; for example, exampleModel.classifier.
     * @param GetByNameWithModelNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentModel|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/contentmodel-getbyname?view=graph-rest-beta Find more info here
    */
    public function get(?GetByNameWithModelNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentModel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read the properties and relationships of a contentModel object by its model name. The name should be the full model filename, including the file extension; for example, exampleModel.classifier.
     * @param GetByNameWithModelNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetByNameWithModelNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetByNameWithModelNameRequestBuilder
    */
    public function withUrl(string $rawUrl): GetByNameWithModelNameRequestBuilder {
        return new GetByNameWithModelNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
