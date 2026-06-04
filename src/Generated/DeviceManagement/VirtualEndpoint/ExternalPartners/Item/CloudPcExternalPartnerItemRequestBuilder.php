<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\ConfigureAgent\ConfigureAgentRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\DeployAgent\DeployAgentRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\RetrieveActionReports\RetrieveActionReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\RetrieveDeployAgentActionResultsactivityIdActivityIdClo_c6f461a2\RetrieveDeployAgentActionResultsactivityIdActivityIdClo_aaebe13d;
use Microsoft\Graph\Beta\Generated\Models\CloudPcExternalPartner;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalPartners property of the microsoft.graph.virtualEndpoint entity.
*/
class CloudPcExternalPartnerItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the configureAgent method.
    */
    public function configureAgent(): ConfigureAgentRequestBuilder {
        return new ConfigureAgentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deployAgent method.
    */
    public function deployAgent(): DeployAgentRequestBuilder {
        return new DeployAgentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveActionReports method.
    */
    public function retrieveActionReports(): RetrieveActionReportsRequestBuilder {
        return new RetrieveActionReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveDeployAgentActionResults method.
    */
    public function retrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcId(): RetrieveDeployAgentActionResultsactivityIdActivityIdClo_aaebe13d {
        return new RetrieveDeployAgentActionResultsactivityIdActivityIdClo_aaebe13d($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CloudPcExternalPartnerItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/externalPartners/{cloudPcExternalPartner%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property externalPartners for deviceManagement
     * @param CloudPcExternalPartnerItemRequestBuilderDeleteRequestCo_e9da8429|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudPcExternalPartnerItemRequestBuilderDeleteRequestCo_e9da8429 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a cloudPcExternalPartner object.
     * @param CloudPcExternalPartnerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcExternalPartner|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcexternalpartner-get?view=graph-rest-beta Find more info here
    */
    public function get(?CloudPcExternalPartnerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcExternalPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a cloudPcExternalPartner object.
     * @param CloudPcExternalPartner $body The request body
     * @param CloudPcExternalPartnerItemRequestBuilderPatchRequestCon_3f89e905|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcExternalPartner|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcexternalpartner-update?view=graph-rest-beta Find more info here
    */
    public function patch(CloudPcExternalPartner $body, ?CloudPcExternalPartnerItemRequestBuilderPatchRequestCon_3f89e905 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcExternalPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property externalPartners for deviceManagement
     * @param CloudPcExternalPartnerItemRequestBuilderDeleteRequestCo_e9da8429|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudPcExternalPartnerItemRequestBuilderDeleteRequestCo_e9da8429 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a cloudPcExternalPartner object.
     * @param CloudPcExternalPartnerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPcExternalPartnerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/virtualEndpoint/externalPartners/{cloudPcExternalPartner%2Did}{?%24expand,%24select}';
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
     * Update the properties of a cloudPcExternalPartner object.
     * @param CloudPcExternalPartner $body The request body
     * @param CloudPcExternalPartnerItemRequestBuilderPatchRequestCon_3f89e905|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPcExternalPartner $body, ?CloudPcExternalPartnerItemRequestBuilderPatchRequestCon_3f89e905 $requestConfiguration = null): RequestInformation {
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
     * @return CloudPcExternalPartnerItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPcExternalPartnerItemRequestBuilder {
        return new CloudPcExternalPartnerItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
