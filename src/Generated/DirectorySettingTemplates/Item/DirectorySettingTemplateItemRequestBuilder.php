<?php

namespace Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\MicrosoftGraphCheckMemberGroups\MicrosoftGraphCheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\MicrosoftGraphCheckMemberObjects\MicrosoftGraphCheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\MicrosoftGraphGetMemberGroups\MicrosoftGraphGetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\MicrosoftGraphGetMemberObjects\MicrosoftGraphGetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\MicrosoftGraphRestore\MicrosoftGraphRestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DirectorySettingTemplate;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of directorySettingTemplate entities.
*/
class DirectorySettingTemplateItemRequestBuilder 
{
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function microsoftGraphCheckMemberGroups(): MicrosoftGraphCheckMemberGroupsRequestBuilder {
        return new MicrosoftGraphCheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function microsoftGraphCheckMemberObjects(): MicrosoftGraphCheckMemberObjectsRequestBuilder {
        return new MicrosoftGraphCheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function microsoftGraphGetMemberGroups(): MicrosoftGraphGetMemberGroupsRequestBuilder {
        return new MicrosoftGraphGetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function microsoftGraphGetMemberObjects(): MicrosoftGraphGetMemberObjectsRequestBuilder {
        return new MicrosoftGraphGetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function microsoftGraphRestore(): MicrosoftGraphRestoreRequestBuilder {
        return new MicrosoftGraphRestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new DirectorySettingTemplateItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/directorySettingTemplates/{directorySettingTemplate%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete entity from directorySettingTemplates
     * @param DirectorySettingTemplateItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?DirectorySettingTemplateItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * A directory setting template represents a template of settings from which settings may be created within a tenant. This operation allows retrieval of the properties of the **directorySettingTemplate** object, including the available settings and their defaults.
     * @param DirectorySettingTemplateItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/directorysettingtemplate-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DirectorySettingTemplateItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DirectorySettingTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update entity in directorySettingTemplates
     * @param DirectorySettingTemplate $body The request body
     * @param DirectorySettingTemplateItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(DirectorySettingTemplate $body, ?DirectorySettingTemplateItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DirectorySettingTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete entity from directorySettingTemplates
     * @param DirectorySettingTemplateItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DirectorySettingTemplateItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * A directory setting template represents a template of settings from which settings may be created within a tenant. This operation allows retrieval of the properties of the **directorySettingTemplate** object, including the available settings and their defaults.
     * @param DirectorySettingTemplateItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectorySettingTemplateItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in directorySettingTemplates
     * @param DirectorySettingTemplate $body The request body
     * @param DirectorySettingTemplateItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DirectorySettingTemplate $body, ?DirectorySettingTemplateItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
