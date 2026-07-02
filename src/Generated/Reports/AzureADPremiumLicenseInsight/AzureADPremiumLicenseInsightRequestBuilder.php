<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AzureADPremiumLicenseInsight;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\AzureADPremiumLicenseInsight;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the azureADPremiumLicenseInsight property of the microsoft.graph.reportRoot entity.
*/
class AzureADPremiumLicenseInsightRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AzureADPremiumLicenseInsightRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/azureADPremiumLicenseInsight{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property azureADPremiumLicenseInsight for reports
     * @param AzureADPremiumLicenseInsightRequestBuilderDeleteRequest_98ff6b6d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AzureADPremiumLicenseInsightRequestBuilderDeleteRequest_98ff6b6d $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the premium license utilization insight for the tenant. This API returns data about how many premium licenses are entitled and how the associated P1 and P2 features are being used. The calling tenant must have at least one Microsoft Entra ID P1 or P2 license. Tenants without a premium license receive a 403 Forbidden response with the missingLicense error code.
     * @param AzureADPremiumLicenseInsightRequestBuilderGetRequestCon_6d6544bb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AzureADPremiumLicenseInsight|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/azureadpremiumlicenseinsight-get?view=graph-rest-beta Find more info here
    */
    public function get(?AzureADPremiumLicenseInsightRequestBuilderGetRequestCon_6d6544bb $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AzureADPremiumLicenseInsight::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property azureADPremiumLicenseInsight in reports
     * @param AzureADPremiumLicenseInsight $body The request body
     * @param AzureADPremiumLicenseInsightRequestBuilderPatchRequestC_5ac36ce2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AzureADPremiumLicenseInsight|null>
     * @throws Exception
    */
    public function patch(AzureADPremiumLicenseInsight $body, ?AzureADPremiumLicenseInsightRequestBuilderPatchRequestC_5ac36ce2 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AzureADPremiumLicenseInsight::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property azureADPremiumLicenseInsight for reports
     * @param AzureADPremiumLicenseInsightRequestBuilderDeleteRequest_98ff6b6d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AzureADPremiumLicenseInsightRequestBuilderDeleteRequest_98ff6b6d $requestConfiguration = null): RequestInformation {
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
     * Get the premium license utilization insight for the tenant. This API returns data about how many premium licenses are entitled and how the associated P1 and P2 features are being used. The calling tenant must have at least one Microsoft Entra ID P1 or P2 license. Tenants without a premium license receive a 403 Forbidden response with the missingLicense error code.
     * @param AzureADPremiumLicenseInsightRequestBuilderGetRequestCon_6d6544bb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AzureADPremiumLicenseInsightRequestBuilderGetRequestCon_6d6544bb $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property azureADPremiumLicenseInsight in reports
     * @param AzureADPremiumLicenseInsight $body The request body
     * @param AzureADPremiumLicenseInsightRequestBuilderPatchRequestC_5ac36ce2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AzureADPremiumLicenseInsight $body, ?AzureADPremiumLicenseInsightRequestBuilderPatchRequestC_5ac36ce2 $requestConfiguration = null): RequestInformation {
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
     * @return AzureADPremiumLicenseInsightRequestBuilder
    */
    public function withUrl(string $rawUrl): AzureADPremiumLicenseInsightRequestBuilder {
        return new AzureADPremiumLicenseInsightRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
