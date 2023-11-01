<?php

namespace Microsoft\Graph\Beta\Generated\Education\Users\Item\Assignments\Item\Resources\Item\DependentResources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Education\Users\Item\Assignments\Item\Resources\Item\DependentResources\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\Users\Item\Assignments\Item\Resources\Item\DependentResources\Item\EducationAssignmentResourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EducationAssignmentResource;
use Microsoft\Graph\Beta\Generated\Models\EducationAssignmentResourceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dependentResources property of the microsoft.graph.educationAssignmentResource entity.
*/
class DependentResourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dependentResources property of the microsoft.graph.educationAssignmentResource entity.
     * @param string $educationAssignmentResourceId1 The unique identifier of educationAssignmentResource
     * @return EducationAssignmentResourceItemRequestBuilder
    */
    public function byEducationAssignmentResourceId1(string $educationAssignmentResourceId1): EducationAssignmentResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationAssignmentResource%2Did1'] = $educationAssignmentResourceId1;
        return new EducationAssignmentResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DependentResourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/users/{educationUser%2Did}/assignments/{educationAssignment%2Did}/resources/{educationAssignmentResource%2Did}/dependentResources{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get dependentResources from education
     * @param DependentResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentResourceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DependentResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentResourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to dependentResources for education
     * @param EducationAssignmentResource $body The request body
     * @param DependentResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignmentResource|null>
     * @throws Exception
    */
    public function post(EducationAssignmentResource $body, ?DependentResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignmentResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get dependentResources from education
     * @param DependentResourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DependentResourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to dependentResources for education
     * @param EducationAssignmentResource $body The request body
     * @param DependentResourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EducationAssignmentResource $body, ?DependentResourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DependentResourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): DependentResourcesRequestBuilder {
        return new DependentResourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
