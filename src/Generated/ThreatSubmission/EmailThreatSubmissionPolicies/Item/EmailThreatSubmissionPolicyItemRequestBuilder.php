<?php

namespace Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreatSubmissionPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\EmailThreatSubmissionPolicy;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the emailThreatSubmissionPolicies property of the microsoft.graph.security.threatSubmissionRoot entity.
*/
class EmailThreatSubmissionPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EmailThreatSubmissionPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/threatSubmission/emailThreatSubmissionPolicies/{emailThreatSubmissionPolicy%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property emailThreatSubmissionPolicies for threatSubmission
     * @param EmailThreatSubmissionPolicyItemRequestBuilderDeleteRequ_0fe3b343|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EmailThreatSubmissionPolicyItemRequestBuilderDeleteRequ_0fe3b343 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get emailThreatSubmissionPolicies from threatSubmission
     * @param EmailThreatSubmissionPolicyItemRequestBuilderGetRequest_0328ccda|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmailThreatSubmissionPolicy|null>
     * @throws Exception
    */
    public function get(?EmailThreatSubmissionPolicyItemRequestBuilderGetRequest_0328ccda $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmailThreatSubmissionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property emailThreatSubmissionPolicies in threatSubmission
     * @param EmailThreatSubmissionPolicy $body The request body
     * @param EmailThreatSubmissionPolicyItemRequestBuilderPatchReque_e867e754|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmailThreatSubmissionPolicy|null>
     * @throws Exception
    */
    public function patch(EmailThreatSubmissionPolicy $body, ?EmailThreatSubmissionPolicyItemRequestBuilderPatchReque_e867e754 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmailThreatSubmissionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property emailThreatSubmissionPolicies for threatSubmission
     * @param EmailThreatSubmissionPolicyItemRequestBuilderDeleteRequ_0fe3b343|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EmailThreatSubmissionPolicyItemRequestBuilderDeleteRequ_0fe3b343 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get emailThreatSubmissionPolicies from threatSubmission
     * @param EmailThreatSubmissionPolicyItemRequestBuilderGetRequest_0328ccda|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EmailThreatSubmissionPolicyItemRequestBuilderGetRequest_0328ccda $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property emailThreatSubmissionPolicies in threatSubmission
     * @param EmailThreatSubmissionPolicy $body The request body
     * @param EmailThreatSubmissionPolicyItemRequestBuilderPatchReque_e867e754|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EmailThreatSubmissionPolicy $body, ?EmailThreatSubmissionPolicyItemRequestBuilderPatchReque_e867e754 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return EmailThreatSubmissionPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EmailThreatSubmissionPolicyItemRequestBuilder {
        return new EmailThreatSubmissionPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
