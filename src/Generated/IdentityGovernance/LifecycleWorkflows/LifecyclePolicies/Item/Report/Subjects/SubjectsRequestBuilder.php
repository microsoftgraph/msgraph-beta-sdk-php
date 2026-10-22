<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\LifecyclePolicies\Item\Report\Subjects;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\LifecyclePolicies\Item\Report\Subjects\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\LifecyclePolicies\Item\Report\Subjects\Item\LifecyclePolicySubjectReportItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IdentityGovernance\LifecyclePolicySubjectReportCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the subjects property of the microsoft.graph.identityGovernance.lifecyclePolicyReport entity.
*/
class SubjectsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the subjects property of the microsoft.graph.identityGovernance.lifecyclePolicyReport entity.
     * @param string $lifecyclePolicySubjectReportId The unique identifier of lifecyclePolicySubjectReport
     * @return LifecyclePolicySubjectReportItemRequestBuilder
    */
    public function byLifecyclePolicySubjectReportId(string $lifecyclePolicySubjectReportId): LifecyclePolicySubjectReportItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['lifecyclePolicySubjectReport%2Did'] = $lifecyclePolicySubjectReportId;
        return new LifecyclePolicySubjectReportItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SubjectsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/lifecyclePolicies/{lifecyclePolicy%2Did}/report/subjects{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The processing results for subjects included in the report.
     * @param SubjectsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LifecyclePolicySubjectReportCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SubjectsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LifecyclePolicySubjectReportCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The processing results for subjects included in the report.
     * @param SubjectsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubjectsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SubjectsRequestBuilder
    */
    public function withUrl(string $rawUrl): SubjectsRequestBuilder {
        return new SubjectsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
