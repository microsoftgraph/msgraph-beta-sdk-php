<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\DefinitionValues\DefinitionValuesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\UpdateDefinitionValues\UpdateDefinitionValuesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyConfiguration;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupPolicyConfigurations property of the microsoft.graph.deviceManagement entity.
*/
class GroupPolicyConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.groupPolicyConfiguration entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the definitionValues property of the microsoft.graph.groupPolicyConfiguration entity.
    */
    public function definitionValues(): DefinitionValuesRequestBuilder {
        return new DefinitionValuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateDefinitionValues method.
    */
    public function updateDefinitionValues(): UpdateDefinitionValuesRequestBuilder {
        return new UpdateDefinitionValuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GroupPolicyConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/groupPolicyConfigurations/{groupPolicyConfiguration%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property groupPolicyConfigurations for deviceManagement
     * @param GroupPolicyConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?GroupPolicyConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The group policy configurations created by this account.
     * @param GroupPolicyConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyConfiguration|null>
     * @throws Exception
    */
    public function get(?GroupPolicyConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property groupPolicyConfigurations in deviceManagement
     * @param GroupPolicyConfiguration $body The request body
     * @param GroupPolicyConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyConfiguration|null>
     * @throws Exception
    */
    public function patch(GroupPolicyConfiguration $body, ?GroupPolicyConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property groupPolicyConfigurations for deviceManagement
     * @param GroupPolicyConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GroupPolicyConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The group policy configurations created by this account.
     * @param GroupPolicyConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicyConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property groupPolicyConfigurations in deviceManagement
     * @param GroupPolicyConfiguration $body The request body
     * @param GroupPolicyConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(GroupPolicyConfiguration $body, ?GroupPolicyConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupPolicyConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupPolicyConfigurationItemRequestBuilder {
        return new GroupPolicyConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
