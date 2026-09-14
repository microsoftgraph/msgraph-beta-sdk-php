<?php

namespace Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\CustomFields;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement\CustomFieldDefinitionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\CustomFields\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\CustomFields\Item\CustomFieldDefinitionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customFields property of the microsoft.graph.security.caseManagement.caseTypeConfiguration entity.
*/
class CustomFieldsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customFields property of the microsoft.graph.security.caseManagement.caseTypeConfiguration entity.
     * @param string $customFieldDefinitionId The unique identifier of customFieldDefinition
     * @return CustomFieldDefinitionItemRequestBuilder
    */
    public function byCustomFieldDefinitionId(string $customFieldDefinitionId): CustomFieldDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customFieldDefinition%2Did'] = $customFieldDefinitionId;
        return new CustomFieldDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomFieldsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/caseManagement/caseTypeConfigurations/{caseTypeConfiguration%2Did}/customFields{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The contained custom-field definitions that make up the blank-form schema for this case type. Read-only. Supports $count, $expand, $filter, $orderby, $select, $skip, and $top.
     * @param CustomFieldsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomFieldDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CustomFieldsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomFieldDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The contained custom-field definitions that make up the blank-form schema for this case type. Read-only. Supports $count, $expand, $filter, $orderby, $select, $skip, and $top.
     * @param CustomFieldsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomFieldsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CustomFieldsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomFieldsRequestBuilder {
        return new CustomFieldsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
