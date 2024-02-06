<?php

namespace Microsoft\Graph\Beta\Generated\Education\Classes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Education\Classes\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\Classes\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\Classes\Item\EducationClassItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EducationClass;
use Microsoft\Graph\Beta\Generated\Models\EducationClassCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the classes property of the microsoft.graph.educationRoot entity.
*/
class ClassesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the classes property of the microsoft.graph.educationRoot entity.
     * @param string $educationClassId The unique identifier of educationClass
     * @return EducationClassItemRequestBuilder
    */
    public function byEducationClassId(string $educationClassId): EducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass%2Did'] = $educationClassId;
        return new EducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ClassesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of all class objects. 
     * @param ClassesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationClassCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationroot-list-classes?view=graph-rest-1.0 Find more info here
    */
    public function get(?ClassesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationClassCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new class. This will also create a universal group. When you use this API to create a class, it will add special properties to the group, which willadd features such as assignments and special handling within Microsoft Teams when teams are created using the group. Please note that this API only creates the universal group and does not create a team. Microsoft Teams provides a user interface for teachers to create teams for their own classes using the groups created by this API.
     * @param EducationClass $body The request body
     * @param ClassesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationClass|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationroot-post-classes?view=graph-rest-1.0 Find more info here
    */
    public function post(EducationClass $body, ?ClassesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationClass::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of all class objects. 
     * @param ClassesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ClassesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new class. This will also create a universal group. When you use this API to create a class, it will add special properties to the group, which willadd features such as assignments and special handling within Microsoft Teams when teams are created using the group. Please note that this API only creates the universal group and does not create a team. Microsoft Teams provides a user interface for teachers to create teams for their own classes using the groups created by this API.
     * @param EducationClass $body The request body
     * @param ClassesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EducationClass $body, ?ClassesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ClassesRequestBuilder
    */
    public function withUrl(string $rawUrl): ClassesRequestBuilder {
        return new ClassesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
