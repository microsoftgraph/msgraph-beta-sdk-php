<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item\RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_2d583909;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the roleScheduleInstances method. Original name: RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder
*/
class RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_f138522e extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_f138522e and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/enterpriseApps/{rbacApplication%2Did}/roleScheduleInstances(directoryScopeId=\'@directoryScopeId\',appScopeId=\'@appScopeId\',principalId=\'@principalId\',roleDefinitionId=\'@roleDefinitionId\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top,appScopeId*,directoryScopeId*,principalId*,roleDefinitionId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve both roleAssignmentScheduleInstances and roleEligibilityScheduleInstances.
     * @param RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_e21668f4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_c90bf2aa|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/rbacapplication-rolescheduleinstances?view=graph-rest-beta Find more info here
    */
    public function get(?RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_e21668f4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_c90bf2aa::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve both roleAssignmentScheduleInstances and roleEligibilityScheduleInstances.
     * @param RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_e21668f4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_e21668f4 $requestConfiguration = null): RequestInformation {
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
     * @return RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_f138522e
    */
    public function withUrl(string $rawUrl): RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_f138522e {
        return new RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAp_f138522e($rawUrl, $this->requestAdapter);
    }

}
