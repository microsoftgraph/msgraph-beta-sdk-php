<?php

namespace Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement\CaseTypeConfiguration;
use Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\CustomFields\CustomFieldsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\Statuses\StatusesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the caseTypeConfigurations property of the microsoft.graph.security.caseManagementRoot entity.
*/
class CaseTypeConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the customFields property of the microsoft.graph.security.caseManagement.caseTypeConfiguration entity.
    */
    public function customFields(): CustomFieldsRequestBuilder {
        return new CustomFieldsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the statuses property of the microsoft.graph.security.caseManagement.caseTypeConfiguration entity.
    */
    public function statuses(): StatusesRequestBuilder {
        return new StatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CaseTypeConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/caseManagement/caseTypeConfigurations/{caseTypeConfiguration%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of case type configurations that define the statuses and custom fields available for each case type. Read-only. Supports $select, $count, and $expand of the statuses and customFields relationships.
     * @param CaseTypeConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CaseTypeConfiguration|null>
     * @throws Exception
    */
    public function get(?CaseTypeConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CaseTypeConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of case type configurations that define the statuses and custom fields available for each case type. Read-only. Supports $select, $count, and $expand of the statuses and customFields relationships.
     * @param CaseTypeConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CaseTypeConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CaseTypeConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CaseTypeConfigurationItemRequestBuilder {
        return new CaseTypeConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
