<?php

namespace Microsoft\Graph\Beta\Generated\EmployeeExperience\Goals\ExportJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\EmployeeExperience\Goals\ExportJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\EmployeeExperience\Goals\ExportJobs\Item\GoalsExportJobItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GoalsExportJob;
use Microsoft\Graph\Beta\Generated\Models\GoalsExportJobCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exportJobs property of the microsoft.graph.goals entity.
*/
class ExportJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exportJobs property of the microsoft.graph.goals entity.
     * @param string $goalsExportJobId The unique identifier of goalsExportJob
     * @return GoalsExportJobItemRequestBuilder
    */
    public function byGoalsExportJobId(string $goalsExportJobId): GoalsExportJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['goalsExportJob%2Did'] = $goalsExportJobId;
        return new GoalsExportJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExportJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/employeeExperience/goals/exportJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Represents a collection of goals export jobs for Viva Goals.
     * @param ExportJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GoalsExportJobCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ExportJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GoalsExportJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to exportJobs for employeeExperience
     * @param GoalsExportJob $body The request body
     * @param ExportJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GoalsExportJob|null>
     * @throws Exception
    */
    public function post(GoalsExportJob $body, ?ExportJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GoalsExportJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents a collection of goals export jobs for Viva Goals.
     * @param ExportJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExportJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to exportJobs for employeeExperience
     * @param GoalsExportJob $body The request body
     * @param ExportJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GoalsExportJob $body, ?ExportJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExportJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): ExportJobsRequestBuilder {
        return new ExportJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
