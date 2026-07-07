<?php

namespace Microsoft\Graph\Beta\Generated\Directory\TenantGovernance\RelatedTenants\MicrosoftGraphTenantGovernanceServicesRefreshStatus;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TenantGovernanceServices\RelatedTenantsRefreshStatus;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the refreshStatus method. Original name: MicrosoftGraphTenantGovernanceServicesRefreshStatusRequestBuilder
*/
class MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_f386b52a extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_f386b52a and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/tenantGovernance/relatedTenants/microsoft.graph.tenantGovernanceServices.refreshStatus()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the status of the related tenants refresh action.
     * @param MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_4ae237a6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RelatedTenantsRefreshStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantgovernanceservices-relatedtenant-refreshstatus?view=graph-rest-beta Find more info here
    */
    public function get(?MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_4ae237a6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RelatedTenantsRefreshStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the status of the related tenants refresh action.
     * @param MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_4ae237a6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_4ae237a6 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_f386b52a
    */
    public function withUrl(string $rawUrl): MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_f386b52a {
        return new MicrosoftGraphTenantGovernanceServicesRefreshStatusRequ_f386b52a($rawUrl, $this->requestAdapter);
    }

}
