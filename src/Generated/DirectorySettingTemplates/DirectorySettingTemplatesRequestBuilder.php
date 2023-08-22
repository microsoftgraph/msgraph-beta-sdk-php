<?php

namespace Microsoft\Graph\Beta\Generated\DirectorySettingTemplates;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\GetByIds\GetByIdsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\GetUserOwnedObjects\GetUserOwnedObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\DirectorySettingTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DirectorySettingTemplate;
use Microsoft\Graph\Beta\Generated\Models\DirectorySettingTemplateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of directorySettingTemplate entities.
*/
class DirectorySettingTemplatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getByIds method.
    */
    public function getByIds(): GetByIdsRequestBuilder {
        return new GetByIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUserOwnedObjects method.
    */
    public function getUserOwnedObjects(): GetUserOwnedObjectsRequestBuilder {
        return new GetUserOwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateProperties method.
    */
    public function validateProperties(): ValidatePropertiesRequestBuilder {
        return new ValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directorySettingTemplate entities.
     * @param string $directorySettingTemplateId The unique identifier of directorySettingTemplate
     * @return DirectorySettingTemplateItemRequestBuilder
    */
    public function byDirectorySettingTemplateId(string $directorySettingTemplateId): DirectorySettingTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directorySettingTemplate%2Did'] = $directorySettingTemplateId;
        return new DirectorySettingTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DirectorySettingTemplatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directorySettingTemplates{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Directory setting templates represents a set of templates of directory settings, from which directory settings may be created and used within a tenant.  This operation retrieves the list of available directorySettingTemplates objects.
     * @param DirectorySettingTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/directorysettingtemplate-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?DirectorySettingTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DirectorySettingTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Add new entity to directorySettingTemplates
     * @param DirectorySettingTemplate $body The request body
     * @param DirectorySettingTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(DirectorySettingTemplate $body, ?DirectorySettingTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
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
     * Directory setting templates represents a set of templates of directory settings, from which directory settings may be created and used within a tenant.  This operation retrieves the list of available directorySettingTemplates objects.
     * @param DirectorySettingTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectorySettingTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Add new entity to directorySettingTemplates
     * @param DirectorySettingTemplate $body The request body
     * @param DirectorySettingTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DirectorySettingTemplate $body, ?DirectorySettingTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
