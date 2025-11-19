<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuditLogs;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\AuditActivityTypes\AuditActivityTypesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\CustomSecurityAttributeAudits\CustomSecurityAttributeAuditsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\DirectoryAudits\DirectoryAuditsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\DirectoryProvisioning\DirectoryProvisioningRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\GetSummarizedMSISignInsWithAggregationWindow\GetSummarizedMSISignInsWithAggregationWindowRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\GetSummarizedNonInteractiveSignInsWithAggregationWindow\GetSummarizedNonInteractiveSignInsWithAggregationWindowRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\GetSummarizedServicePrincipalSignInsWithAggregationWindow\GetSummarizedServicePrincipalSignInsWithAggregationWindowRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\Provisioning\ProvisioningRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsAppSummary\SignInEventsAppSummaryRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsSummary\SignInEventsSummaryRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignIns\SignInsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignUps\SignUpsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\AuditLogRoot;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the auditLogRoot singleton.
*/
class AuditLogsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the auditActivityTypes property of the microsoft.graph.auditLogRoot entity.
    */
    public function auditActivityTypes(): AuditActivityTypesRequestBuilder {
        return new AuditActivityTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customSecurityAttributeAudits property of the microsoft.graph.auditLogRoot entity.
    */
    public function customSecurityAttributeAudits(): CustomSecurityAttributeAuditsRequestBuilder {
        return new CustomSecurityAttributeAuditsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directoryAudits property of the microsoft.graph.auditLogRoot entity.
    */
    public function directoryAudits(): DirectoryAuditsRequestBuilder {
        return new DirectoryAuditsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directoryProvisioning property of the microsoft.graph.auditLogRoot entity.
    */
    public function directoryProvisioning(): DirectoryProvisioningRequestBuilder {
        return new DirectoryProvisioningRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the provisioning property of the microsoft.graph.auditLogRoot entity.
    */
    public function provisioning(): ProvisioningRequestBuilder {
        return new ProvisioningRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signInEventsAppSummary property of the microsoft.graph.auditLogRoot entity.
    */
    public function signInEventsAppSummary(): SignInEventsAppSummaryRequestBuilder {
        return new SignInEventsAppSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signInEventsSummary property of the microsoft.graph.auditLogRoot entity.
    */
    public function signInEventsSummary(): SignInEventsSummaryRequestBuilder {
        return new SignInEventsSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signIns property of the microsoft.graph.auditLogRoot entity.
    */
    public function signIns(): SignInsRequestBuilder {
        return new SignInsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signUps property of the microsoft.graph.auditLogRoot entity.
    */
    public function signUps(): SignUpsRequestBuilder {
        return new SignUpsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuditLogsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get auditLogs
     * @param AuditLogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuditLogRoot|null>
     * @throws Exception
    */
    public function get(?AuditLogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuditLogRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getSummarizedMSISignIns method.
     * @param string $aggregationWindow Usage: aggregationWindow='{aggregationWindow}'
     * @return GetSummarizedMSISignInsWithAggregationWindowRequestBuilder
    */
    public function getSummarizedMSISignInsWithAggregationWindow(string $aggregationWindow): GetSummarizedMSISignInsWithAggregationWindowRequestBuilder {
        return new GetSummarizedMSISignInsWithAggregationWindowRequestBuilder($this->pathParameters, $this->requestAdapter, $aggregationWindow);
    }

    /**
     * Provides operations to call the getSummarizedNonInteractiveSignIns method.
     * @param string $aggregationWindow Usage: aggregationWindow='{aggregationWindow}'
     * @return GetSummarizedNonInteractiveSignInsWithAggregationWindowRequestBuilder
    */
    public function getSummarizedNonInteractiveSignInsWithAggregationWindow(string $aggregationWindow): GetSummarizedNonInteractiveSignInsWithAggregationWindowRequestBuilder {
        return new GetSummarizedNonInteractiveSignInsWithAggregationWindowRequestBuilder($this->pathParameters, $this->requestAdapter, $aggregationWindow);
    }

    /**
     * Provides operations to call the getSummarizedServicePrincipalSignIns method.
     * @param string $aggregationWindow Usage: aggregationWindow='{aggregationWindow}'
     * @return GetSummarizedServicePrincipalSignInsWithAggregationWindowRequestBuilder
    */
    public function getSummarizedServicePrincipalSignInsWithAggregationWindow(string $aggregationWindow): GetSummarizedServicePrincipalSignInsWithAggregationWindowRequestBuilder {
        return new GetSummarizedServicePrincipalSignInsWithAggregationWindowRequestBuilder($this->pathParameters, $this->requestAdapter, $aggregationWindow);
    }

    /**
     * Update auditLogs
     * @param AuditLogRoot $body The request body
     * @param AuditLogsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuditLogRoot|null>
     * @throws Exception
    */
    public function patch(AuditLogRoot $body, ?AuditLogsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuditLogRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get auditLogs
     * @param AuditLogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuditLogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update auditLogs
     * @param AuditLogRoot $body The request body
     * @param AuditLogsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuditLogRoot $body, ?AuditLogsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuditLogsRequestBuilder
    */
    public function withUrl(string $rawUrl): AuditLogsRequestBuilder {
        return new AuditLogsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
