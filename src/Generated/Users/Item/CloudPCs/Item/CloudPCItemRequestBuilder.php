<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPC;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\ChangeUserAccountType\ChangeUserAccountTypeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\CreateSnapshot\CreateSnapshotRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\EndGracePeriod\EndGracePeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\GetCloudPcConnectivityHistory\GetCloudPcConnectivityHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\GetCloudPcLaunchInfo\GetCloudPcLaunchInfoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\GetFrontlineCloudPcAccessState\GetFrontlineCloudPcAccessStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\GetSupportedCloudPcRemoteActions\GetSupportedCloudPcRemoteActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\PowerOff\PowerOffRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\PowerOn\PowerOnRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Reboot\RebootRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Rename\RenameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Reprovision\ReprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Resize\ResizeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\RetrieveCloudPCRemoteActionResults\RetrieveCloudPCRemoteActionResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\RetrieveReviewStatus\RetrieveReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\RetrieveSnapshots\RetrieveSnapshotsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\RetryPartnerAgentInstallation\RetryPartnerAgentInstallationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\SetReviewStatus\SetReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Start\StartRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Stop\StopRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\Item\Troubleshoot\TroubleshootRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudPCs property of the microsoft.graph.user entity.
*/
class CloudPCItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the changeUserAccountType method.
    */
    public function changeUserAccountType(): ChangeUserAccountTypeRequestBuilder {
        return new ChangeUserAccountTypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createSnapshot method.
    */
    public function createSnapshot(): CreateSnapshotRequestBuilder {
        return new CreateSnapshotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the endGracePeriod method.
    */
    public function endGracePeriod(): EndGracePeriodRequestBuilder {
        return new EndGracePeriodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcConnectivityHistory method.
    */
    public function getCloudPcConnectivityHistory(): GetCloudPcConnectivityHistoryRequestBuilder {
        return new GetCloudPcConnectivityHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcLaunchInfo method.
    */
    public function getCloudPcLaunchInfo(): GetCloudPcLaunchInfoRequestBuilder {
        return new GetCloudPcLaunchInfoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFrontlineCloudPcAccessState method.
    */
    public function getFrontlineCloudPcAccessState(): GetFrontlineCloudPcAccessStateRequestBuilder {
        return new GetFrontlineCloudPcAccessStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSupportedCloudPcRemoteActions method.
    */
    public function getSupportedCloudPcRemoteActions(): GetSupportedCloudPcRemoteActionsRequestBuilder {
        return new GetSupportedCloudPcRemoteActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the powerOff method.
    */
    public function powerOff(): PowerOffRequestBuilder {
        return new PowerOffRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the powerOn method.
    */
    public function powerOn(): PowerOnRequestBuilder {
        return new PowerOnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reboot method.
    */
    public function reboot(): RebootRequestBuilder {
        return new RebootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rename method.
    */
    public function rename(): RenameRequestBuilder {
        return new RenameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprovision method.
    */
    public function reprovision(): ReprovisionRequestBuilder {
        return new ReprovisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resize method.
    */
    public function resize(): ResizeRequestBuilder {
        return new ResizeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveCloudPCRemoteActionResults method.
    */
    public function retrieveCloudPCRemoteActionResults(): RetrieveCloudPCRemoteActionResultsRequestBuilder {
        return new RetrieveCloudPCRemoteActionResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveReviewStatus method.
    */
    public function retrieveReviewStatus(): RetrieveReviewStatusRequestBuilder {
        return new RetrieveReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveSnapshots method.
    */
    public function retrieveSnapshots(): RetrieveSnapshotsRequestBuilder {
        return new RetrieveSnapshotsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retryPartnerAgentInstallation method.
    */
    public function retryPartnerAgentInstallation(): RetryPartnerAgentInstallationRequestBuilder {
        return new RetryPartnerAgentInstallationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setReviewStatus method.
    */
    public function setReviewStatus(): SetReviewStatusRequestBuilder {
        return new SetReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the start method.
    */
    public function start(): StartRequestBuilder {
        return new StartRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stop method.
    */
    public function stop(): StopRequestBuilder {
        return new StopRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the troubleshoot method.
    */
    public function troubleshoot(): TroubleshootRequestBuilder {
        return new TroubleshootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CloudPCItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/cloudPCs/{cloudPC%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property cloudPCs for users
     * @param CloudPCItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudPCItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get cloudPCs from users
     * @param CloudPCItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPC|null>
     * @throws Exception
    */
    public function get(?CloudPCItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property cloudPCs in users
     * @param CloudPC $body The request body
     * @param CloudPCItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPC|null>
     * @throws Exception
    */
    public function patch(CloudPC $body, ?CloudPCItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property cloudPCs for users
     * @param CloudPCItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudPCItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get cloudPCs from users
     * @param CloudPCItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPCItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property cloudPCs in users
     * @param CloudPC $body The request body
     * @param CloudPCItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPC $body, ?CloudPCItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudPCItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPCItemRequestBuilder {
        return new CloudPCItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
