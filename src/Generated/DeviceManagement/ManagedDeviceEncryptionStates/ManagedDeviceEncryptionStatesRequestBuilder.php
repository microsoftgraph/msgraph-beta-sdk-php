<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceEncryptionStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceEncryptionStates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceEncryptionStates\Item\ManagedDeviceEncryptionStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceEncryptionState;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceEncryptionStateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedDeviceEncryptionStates property of the microsoft.graph.deviceManagement entity.
*/
class ManagedDeviceEncryptionStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceEncryptionStates property of the microsoft.graph.deviceManagement entity.
     * @param string $managedDeviceEncryptionStateId The unique identifier of managedDeviceEncryptionState
     * @return ManagedDeviceEncryptionStateItemRequestBuilder
    */
    public function byManagedDeviceEncryptionStateId(string $managedDeviceEncryptionStateId): ManagedDeviceEncryptionStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceEncryptionState%2Did'] = $managedDeviceEncryptionStateId;
        return new ManagedDeviceEncryptionStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDeviceEncryptionStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDeviceEncryptionStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Encryption report for devices in this account
     * @param ManagedDeviceEncryptionStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceEncryptionStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagedDeviceEncryptionStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceEncryptionStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managedDeviceEncryptionStates for deviceManagement
     * @param ManagedDeviceEncryptionState $body The request body
     * @param ManagedDeviceEncryptionStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceEncryptionState|null>
     * @throws Exception
    */
    public function post(ManagedDeviceEncryptionState $body, ?ManagedDeviceEncryptionStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceEncryptionState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Encryption report for devices in this account
     * @param ManagedDeviceEncryptionStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceEncryptionStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to managedDeviceEncryptionStates for deviceManagement
     * @param ManagedDeviceEncryptionState $body The request body
     * @param ManagedDeviceEncryptionStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedDeviceEncryptionState $body, ?ManagedDeviceEncryptionStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/managedDeviceEncryptionStates';
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
     * @return ManagedDeviceEncryptionStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDeviceEncryptionStatesRequestBuilder {
        return new ManagedDeviceEncryptionStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
