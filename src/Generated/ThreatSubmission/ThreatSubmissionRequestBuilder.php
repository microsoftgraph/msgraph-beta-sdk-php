<?php

namespace Microsoft\Graph\Beta\Generated\ThreatSubmission;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\ThreatSubmissionRoot;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreats\EmailThreatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreats\Item\EmailThreatSubmissionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreatSubmissionPolicies\EmailThreatSubmissionPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\EmailThreatSubmissionPolicies\Item\EmailThreatSubmissionPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\FileThreats\FileThreatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\FileThreats\Item\FileThreatSubmissionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\UrlThreats\Item\UrlThreatSubmissionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ThreatSubmission\UrlThreats\UrlThreatsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ThreatSubmissionRequestBuilder 
{
    /**
     * The emailThreats property
    */
    public function emailThreats(): EmailThreatsRequestBuilder {
        return new EmailThreatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The emailThreatSubmissionPolicies property
    */
    public function emailThreatSubmissionPolicies(): EmailThreatSubmissionPoliciesRequestBuilder {
        return new EmailThreatSubmissionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fileThreats property
    */
    public function fileThreats(): FileThreatsRequestBuilder {
        return new FileThreatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The urlThreats property
    */
    public function urlThreats(): UrlThreatsRequestBuilder {
        return new UrlThreatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ThreatSubmissionRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/threatSubmission{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get threatSubmission
     * @param ThreatSubmissionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ThreatSubmissionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update threatSubmission
     * @param ThreatSubmissionRoot $body 
     * @param ThreatSubmissionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ThreatSubmissionRoot $body, ?ThreatSubmissionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.threatSubmission.emailThreats.item collection
     * @param string $id Unique identifier of the item
     * @return EmailThreatSubmissionItemRequestBuilder
    */
    public function emailThreatsById(string $id): EmailThreatSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['emailThreatSubmission%2Did'] = $id;
        return new EmailThreatSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.threatSubmission.emailThreatSubmissionPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return EmailThreatSubmissionPolicyItemRequestBuilder
    */
    public function emailThreatSubmissionPoliciesById(string $id): EmailThreatSubmissionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['emailThreatSubmissionPolicy%2Did'] = $id;
        return new EmailThreatSubmissionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.threatSubmission.fileThreats.item collection
     * @param string $id Unique identifier of the item
     * @return FileThreatSubmissionItemRequestBuilder
    */
    public function fileThreatsById(string $id): FileThreatSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileThreatSubmission%2Did'] = $id;
        return new FileThreatSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get threatSubmission
     * @param ThreatSubmissionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ThreatSubmissionRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ThreatSubmissionRoot::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update threatSubmission
     * @param ThreatSubmissionRoot $body 
     * @param ThreatSubmissionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ThreatSubmissionRoot $body, ?ThreatSubmissionRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.threatSubmission.urlThreats.item collection
     * @param string $id Unique identifier of the item
     * @return UrlThreatSubmissionItemRequestBuilder
    */
    public function urlThreatsById(string $id): UrlThreatSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['urlThreatSubmission%2Did'] = $id;
        return new UrlThreatSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
