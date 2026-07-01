<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_8f0404c6;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the roleSchedules method. Original name: RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder
*/
class RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_aaff52a1 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_aaff52a1 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/entitlementManagement/roleSchedules(directoryScopeId=\'@directoryScopeId\',appScopeId=\'@appScopeId\',principalId=\'@principalId\',roleDefinitionId=\'@roleDefinitionId\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top,appScopeId*,directoryScopeId*,principalId*,roleDefinitionId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve both roleAssignmentSchedules and roleEligibilitySchedules.
     * @param RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ea0ca5aa|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_4997ce03|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/rbacapplication-roleschedules?view=graph-rest-beta Find more info here
    */
    public function get(?RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ea0ca5aa $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_4997ce03::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve both roleAssignmentSchedules and roleEligibilitySchedules.
     * @param RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ea0ca5aa|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ea0ca5aa $requestConfiguration = null): RequestInformation {
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
     * @return RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_aaff52a1
    */
    public function withUrl(string $rawUrl): RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_aaff52a1 {
        return new RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_aaff52a1($rawUrl, $this->requestAdapter);
    }

}
