<?php

namespace Microsoft\Graph\Beta\Generated\Directory\TenantGovernance\RelatedTenants\MicrosoftGraphTenantGovernanceServicesRefresh;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the refresh method.
*/
class MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/tenantGovernance/relatedTenants/microsoft.graph.tenantGovernanceServices.refresh');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Manually refresh the list of related tenants. The list is also automatically refreshed daily.
     * @param MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantgovernanceservices-relatedtenant-refresh?view=graph-rest-beta Find more info here
    */
    public function post(?MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Manually refresh the list of related tenants. The list is also automatically refreshed daily.
     * @param MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilder {
        return new MicrosoftGraphTenantGovernanceServicesRefreshRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
