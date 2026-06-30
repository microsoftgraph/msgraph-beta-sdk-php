<?php

namespace Microsoft\Graph\Beta\Generated\Directory\TenantGovernance\Settings\MicrosoftGraphTenantGovernanceServicesEnableRelatedTenants;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the enableRelatedTenants method. Original name: MicrosoftGraphTenantGovernanceServicesEnableRelatedTenantsRequestBuilder
*/
class MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_9dd95bab extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_9dd95bab and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/tenantGovernance/settings/microsoft.graph.tenantGovernanceServices.enableRelatedTenants');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Enable the related tenants feature for tenant discovery. After calling this action, the isRelatedTenantsEnabled property of tenantGovernanceSetting is set to true, which allows the use of related tenant APIs.
     * @param MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_63bb4e2b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantgovernanceservices-tenantgovernancesetting-enablerelatedtenants?view=graph-rest-beta Find more info here
    */
    public function post(?MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_63bb4e2b $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Enable the related tenants feature for tenant discovery. After calling this action, the isRelatedTenantsEnabled property of tenantGovernanceSetting is set to true, which allows the use of related tenant APIs.
     * @param MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_63bb4e2b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_63bb4e2b $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_9dd95bab
    */
    public function withUrl(string $rawUrl): MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_9dd95bab {
        return new MicrosoftGraphTenantGovernanceServicesEnableRelatedTena_9dd95bab($rawUrl, $this->requestAdapter);
    }

}
