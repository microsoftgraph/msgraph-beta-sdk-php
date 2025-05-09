<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\VirtualEvents\Webinars\Item\Registrations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\VirtualEventRegistration;
use Microsoft\Graph\Beta\Generated\Solutions\VirtualEvents\Webinars\Item\Registrations\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\VirtualEvents\Webinars\Item\Registrations\Item\Sessions\SessionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\VirtualEvents\Webinars\Item\Registrations\Item\SessionsWithJoinWebUrl\SessionsWithJoinWebUrlRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the registrations property of the microsoft.graph.virtualEventWebinar entity.
*/
class VirtualEventRegistrationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the cancel method.
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sessions property of the microsoft.graph.virtualEventRegistration entity.
    */
    public function sessions(): SessionsRequestBuilder {
        return new SessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new VirtualEventRegistrationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/virtualEvents/webinars/{virtualEventWebinar%2Did}/registrations/{virtualEventRegistration%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property registrations for solutions
     * @param VirtualEventRegistrationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?VirtualEventRegistrationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties and relationships of a virtualEventRegistration object.
     * @param VirtualEventRegistrationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventRegistration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualeventregistration-get?view=graph-rest-beta Find more info here
    */
    public function get(?VirtualEventRegistrationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventRegistration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property registrations in solutions
     * @param VirtualEventRegistration $body The request body
     * @param VirtualEventRegistrationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventRegistration|null>
     * @throws Exception
    */
    public function patch(VirtualEventRegistration $body, ?VirtualEventRegistrationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventRegistration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to manage the sessions property of the microsoft.graph.virtualEventRegistration entity.
     * @param string $joinWebUrl Alternate key of virtualEventSession
     * @return SessionsWithJoinWebUrlRequestBuilder
    */
    public function sessionsWithJoinWebUrl(string $joinWebUrl): SessionsWithJoinWebUrlRequestBuilder {
        return new SessionsWithJoinWebUrlRequestBuilder($this->pathParameters, $this->requestAdapter, $joinWebUrl);
    }

    /**
     * Delete navigation property registrations for solutions
     * @param VirtualEventRegistrationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?VirtualEventRegistrationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get the properties and relationships of a virtualEventRegistration object.
     * @param VirtualEventRegistrationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VirtualEventRegistrationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property registrations in solutions
     * @param VirtualEventRegistration $body The request body
     * @param VirtualEventRegistrationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(VirtualEventRegistration $body, ?VirtualEventRegistrationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VirtualEventRegistrationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): VirtualEventRegistrationItemRequestBuilder {
        return new VirtualEventRegistrationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
