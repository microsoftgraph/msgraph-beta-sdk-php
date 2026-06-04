<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\TenantCustomizedInformation;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tenantsCustomizedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class TenantCustomizedInformationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TenantCustomizedInformationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/tenantsCustomizedInformation/{tenantCustomizedInformation%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property tenantsCustomizedInformation for tenantRelationships
     * @param TenantCustomizedInformationItemRequestBuilderDeleteRequ_828812f1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?TenantCustomizedInformationItemRequestBuilderDeleteRequ_828812f1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a tenantCustomizedInformation object.
     * @param TenantCustomizedInformationItemRequestBuilderGetRequest_a202a253|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantCustomizedInformation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/managedtenants-tenantcustomizedinformation-get?view=graph-rest-beta Find more info here
    */
    public function get(?TenantCustomizedInformationItemRequestBuilderGetRequest_a202a253 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantCustomizedInformation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a tenantCustomizedInformation object.
     * @param TenantCustomizedInformation $body The request body
     * @param TenantCustomizedInformationItemRequestBuilderPatchReque_97db8bcc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantCustomizedInformation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/managedtenants-tenantcustomizedinformation-update?view=graph-rest-beta Find more info here
    */
    public function patch(TenantCustomizedInformation $body, ?TenantCustomizedInformationItemRequestBuilderPatchReque_97db8bcc $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantCustomizedInformation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property tenantsCustomizedInformation for tenantRelationships
     * @param TenantCustomizedInformationItemRequestBuilderDeleteRequ_828812f1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TenantCustomizedInformationItemRequestBuilderDeleteRequ_828812f1 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a tenantCustomizedInformation object.
     * @param TenantCustomizedInformationItemRequestBuilderGetRequest_a202a253|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantCustomizedInformationItemRequestBuilderGetRequest_a202a253 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/managedTenants/tenantsCustomizedInformation/{tenantCustomizedInformation%2Did}{?%24expand,%24select}';
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
     * Update the properties of a tenantCustomizedInformation object.
     * @param TenantCustomizedInformation $body The request body
     * @param TenantCustomizedInformationItemRequestBuilderPatchReque_97db8bcc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TenantCustomizedInformation $body, ?TenantCustomizedInformationItemRequestBuilderPatchReque_97db8bcc $requestConfiguration = null): RequestInformation {
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
     * @return TenantCustomizedInformationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): TenantCustomizedInformationItemRequestBuilder {
        return new TenantCustomizedInformationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
