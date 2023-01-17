<?php

namespace Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\ChangeUserAccountType\ChangeUserAccountTypeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\EndGracePeriod\EndGracePeriodRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\GetCloudPcConnectivityHistory\GetCloudPcConnectivityHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\GetCloudPcLaunchInfo\GetCloudPcLaunchInfoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\GetShiftWorkCloudPcAccessState\GetShiftWorkCloudPcAccessStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\GetSupportedCloudPcRemoteActions\GetSupportedCloudPcRemoteActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\Reboot\RebootRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\Rename\RenameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\Reprovision\ReprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\RetryPartnerAgentInstallation\RetryPartnerAgentInstallationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\CloudPCs\Item\Troubleshoot\TroubleshootRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPC;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class CloudPCItemRequestBuilder 
{
    /**
     * Provides operations to call the changeUserAccountType method.
    */
    public function changeUserAccountType(): ChangeUserAccountTypeRequestBuilder {
        return new ChangeUserAccountTypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the endGracePeriod method.
    */
    public function endGracePeriod(): EndGracePeriodRequestBuilder {
        return new EndGracePeriodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
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
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
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
     * Provides operations to call the troubleshoot method.
    */
    public function troubleshoot(): TroubleshootRequestBuilder {
        return new TroubleshootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new CloudPCItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/cloudPCs/{cloudPC%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property cloudPCs for me
     * @param CloudPCItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?CloudPCItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get cloudPCs from me
     * @param CloudPCItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?CloudPCItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getCloudPcConnectivityHistory method.
     * @return GetCloudPcConnectivityHistoryRequestBuilder
    */
    public function getCloudPcConnectivityHistory(): GetCloudPcConnectivityHistoryRequestBuilder {
        return new GetCloudPcConnectivityHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getCloudPcLaunchInfo method.
     * @return GetCloudPcLaunchInfoRequestBuilder
    */
    public function getCloudPcLaunchInfo(): GetCloudPcLaunchInfoRequestBuilder {
        return new GetCloudPcLaunchInfoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getShiftWorkCloudPcAccessState method.
     * @return GetShiftWorkCloudPcAccessStateRequestBuilder
    */
    public function getShiftWorkCloudPcAccessState(): GetShiftWorkCloudPcAccessStateRequestBuilder {
        return new GetShiftWorkCloudPcAccessStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getSupportedCloudPcRemoteActions method.
     * @return GetSupportedCloudPcRemoteActionsRequestBuilder
    */
    public function getSupportedCloudPcRemoteActions(): GetSupportedCloudPcRemoteActionsRequestBuilder {
        return new GetSupportedCloudPcRemoteActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Update the navigation property cloudPCs in me
     * @param CloudPC $body The request body
     * @param CloudPCItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(CloudPC $body, ?CloudPCItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
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
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
