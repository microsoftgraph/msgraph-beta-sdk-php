<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyExactMatches\ClassifyExactMatchesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyFile\ClassifyFileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyFileJobs\ClassifyFileJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyFileJobs\Item\JobResponseBaseItemRequestBuilder as MicrosoftGraphBetaGeneratedDataClassificationClassifyFileJobsItemJobResponseBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyText\ClassifyTextRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyTextJobs\ClassifyTextJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ClassifyTextJobs\Item\JobResponseBaseItemRequestBuilder as MicrosoftGraphBetaGeneratedDataClassificationClassifyTextJobsItemJobResponseBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateDlpPoliciesJobs\EvaluateDlpPoliciesJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateDlpPoliciesJobs\Item\JobResponseBaseItemRequestBuilder as MicrosoftGraphBetaGeneratedDataClassificationEvaluateDlpPoliciesJobsItemJobResponseBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateLabelJobs\EvaluateLabelJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\EvaluateLabelJobs\Item\JobResponseBaseItemRequestBuilder as MicrosoftGraphBetaGeneratedDataClassificationEvaluateLabelJobsItemJobResponseBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchDataStores\ExactMatchDataStoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchDataStores\Item\ExactMatchDataStoreItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchUploadAgents\ExactMatchUploadAgentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchUploadAgents\Item\ExactMatchUploadAgentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\Jobs\Item\JobResponseBaseItemRequestBuilder as MicrosoftGraphBetaGeneratedDataClassificationJobsItemJobResponseBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\Jobs\JobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\SensitiveTypes\Item\SensitiveTypeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\SensitiveTypes\SensitiveTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\SensitivityLabels\Item\SensitivityLabelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\SensitivityLabels\SensitivityLabelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DataClassificationService;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DataClassificationRequestBuilder 
{
    /**
     * The classifyExactMatches property
    */
    public function classifyExactMatches(): ClassifyExactMatchesRequestBuilder {
        return new ClassifyExactMatchesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The classifyFile property
    */
    public function classifyFile(): ClassifyFileRequestBuilder {
        return new ClassifyFileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The classifyFileJobs property
    */
    public function classifyFileJobs(): ClassifyFileJobsRequestBuilder {
        return new ClassifyFileJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The classifyText property
    */
    public function classifyText(): ClassifyTextRequestBuilder {
        return new ClassifyTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The classifyTextJobs property
    */
    public function classifyTextJobs(): ClassifyTextJobsRequestBuilder {
        return new ClassifyTextJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The evaluateDlpPoliciesJobs property
    */
    public function evaluateDlpPoliciesJobs(): EvaluateDlpPoliciesJobsRequestBuilder {
        return new EvaluateDlpPoliciesJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The evaluateLabelJobs property
    */
    public function evaluateLabelJobs(): EvaluateLabelJobsRequestBuilder {
        return new EvaluateLabelJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The exactMatchDataStores property
    */
    public function exactMatchDataStores(): ExactMatchDataStoresRequestBuilder {
        return new ExactMatchDataStoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The exactMatchUploadAgents property
    */
    public function exactMatchUploadAgents(): ExactMatchUploadAgentsRequestBuilder {
        return new ExactMatchUploadAgentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The jobs property
    */
    public function jobs(): JobsRequestBuilder {
        return new JobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The sensitiveTypes property
    */
    public function sensitiveTypes(): SensitiveTypesRequestBuilder {
        return new SensitiveTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sensitivityLabels property
    */
    public function sensitivityLabels(): SensitivityLabelsRequestBuilder {
        return new SensitivityLabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.classifyFileJobs.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDataClassificationClassifyFileJobsItemJobResponseBaseItemRequestBuilder
    */
    public function classifyFileJobsById(string $id): MicrosoftGraphBetaGeneratedDataClassificationClassifyFileJobsItemJobResponseBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['jobResponseBase_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDataClassificationClassifyFileJobsItemJobResponseBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.classifyTextJobs.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDataClassificationClassifyTextJobsItemJobResponseBaseItemRequestBuilder
    */
    public function classifyTextJobsById(string $id): MicrosoftGraphBetaGeneratedDataClassificationClassifyTextJobsItemJobResponseBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['jobResponseBase_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDataClassificationClassifyTextJobsItemJobResponseBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DataClassificationRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/dataClassification{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get dataClassification
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update dataClassification
     * @param DataClassificationService $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DataClassificationService $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.evaluateDlpPoliciesJobs.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDataClassificationEvaluateDlpPoliciesJobsItemJobResponseBaseItemRequestBuilder
    */
    public function evaluateDlpPoliciesJobsById(string $id): MicrosoftGraphBetaGeneratedDataClassificationEvaluateDlpPoliciesJobsItemJobResponseBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['jobResponseBase_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDataClassificationEvaluateDlpPoliciesJobsItemJobResponseBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.evaluateLabelJobs.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDataClassificationEvaluateLabelJobsItemJobResponseBaseItemRequestBuilder
    */
    public function evaluateLabelJobsById(string $id): MicrosoftGraphBetaGeneratedDataClassificationEvaluateLabelJobsItemJobResponseBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['jobResponseBase_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDataClassificationEvaluateLabelJobsItemJobResponseBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.exactMatchDataStores.item collection
     * @param string $id Unique identifier of the item
     * @return ExactMatchDataStoreItemRequestBuilder
    */
    public function exactMatchDataStoresById(string $id): ExactMatchDataStoreItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['exactMatchDataStore_id'] = $id;
        return new ExactMatchDataStoreItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.exactMatchUploadAgents.item collection
     * @param string $id Unique identifier of the item
     * @return ExactMatchUploadAgentItemRequestBuilder
    */
    public function exactMatchUploadAgentsById(string $id): ExactMatchUploadAgentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['exactMatchUploadAgent_id'] = $id;
        return new ExactMatchUploadAgentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get dataClassification
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DataClassificationService::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.jobs.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDataClassificationJobsItemJobResponseBaseItemRequestBuilder
    */
    public function jobsById(string $id): MicrosoftGraphBetaGeneratedDataClassificationJobsItemJobResponseBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['jobResponseBase_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDataClassificationJobsItemJobResponseBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update dataClassification
     * @param DataClassificationService $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DataClassificationService $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.sensitiveTypes.item collection
     * @param string $id Unique identifier of the item
     * @return SensitiveTypeItemRequestBuilder
    */
    public function sensitiveTypesById(string $id): SensitiveTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sensitiveType_id'] = $id;
        return new SensitiveTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataClassification.sensitivityLabels.item collection
     * @param string $id Unique identifier of the item
     * @return SensitivityLabelItemRequestBuilder
    */
    public function sensitivityLabelsById(string $id): SensitivityLabelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sensitivityLabel_id'] = $id;
        return new SensitivityLabelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
