<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\Enable\EnableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\GetPlatformSupportedPropertiesWithPlatform\GetPlatformSupportedPropertiesWithPlatformRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\GetState\GetStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\ValidateFilter\ValidateFilterRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceAndAppManagementAssignmentFilter;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceAndAppManagementAssignmentFilterCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AssignmentFiltersRequestBuilder 
{
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function enable(): EnableRequestBuilder {
        return new EnableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function validateFilter(): ValidateFilterRequestBuilder {
        return new ValidateFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AssignmentFiltersRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/assignmentFilters{?top,skip,search,filter,count,orderby,select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * The list of assignment filters
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
     * Create new navigation property to assignmentFilters for deviceManagement
     * @param DeviceAndAppManagementAssignmentFilter $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPostRequestInformation(DeviceAndAppManagementAssignmentFilter $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * The list of assignment filters
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DeviceAndAppManagementAssignmentFilterCollectionResponse::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getPlatformSupportedProperties method.
     * @param string $platform Usage: platform='{platform}'
     * @return GetPlatformSupportedPropertiesWithPlatformRequestBuilder
    */
    public function getPlatformSupportedPropertiesWithPlatform(string $platform): GetPlatformSupportedPropertiesWithPlatformRequestBuilder {
        return new GetPlatformSupportedPropertiesWithPlatformRequestBuilder($this->pathParameters, $this->requestAdapter, $platform);
    }

    /**
     * Provides operations to call the getState method.
     * @return GetStateRequestBuilder
    */
    public function getState(): GetStateRequestBuilder {
        return new GetStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Create new navigation property to assignmentFilters for deviceManagement
     * @param DeviceAndAppManagementAssignmentFilter $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(DeviceAndAppManagementAssignmentFilter $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPostRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DeviceAndAppManagementAssignmentFilter::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
