<?php

namespace Microsoft\Graph\Beta\Generated\Education\Classes\Item\AssignmentSettings\GradingSchemes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Education\Classes\Item\AssignmentSettings\GradingSchemes\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\Classes\Item\AssignmentSettings\GradingSchemes\Item\EducationGradingSchemeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EducationGradingScheme;
use Microsoft\Graph\Beta\Generated\Models\EducationGradingSchemeCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the gradingSchemes property of the microsoft.graph.educationAssignmentSettings entity.
*/
class GradingSchemesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the gradingSchemes property of the microsoft.graph.educationAssignmentSettings entity.
     * @param string $educationGradingSchemeId The unique identifier of educationGradingScheme
     * @return EducationGradingSchemeItemRequestBuilder
    */
    public function byEducationGradingSchemeId(string $educationGradingSchemeId): EducationGradingSchemeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationGradingScheme%2Did'] = $educationGradingSchemeId;
        return new EducationGradingSchemeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GradingSchemesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignmentSettings/gradingSchemes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties and relationships of an educationGradingScheme object.
     * @param GradingSchemesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationGradingSchemeCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GradingSchemesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationGradingSchemeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new educationGradingScheme object.
     * @param EducationGradingScheme $body The request body
     * @param GradingSchemesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationGradingScheme|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationgradingscheme-post?view=graph-rest-1.0 Find more info here
    */
    public function post(EducationGradingScheme $body, ?GradingSchemesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationGradingScheme::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read the properties and relationships of an educationGradingScheme object.
     * @param GradingSchemesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GradingSchemesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new educationGradingScheme object.
     * @param EducationGradingScheme $body The request body
     * @param GradingSchemesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EducationGradingScheme $body, ?GradingSchemesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/education/classes/{educationClass%2Did}/assignmentSettings/gradingSchemes';
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
     * @return GradingSchemesRequestBuilder
    */
    public function withUrl(string $rawUrl): GradingSchemesRequestBuilder {
        return new GradingSchemesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
