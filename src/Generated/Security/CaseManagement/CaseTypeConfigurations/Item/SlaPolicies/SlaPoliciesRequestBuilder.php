<?php

namespace Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\SlaPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement\SlaPolicyDefinition;
use Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement\SlaPolicyDefinitionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\SlaPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\CaseManagement\CaseTypeConfigurations\Item\SlaPolicies\Item\SlaPolicyDefinitionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the slaPolicies property of the microsoft.graph.security.caseManagement.caseTypeConfiguration entity.
*/
class SlaPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the slaPolicies property of the microsoft.graph.security.caseManagement.caseTypeConfiguration entity.
     * @param string $slaPolicyDefinitionId The unique identifier of slaPolicyDefinition
     * @return SlaPolicyDefinitionItemRequestBuilder
    */
    public function bySlaPolicyDefinitionId(string $slaPolicyDefinitionId): SlaPolicyDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['slaPolicyDefinition%2Did'] = $slaPolicyDefinitionId;
        return new SlaPolicyDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SlaPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/caseManagement/caseTypeConfigurations/{caseTypeConfiguration%2Did}/slaPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The contained SLA policy definitions configured for this case type. Supports $filter and $orderby on createdBy, createdDateTime, description, displayName, id, isActive, lastModifiedBy, and lastModifiedDateTime on the collection endpoint. For information about supported query parameters, see List slaPolicies. Also supports $count, $select, and $top on the collection endpoint. Supports $expand=slaPolicies when getting a case type configuration.
     * @param SlaPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SlaPolicyDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SlaPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SlaPolicyDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to slaPolicies for security
     * @param SlaPolicyDefinition $body The request body
     * @param SlaPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SlaPolicyDefinition|null>
     * @throws Exception
    */
    public function post(SlaPolicyDefinition $body, ?SlaPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SlaPolicyDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The contained SLA policy definitions configured for this case type. Supports $filter and $orderby on createdBy, createdDateTime, description, displayName, id, isActive, lastModifiedBy, and lastModifiedDateTime on the collection endpoint. For information about supported query parameters, see List slaPolicies. Also supports $count, $select, and $top on the collection endpoint. Supports $expand=slaPolicies when getting a case type configuration.
     * @param SlaPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SlaPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to slaPolicies for security
     * @param SlaPolicyDefinition $body The request body
     * @param SlaPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SlaPolicyDefinition $body, ?SlaPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return SlaPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): SlaPoliciesRequestBuilder {
        return new SlaPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
