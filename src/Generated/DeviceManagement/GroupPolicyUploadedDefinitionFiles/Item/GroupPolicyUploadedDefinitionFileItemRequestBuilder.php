<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\AddLanguageFiles\AddLanguageFilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\Definitions\DefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\GroupPolicyOperations\GroupPolicyOperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\Remove\RemoveRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\RemoveLanguageFiles\RemoveLanguageFilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\UpdateLanguageFiles\UpdateLanguageFilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\UploadNewVersion\UploadNewVersionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedDefinitionFile;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupPolicyUploadedDefinitionFiles property of the microsoft.graph.deviceManagement entity.
*/
class GroupPolicyUploadedDefinitionFileItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the addLanguageFiles method.
    */
    public function addLanguageFiles(): AddLanguageFilesRequestBuilder {
        return new AddLanguageFilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the definitions property of the microsoft.graph.groupPolicyDefinitionFile entity.
    */
    public function definitions(): DefinitionsRequestBuilder {
        return new DefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyOperations property of the microsoft.graph.groupPolicyUploadedDefinitionFile entity.
    */
    public function groupPolicyOperations(): GroupPolicyOperationsRequestBuilder {
        return new GroupPolicyOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remove method.
    */
    public function remove(): RemoveRequestBuilder {
        return new RemoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeLanguageFiles method.
    */
    public function removeLanguageFiles(): RemoveLanguageFilesRequestBuilder {
        return new RemoveLanguageFilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateLanguageFiles method.
    */
    public function updateLanguageFiles(): UpdateLanguageFilesRequestBuilder {
        return new UpdateLanguageFilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the uploadNewVersion method.
    */
    public function uploadNewVersion(): UploadNewVersionRequestBuilder {
        return new UploadNewVersionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GroupPolicyUploadedDefinitionFileItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/groupPolicyUploadedDefinitionFiles/{groupPolicyUploadedDefinitionFile%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property groupPolicyUploadedDefinitionFiles for deviceManagement
     * @param GroupPolicyUploadedDefinitionFileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?GroupPolicyUploadedDefinitionFileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The available group policy uploaded definition files for this account.
     * @param GroupPolicyUploadedDefinitionFileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyUploadedDefinitionFile|null>
     * @throws Exception
    */
    public function get(?GroupPolicyUploadedDefinitionFileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyUploadedDefinitionFile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property groupPolicyUploadedDefinitionFiles in deviceManagement
     * @param GroupPolicyUploadedDefinitionFile $body The request body
     * @param GroupPolicyUploadedDefinitionFileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicyUploadedDefinitionFile|null>
     * @throws Exception
    */
    public function patch(GroupPolicyUploadedDefinitionFile $body, ?GroupPolicyUploadedDefinitionFileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicyUploadedDefinitionFile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property groupPolicyUploadedDefinitionFiles for deviceManagement
     * @param GroupPolicyUploadedDefinitionFileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GroupPolicyUploadedDefinitionFileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The available group policy uploaded definition files for this account.
     * @param GroupPolicyUploadedDefinitionFileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicyUploadedDefinitionFileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property groupPolicyUploadedDefinitionFiles in deviceManagement
     * @param GroupPolicyUploadedDefinitionFile $body The request body
     * @param GroupPolicyUploadedDefinitionFileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(GroupPolicyUploadedDefinitionFile $body, ?GroupPolicyUploadedDefinitionFileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupPolicyUploadedDefinitionFileItemRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupPolicyUploadedDefinitionFileItemRequestBuilder {
        return new GroupPolicyUploadedDefinitionFileItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
