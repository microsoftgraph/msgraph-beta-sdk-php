<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyExactMatches\ClassifyExactMatchesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyFile\ClassifyFileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyFileJobs\ClassifyFileJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyTextJobs\ClassifyTextJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateDlpPoliciesJobs\EvaluateDlpPoliciesJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateLabelJobs\EvaluateLabelJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchDataStores\ExactMatchDataStoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchUploadAgents\ExactMatchUploadAgentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\Jobs\JobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\SensitiveTypes\SensitiveTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\SensitivityLabels\SensitivityLabelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DataClassificationService;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dataClassificationService singleton.
*/
class DataClassificationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the classifyExactMatches method.
    */
    public function classifyExactMatches(): ClassifyExactMatchesRequestBuilder {
        return new ClassifyExactMatchesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the classifyFile method.
    */
    public function classifyFile(): ClassifyFileRequestBuilder {
        return new ClassifyFileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the classifyFileJobs property of the microsoft.graph.dataClassificationService entity.
    */
    public function classifyFileJobs(): ClassifyFileJobsRequestBuilder {
        return new ClassifyFileJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the classifyTextJobs property of the microsoft.graph.dataClassificationService entity.
    */
    public function classifyTextJobs(): ClassifyTextJobsRequestBuilder {
        return new ClassifyTextJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the evaluateDlpPoliciesJobs property of the microsoft.graph.dataClassificationService entity.
    */
    public function evaluateDlpPoliciesJobs(): EvaluateDlpPoliciesJobsRequestBuilder {
        return new EvaluateDlpPoliciesJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the evaluateLabelJobs property of the microsoft.graph.dataClassificationService entity.
    */
    public function evaluateLabelJobs(): EvaluateLabelJobsRequestBuilder {
        return new EvaluateLabelJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exactMatchDataStores property of the microsoft.graph.dataClassificationService entity.
    */
    public function exactMatchDataStores(): ExactMatchDataStoresRequestBuilder {
        return new ExactMatchDataStoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exactMatchUploadAgents property of the microsoft.graph.dataClassificationService entity.
    */
    public function exactMatchUploadAgents(): ExactMatchUploadAgentsRequestBuilder {
        return new ExactMatchUploadAgentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the jobs property of the microsoft.graph.dataClassificationService entity.
    */
    public function jobs(): JobsRequestBuilder {
        return new JobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensitiveTypes property of the microsoft.graph.dataClassificationService entity.
    */
    public function sensitiveTypes(): SensitiveTypesRequestBuilder {
        return new SensitiveTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensitivityLabels property of the microsoft.graph.dataClassificationService entity.
    */
    public function sensitivityLabels(): SensitivityLabelsRequestBuilder {
        return new SensitivityLabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DataClassificationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dataClassification{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get dataClassification
     * @param DataClassificationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DataClassificationService|null>
     * @throws Exception
    */
    public function get(?DataClassificationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DataClassificationService::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update dataClassification
     * @param DataClassificationService $body The request body
     * @param DataClassificationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DataClassificationService|null>
     * @throws Exception
    */
    public function patch(DataClassificationService $body, ?DataClassificationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DataClassificationService::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get dataClassification
     * @param DataClassificationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DataClassificationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update dataClassification
     * @param DataClassificationService $body The request body
     * @param DataClassificationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DataClassificationService $body, ?DataClassificationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return DataClassificationRequestBuilder
    */
    public function withUrl(string $rawUrl): DataClassificationRequestBuilder {
        return new DataClassificationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
