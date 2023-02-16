<?php

namespace Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphChangeUserAccountType\MicrosoftGraphChangeUserAccountTypeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphEndGracePeriod\MicrosoftGraphEndGracePeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphGetCloudPcConnectivityHistory\MicrosoftGraphGetCloudPcConnectivityHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphGetCloudPcLaunchInfo\MicrosoftGraphGetCloudPcLaunchInfoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphGetShiftWorkCloudPcAccessState\MicrosoftGraphGetShiftWorkCloudPcAccessStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphGetSupportedCloudPcRemoteActions\MicrosoftGraphGetSupportedCloudPcRemoteActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphReboot\MicrosoftGraphRebootRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphRename\MicrosoftGraphRenameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphReprovision\MicrosoftGraphReprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphRestore\MicrosoftGraphRestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphRetryPartnerAgentInstallation\MicrosoftGraphRetryPartnerAgentInstallationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\MicrosoftGraphTroubleshoot\MicrosoftGraphTroubleshootRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPC;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the cloudPCs property of the microsoft.graph.user entity.
*/
class CloudPCItemRequestBuilder 
{
    /**
     * Provides operations to call the changeUserAccountType method.
    */
    public function microsoftGraphChangeUserAccountType(): MicrosoftGraphChangeUserAccountTypeRequestBuilder {
        return new MicrosoftGraphChangeUserAccountTypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the endGracePeriod method.
    */
    public function microsoftGraphEndGracePeriod(): MicrosoftGraphEndGracePeriodRequestBuilder {
        return new MicrosoftGraphEndGracePeriodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcConnectivityHistory method.
    */
    public function microsoftGraphGetCloudPcConnectivityHistory(): MicrosoftGraphGetCloudPcConnectivityHistoryRequestBuilder {
        return new MicrosoftGraphGetCloudPcConnectivityHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcLaunchInfo method.
    */
    public function microsoftGraphGetCloudPcLaunchInfo(): MicrosoftGraphGetCloudPcLaunchInfoRequestBuilder {
        return new MicrosoftGraphGetCloudPcLaunchInfoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getShiftWorkCloudPcAccessState method.
    */
    public function microsoftGraphGetShiftWorkCloudPcAccessState(): MicrosoftGraphGetShiftWorkCloudPcAccessStateRequestBuilder {
        return new MicrosoftGraphGetShiftWorkCloudPcAccessStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSupportedCloudPcRemoteActions method.
    */
    public function microsoftGraphGetSupportedCloudPcRemoteActions(): MicrosoftGraphGetSupportedCloudPcRemoteActionsRequestBuilder {
        return new MicrosoftGraphGetSupportedCloudPcRemoteActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reboot method.
    */
    public function microsoftGraphReboot(): MicrosoftGraphRebootRequestBuilder {
        return new MicrosoftGraphRebootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rename method.
    */
    public function microsoftGraphRename(): MicrosoftGraphRenameRequestBuilder {
        return new MicrosoftGraphRenameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprovision method.
    */
    public function microsoftGraphReprovision(): MicrosoftGraphReprovisionRequestBuilder {
        return new MicrosoftGraphReprovisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function microsoftGraphRestore(): MicrosoftGraphRestoreRequestBuilder {
        return new MicrosoftGraphRestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retryPartnerAgentInstallation method.
    */
    public function microsoftGraphRetryPartnerAgentInstallation(): MicrosoftGraphRetryPartnerAgentInstallationRequestBuilder {
        return new MicrosoftGraphRetryPartnerAgentInstallationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the troubleshoot method.
    */
    public function microsoftGraphTroubleshoot(): MicrosoftGraphTroubleshootRequestBuilder {
        return new MicrosoftGraphTroubleshootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new CloudPCItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/cloudPCs/{cloudPC%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property cloudPCs for me
     * @param CloudPCItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?CloudPCItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get cloudPCs from me
     * @param CloudPCItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?CloudPCItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property cloudPCs in me
     * @param CloudPC $body The request body
     * @param CloudPCItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(CloudPC $body, ?CloudPCItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property cloudPCs for me
     * @param CloudPCItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudPCItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get cloudPCs from me
     * @param CloudPCItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPCItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property cloudPCs in me
     * @param CloudPC $body The request body
     * @param CloudPCItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPC $body, ?CloudPCItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
