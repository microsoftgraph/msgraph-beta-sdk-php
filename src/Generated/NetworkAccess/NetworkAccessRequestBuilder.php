<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\NetworkAccessRoot;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Alerts\AlertsRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Connectivity\ConnectivityRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\FilteringPolicies\FilteringPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\ForwardingPolicies\ForwardingPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\LogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\MicrosoftGraphNetworkaccessOnboard\MicrosoftGraphNetworkaccessOnboardRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\TenantStatus\TenantStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\ThreatIntelligencePolicies\ThreatIntelligencePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Tls\TlsRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\TlsInspectionPolicies\TlsInspectionPoliciesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the networkAccessRoot singleton.
*/
class NetworkAccessRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the alerts property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function alerts(): AlertsRequestBuilder {
        return new AlertsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the connectivity property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function connectivity(): ConnectivityRequestBuilder {
        return new ConnectivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the filteringPolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function filteringPolicies(): FilteringPoliciesRequestBuilder {
        return new FilteringPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the forwardingPolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function forwardingPolicies(): ForwardingPoliciesRequestBuilder {
        return new ForwardingPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the logs property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function logs(): LogsRequestBuilder {
        return new LogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the onboard method.
    */
    public function microsoftGraphNetworkaccessOnboard(): MicrosoftGraphNetworkaccessOnboardRequestBuilder {
        return new MicrosoftGraphNetworkaccessOnboardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reports property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantStatus property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function tenantStatus(): TenantStatusRequestBuilder {
        return new TenantStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threatIntelligencePolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function threatIntelligencePolicies(): ThreatIntelligencePoliciesRequestBuilder {
        return new ThreatIntelligencePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tls property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function tls(): TlsRequestBuilder {
        return new TlsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tlsInspectionPolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
    */
    public function tlsInspectionPolicies(): TlsInspectionPoliciesRequestBuilder {
        return new TlsInspectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new NetworkAccessRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get networkAccess
     * @param NetworkAccessRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NetworkAccessRoot|null>
     * @throws Exception
    */
    public function get(?NetworkAccessRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NetworkAccessRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update networkAccess
     * @param NetworkAccessRoot $body The request body
     * @param NetworkAccessRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NetworkAccessRoot|null>
     * @throws Exception
    */
    public function patch(NetworkAccessRoot $body, ?NetworkAccessRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NetworkAccessRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get networkAccess
     * @param NetworkAccessRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NetworkAccessRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update networkAccess
     * @param NetworkAccessRoot $body The request body
     * @param NetworkAccessRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(NetworkAccessRoot $body, ?NetworkAccessRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return NetworkAccessRequestBuilder
    */
    public function withUrl(string $rawUrl): NetworkAccessRequestBuilder {
        return new NetworkAccessRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
