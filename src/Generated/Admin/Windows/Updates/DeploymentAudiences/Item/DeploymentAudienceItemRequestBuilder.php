<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\ApplicableContent\ApplicableContentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\Exclusions\ExclusionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\MicrosoftGraphWindowsUpdatesUpdateAudience\MicrosoftGraphWindowsUpdatesUpdateAudienceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item\MicrosoftGraphWindowsUpdatesUpdateAudienceById\MicrosoftGraphWindowsUpdatesUpdateAudienceByIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\DeploymentAudience;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deploymentAudiences property of the microsoft.graph.adminWindowsUpdates entity.
*/
class DeploymentAudienceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the applicableContent property of the microsoft.graph.windowsUpdates.deploymentAudience entity.
    */
    public function applicableContent(): ApplicableContentRequestBuilder {
        return new ApplicableContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exclusions property of the microsoft.graph.windowsUpdates.deploymentAudience entity.
    */
    public function exclusions(): ExclusionsRequestBuilder {
        return new ExclusionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.windowsUpdates.deploymentAudience entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateAudience method.
    */
    public function microsoftGraphWindowsUpdatesUpdateAudience(): MicrosoftGraphWindowsUpdatesUpdateAudienceRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesUpdateAudienceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateAudienceById method.
    */
    public function microsoftGraphWindowsUpdatesUpdateAudienceById(): MicrosoftGraphWindowsUpdatesUpdateAudienceByIdRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesUpdateAudienceByIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeploymentAudienceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/deploymentAudiences/{deploymentAudience%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deploymentAudiences for admin
     * @param DeploymentAudienceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeploymentAudienceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The set of updatableAsset resources to which a deployment can apply.
     * @param DeploymentAudienceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeploymentAudience|null>
     * @throws Exception
    */
    public function get(?DeploymentAudienceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeploymentAudience::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deploymentAudiences in admin
     * @param DeploymentAudience $body The request body
     * @param DeploymentAudienceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeploymentAudience|null>
     * @throws Exception
    */
    public function patch(DeploymentAudience $body, ?DeploymentAudienceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeploymentAudience::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deploymentAudiences for admin
     * @param DeploymentAudienceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeploymentAudienceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The set of updatableAsset resources to which a deployment can apply.
     * @param DeploymentAudienceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeploymentAudienceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deploymentAudiences in admin
     * @param DeploymentAudience $body The request body
     * @param DeploymentAudienceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeploymentAudience $body, ?DeploymentAudienceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeploymentAudienceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeploymentAudienceItemRequestBuilder {
        return new DeploymentAudienceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
