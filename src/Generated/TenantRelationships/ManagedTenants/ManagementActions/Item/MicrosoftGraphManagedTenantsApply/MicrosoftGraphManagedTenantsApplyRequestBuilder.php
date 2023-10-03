<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\Item\MicrosoftGraphManagedTenantsApply;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementActionDeploymentStatus;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the apply method.
*/
class MicrosoftGraphManagedTenantsApplyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphManagedTenantsApplyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/managementActions/{managementAction%2Did}/microsoft.graph.managedTenants.apply');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Applies a management action against a specific managed tenant. By performing this operation the appropriate configurations will be made and policies created. As example when applying the require multi-factor authentication for admins management action will create an Azure Active Directory conditional access policy that requires multi-factor authentication for all users that have been assigned an administrative directory role. This API is supported in the following national cloud deployments.
     * @param ApplyPostRequestBody $body The request body
     * @param MicrosoftGraphManagedTenantsApplyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/managedtenants-managementaction-apply?view=graph-rest-1.0 Find more info here
    */
    public function post(ApplyPostRequestBody $body, ?MicrosoftGraphManagedTenantsApplyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagementActionDeploymentStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Applies a management action against a specific managed tenant. By performing this operation the appropriate configurations will be made and policies created. As example when applying the require multi-factor authentication for admins management action will create an Azure Active Directory conditional access policy that requires multi-factor authentication for all users that have been assigned an administrative directory role. This API is supported in the following national cloud deployments.
     * @param ApplyPostRequestBody $body The request body
     * @param MicrosoftGraphManagedTenantsApplyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApplyPostRequestBody $body, ?MicrosoftGraphManagedTenantsApplyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphManagedTenantsApplyRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphManagedTenantsApplyRequestBuilder {
        return new MicrosoftGraphManagedTenantsApplyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
