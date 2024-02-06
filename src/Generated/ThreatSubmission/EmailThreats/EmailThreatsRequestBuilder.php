<?php

namespace Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreats;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\EmailThreatSubmission;
use Microsoft\Graph\Beta\Generated\Models\Security\EmailThreatSubmissionCollectionResponse;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreats\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreats\Item\EmailThreatSubmissionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the emailThreats property of the microsoft.graph.security.threatSubmissionRoot entity.
*/
class EmailThreatsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the emailThreats property of the microsoft.graph.security.threatSubmissionRoot entity.
     * @param string $emailThreatSubmissionId The unique identifier of emailThreatSubmission
     * @return EmailThreatSubmissionItemRequestBuilder
    */
    public function byEmailThreatSubmissionId(string $emailThreatSubmissionId): EmailThreatSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['emailThreatSubmission%2Did'] = $emailThreatSubmissionId;
        return new EmailThreatSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EmailThreatsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/threatSubmission/emailThreats{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the emailThreatSubmission objects and their properties.
     * @param EmailThreatsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmailThreatSubmissionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-emailthreatsubmission-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?EmailThreatsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmailThreatSubmissionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new emailThreatSubmission object.
     * @param EmailThreatSubmission $body The request body
     * @param EmailThreatsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmailThreatSubmission|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-emailthreatsubmission-post-emailthreats?view=graph-rest-1.0 Find more info here
    */
    public function post(EmailThreatSubmission $body, ?EmailThreatsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmailThreatSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the emailThreatSubmission objects and their properties.
     * @param EmailThreatsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EmailThreatsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new emailThreatSubmission object.
     * @param EmailThreatSubmission $body The request body
     * @param EmailThreatsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EmailThreatSubmission $body, ?EmailThreatsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EmailThreatsRequestBuilder
    */
    public function withUrl(string $rawUrl): EmailThreatsRequestBuilder {
        return new EmailThreatsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
