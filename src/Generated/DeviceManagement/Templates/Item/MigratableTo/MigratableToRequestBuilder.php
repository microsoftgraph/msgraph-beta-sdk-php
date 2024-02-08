<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\MigratableTo;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\MigratableTo\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\MigratableTo\ImportOffice365DeviceConfigurationPolicies\ImportOffice365DeviceConfigurationPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\MigratableTo\Item\DeviceManagementTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementTemplate;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementTemplateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the migratableTo property of the microsoft.graph.deviceManagementTemplate entity.
*/
class MigratableToRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the importOffice365DeviceConfigurationPolicies method.
    */
    public function importOffice365DeviceConfigurationPolicies(): ImportOffice365DeviceConfigurationPoliciesRequestBuilder {
        return new ImportOffice365DeviceConfigurationPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the migratableTo property of the microsoft.graph.deviceManagementTemplate entity.
     * @param string $deviceManagementTemplateId1 The unique identifier of deviceManagementTemplate
     * @return DeviceManagementTemplateItemRequestBuilder
    */
    public function byDeviceManagementTemplateId1(string $deviceManagementTemplateId1): DeviceManagementTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementTemplate%2Did1'] = $deviceManagementTemplateId1;
        return new DeviceManagementTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MigratableToRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/templates/{deviceManagementTemplate%2Did}/migratableTo{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of templates this template can migrate to
     * @param MigratableToRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementTemplateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MigratableToRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to migratableTo for deviceManagement
     * @param DeviceManagementTemplate $body The request body
     * @param MigratableToRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementTemplate|null>
     * @throws Exception
    */
    public function post(DeviceManagementTemplate $body, ?MigratableToRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of templates this template can migrate to
     * @param MigratableToRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MigratableToRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to migratableTo for deviceManagement
     * @param DeviceManagementTemplate $body The request body
     * @param MigratableToRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementTemplate $body, ?MigratableToRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MigratableToRequestBuilder
    */
    public function withUrl(string $rawUrl): MigratableToRequestBuilder {
        return new MigratableToRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
