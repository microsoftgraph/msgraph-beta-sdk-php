<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\Assignments\Item\EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\DeviceStates\DeviceStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\DeviceStates\Item\EmbeddedSIMDeviceStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\MicrosoftGraphAssign\MicrosoftGraphAssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EmbeddedSIMActivationCodePool;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the embeddedSIMActivationCodePools property of the microsoft.graph.deviceManagement entity.
*/
class EmbeddedSIMActivationCodePoolItemRequestBuilder 
{
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.embeddedSIMActivationCodePool entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStates property of the microsoft.graph.embeddedSIMActivationCodePool entity.
    */
    public function deviceStates(): DeviceStatesRequestBuilder {
        return new DeviceStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assign method.
    */
    public function microsoftGraphAssign(): MicrosoftGraphAssignRequestBuilder {
        return new MicrosoftGraphAssignRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the assignments property of the microsoft.graph.embeddedSIMActivationCodePool entity.
     * @param string $id Unique identifier of the item
     * @return EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['embeddedSIMActivationCodePoolAssignment%2Did'] = $id;
        return new EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/embeddedSIMActivationCodePools/{embeddedSIMActivationCodePool%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property embeddedSIMActivationCodePools for deviceManagement
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?EmbeddedSIMActivationCodePoolItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deviceStates property of the microsoft.graph.embeddedSIMActivationCodePool entity.
     * @param string $id Unique identifier of the item
     * @return EmbeddedSIMDeviceStateItemRequestBuilder
    */
    public function deviceStatesById(string $id): EmbeddedSIMDeviceStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['embeddedSIMDeviceState%2Did'] = $id;
        return new EmbeddedSIMDeviceStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The embedded SIM activation code pools created by this account.
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?EmbeddedSIMActivationCodePoolItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EmbeddedSIMActivationCodePool::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property embeddedSIMActivationCodePools in deviceManagement
     * @param EmbeddedSIMActivationCodePool $body The request body
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(EmbeddedSIMActivationCodePool $body, ?EmbeddedSIMActivationCodePoolItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EmbeddedSIMActivationCodePool::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property embeddedSIMActivationCodePools for deviceManagement
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EmbeddedSIMActivationCodePoolItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The embedded SIM activation code pools created by this account.
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EmbeddedSIMActivationCodePoolItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property embeddedSIMActivationCodePools in deviceManagement
     * @param EmbeddedSIMActivationCodePool $body The request body
     * @param EmbeddedSIMActivationCodePoolItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EmbeddedSIMActivationCodePool $body, ?EmbeddedSIMActivationCodePoolItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
