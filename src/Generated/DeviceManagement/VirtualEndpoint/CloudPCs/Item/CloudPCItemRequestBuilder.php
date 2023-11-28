<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\ChangeUserAccountType\ChangeUserAccountTypeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\CreateSnapshot\CreateSnapshotRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\EndGracePeriod\EndGracePeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\GetCloudPcConnectivityHistory\GetCloudPcConnectivityHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\GetCloudPcLaunchInfo\GetCloudPcLaunchInfoRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\GetFrontlineCloudPcAccessState\GetFrontlineCloudPcAccessStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\GetShiftWorkCloudPcAccessState\GetShiftWorkCloudPcAccessStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\GetSupportedCloudPcRemoteActions\GetSupportedCloudPcRemoteActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\PowerOff\PowerOffRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\PowerOn\PowerOnRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Reboot\RebootRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Rename\RenameRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Reprovision\ReprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Resize\ResizeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\RetryPartnerAgentInstallation\RetryPartnerAgentInstallationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Start\StartRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Stop\StopRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Troubleshoot\TroubleshootRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPC;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudPCs property of the microsoft.graph.virtualEndpoint entity.
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
     * Provides operations to call the getShiftWorkCloudPcAccessState method.
    */
    public function getShiftWorkCloudPcAccessState(): GetShiftWorkCloudPcAccessStateRequestBuilder {
        return new GetShiftWorkCloudPcAccessStateRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the retryPartnerAgentInstallation method.
    */
    public function retryPartnerAgentInstallation(): RetryPartnerAgentInstallationRequestBuilder {
        return new RetryPartnerAgentInstallationRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudPCs/{cloudPC%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property cloudPCs for deviceManagement
     * @param CloudPCItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudPCItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a specific cloudPC object.
     * @param CloudPCItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPC|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CloudPCItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property cloudPCs in deviceManagement
     * @param CloudPC $body The request body
     * @param CloudPCItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPC|null>
     * @throws Exception
    */
    public function patch(CloudPC $body, ?CloudPCItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property cloudPCs for deviceManagement
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
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a specific cloudPC object.
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
     * Update the navigation property cloudPCs in deviceManagement
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
