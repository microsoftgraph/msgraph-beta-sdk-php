<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Errors\ErrorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Errors\Item\EducationSynchronizationErrorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Pause\PauseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\ProfileStatus\ProfileStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Reset\ResetRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Resume\ResumeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Start\StartRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\UploadUrl\UploadUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\EducationSynchronizationProfile;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class EducationSynchronizationProfileItemRequestBuilder 
{
    public function errors(): ErrorsRequestBuilder {
        return new ErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function pause(): PauseRequestBuilder {
        return new PauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function profileStatus(): ProfileStatusRequestBuilder {
        return new ProfileStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function reset(): ResetRequestBuilder {
        return new ResetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function resume(): ResumeRequestBuilder {
        return new ResumeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function start(): StartRequestBuilder {
        return new StartRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new EducationSynchronizationProfileItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education/synchronizationProfiles/{educationSynchronizationProfile_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property synchronizationProfiles for education
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Get synchronizationProfiles from education
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
     * Update the navigation property synchronizationProfiles in education
     * @param EducationSynchronizationProfile $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EducationSynchronizationProfile $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property synchronizationProfiles for education
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.education.synchronizationProfiles.item.errors.item collection
     * @param string $id Unique identifier of the item
     * @return EducationSynchronizationErrorItemRequestBuilder
    */
    public function errorsById(string $id): EducationSynchronizationErrorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSynchronizationError_id'] = $id;
        return new EducationSynchronizationErrorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get synchronizationProfiles from education
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, EducationSynchronizationProfile::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property synchronizationProfiles in education
     * @param EducationSynchronizationProfile $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationSynchronizationProfile $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the uploadUrl method.
     * @return UploadUrlRequestBuilder
    */
    public function uploadUrl(): UploadUrlRequestBuilder {
        return new UploadUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

}
