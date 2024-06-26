<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\Assignments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\Assignments\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\Assignments\Item\EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EmbeddedSIMActivationCodePoolAssignment;
use Microsoft\Graph\Beta\Generated\Models\EmbeddedSIMActivationCodePoolAssignmentCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.embeddedSIMActivationCodePool entity.
*/
class AssignmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.embeddedSIMActivationCodePool entity.
     * @param string $embeddedSIMActivationCodePoolAssignmentId The unique identifier of embeddedSIMActivationCodePoolAssignment
     * @return EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder
    */
    public function byEmbeddedSIMActivationCodePoolAssignmentId(string $embeddedSIMActivationCodePoolAssignmentId): EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['embeddedSIMActivationCodePoolAssignment%2Did'] = $embeddedSIMActivationCodePoolAssignmentId;
        return new EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AssignmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/embeddedSIMActivationCodePools/{embeddedSIMActivationCodePool%2Did}/assignments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Navigational property to a list of targets to which this pool is assigned.
     * @param AssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmbeddedSIMActivationCodePoolAssignmentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmbeddedSIMActivationCodePoolAssignmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to assignments for deviceManagement
     * @param EmbeddedSIMActivationCodePoolAssignment $body The request body
     * @param AssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmbeddedSIMActivationCodePoolAssignment|null>
     * @throws Exception
    */
    public function post(EmbeddedSIMActivationCodePoolAssignment $body, ?AssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmbeddedSIMActivationCodePoolAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Navigational property to a list of targets to which this pool is assigned.
     * @param AssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to assignments for deviceManagement
     * @param EmbeddedSIMActivationCodePoolAssignment $body The request body
     * @param AssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EmbeddedSIMActivationCodePoolAssignment $body, ?AssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AssignmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
