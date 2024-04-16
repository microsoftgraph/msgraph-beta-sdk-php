<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\EvaluateDlpPoliciesJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateDlpPoliciesJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateDlpPoliciesJobs\Item\JobResponseBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\JobResponseBase;
use Microsoft\Graph\Beta\Generated\Models\JobResponseBaseCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the evaluateDlpPoliciesJobs property of the microsoft.graph.dataClassificationService entity.
*/
class EvaluateDlpPoliciesJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the evaluateDlpPoliciesJobs property of the microsoft.graph.dataClassificationService entity.
     * @param string $jobResponseBaseId The unique identifier of jobResponseBase
     * @return JobResponseBaseItemRequestBuilder
    */
    public function byJobResponseBaseId(string $jobResponseBaseId): JobResponseBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['jobResponseBase%2Did'] = $jobResponseBaseId;
        return new JobResponseBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EvaluateDlpPoliciesJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dataClassification/evaluateDlpPoliciesJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get evaluateDlpPoliciesJobs from dataClassification
     * @param EvaluateDlpPoliciesJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<JobResponseBaseCollectionResponse|null>
     * @throws Exception
    */
    public function get(?EvaluateDlpPoliciesJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [JobResponseBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to evaluateDlpPoliciesJobs for dataClassification
     * @param JobResponseBase $body The request body
     * @param EvaluateDlpPoliciesJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<JobResponseBase|null>
     * @throws Exception
    */
    public function post(JobResponseBase $body, ?EvaluateDlpPoliciesJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [JobResponseBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get evaluateDlpPoliciesJobs from dataClassification
     * @param EvaluateDlpPoliciesJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EvaluateDlpPoliciesJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to evaluateDlpPoliciesJobs for dataClassification
     * @param JobResponseBase $body The request body
     * @param EvaluateDlpPoliciesJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(JobResponseBase $body, ?EvaluateDlpPoliciesJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EvaluateDlpPoliciesJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): EvaluateDlpPoliciesJobsRequestBuilder {
        return new EvaluateDlpPoliciesJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
