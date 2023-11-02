<?php

namespace Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\EmailThreatSubmissionPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\EmailThreatSubmissionPolicy;
use Microsoft\Graph\Beta\Generated\Models\Security\EmailThreatSubmissionPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\EmailThreatSubmissionPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\EmailThreatSubmissionPolicies\Item\EmailThreatSubmissionPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the emailThreatSubmissionPolicies property of the microsoft.graph.security.threatSubmissionRoot entity.
*/
class EmailThreatSubmissionPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the emailThreatSubmissionPolicies property of the microsoft.graph.security.threatSubmissionRoot entity.
     * @param string $emailThreatSubmissionPolicyId The unique identifier of emailThreatSubmissionPolicy
     * @return EmailThreatSubmissionPolicyItemRequestBuilder
    */
    public function byEmailThreatSubmissionPolicyId(string $emailThreatSubmissionPolicyId): EmailThreatSubmissionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['emailThreatSubmissionPolicy%2Did'] = $emailThreatSubmissionPolicyId;
        return new EmailThreatSubmissionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EmailThreatSubmissionPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatSubmission/emailThreatSubmissionPolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the emailThreatSubmissionPolicy objects and their properties. This API is available in the following national cloud deployments.
     * @param EmailThreatSubmissionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmailThreatSubmissionPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-emailthreatsubmissionpolicy-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?EmailThreatSubmissionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmailThreatSubmissionPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to emailThreatSubmissionPolicies for security
     * @param EmailThreatSubmissionPolicy $body The request body
     * @param EmailThreatSubmissionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmailThreatSubmissionPolicy|null>
     * @throws Exception
    */
    public function post(EmailThreatSubmissionPolicy $body, ?EmailThreatSubmissionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmailThreatSubmissionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the emailThreatSubmissionPolicy objects and their properties. This API is available in the following national cloud deployments.
     * @param EmailThreatSubmissionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EmailThreatSubmissionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to emailThreatSubmissionPolicies for security
     * @param EmailThreatSubmissionPolicy $body The request body
     * @param EmailThreatSubmissionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EmailThreatSubmissionPolicy $body, ?EmailThreatSubmissionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EmailThreatSubmissionPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): EmailThreatSubmissionPoliciesRequestBuilder {
        return new EmailThreatSubmissionPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
