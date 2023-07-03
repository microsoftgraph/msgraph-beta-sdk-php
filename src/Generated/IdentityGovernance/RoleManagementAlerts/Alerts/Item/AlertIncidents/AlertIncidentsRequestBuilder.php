<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Item\AlertIncidents;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Item\AlertIncidents\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Item\AlertIncidents\Item\UnifiedRoleManagementAlertIncidentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleManagementAlertIncident;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleManagementAlertIncidentCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the alertIncidents property of the microsoft.graph.unifiedRoleManagementAlert entity.
*/
class AlertIncidentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alertIncidents property of the microsoft.graph.unifiedRoleManagementAlert entity.
     * @param string $unifiedRoleManagementAlertIncidentId Unique identifier of the item
     * @return UnifiedRoleManagementAlertIncidentItemRequestBuilder
    */
    public function byUnifiedRoleManagementAlertIncidentId(string $unifiedRoleManagementAlertIncidentId): UnifiedRoleManagementAlertIncidentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementAlertIncident%2Did'] = $unifiedRoleManagementAlertIncidentId;
        return new UnifiedRoleManagementAlertIncidentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AlertIncidentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/roleManagementAlerts/alerts/{unifiedRoleManagementAlert%2Did}/alertIncidents{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the alert incidents. The alert incidents are a collection of any following type that is derived from the unifiedRoleManagementAlertIncident object:
     * @param AlertIncidentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/unifiedrolemanagementalert-list-alertincidents?view=graph-rest-1.0 Find more info here
    */
    public function get(?AlertIncidentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertIncidentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to alertIncidents for identityGovernance
     * @param UnifiedRoleManagementAlertIncident $body The request body
     * @param AlertIncidentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(UnifiedRoleManagementAlertIncident $body, ?AlertIncidentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertIncident::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get a list of the alert incidents. The alert incidents are a collection of any following type that is derived from the unifiedRoleManagementAlertIncident object:
     * @param AlertIncidentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AlertIncidentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to alertIncidents for identityGovernance
     * @param UnifiedRoleManagementAlertIncident $body The request body
     * @param AlertIncidentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleManagementAlertIncident $body, ?AlertIncidentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
