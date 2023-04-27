<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\Runs;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\Runs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\Runs\IdentityGovernanceSummaryWithStartDateTimeWithEndDateTime\IdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\Runs\Item\RunItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IdentityGovernance\RunCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the runs property of the microsoft.graph.identityGovernance.workflow entity.
*/
class RunsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the runs property of the microsoft.graph.identityGovernance.workflow entity.
     * @param string $runId Unique identifier of the item
     * @return RunItemRequestBuilder
    */
    public function byRunId(string $runId): RunItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['run%2Did'] = $runId;
        return new RunItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RunsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow%2Did}/runs{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Workflow runs.
     * @param RunsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?RunsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [RunCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the summary method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return IdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function identityGovernanceSummaryWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): IdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new IdentityGovernanceSummaryWithStartDateTimeWithEndDateTimeRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Workflow runs.
     * @param RunsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RunsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

}
