<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagedTenantEmailNotification;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagedTenantEmailNotificationCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\Item\ManagedTenantEmailNotificationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedTenantEmailNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class ManagedTenantEmailNotificationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantEmailNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $managedTenantEmailNotificationId The unique identifier of managedTenantEmailNotification
     * @return ManagedTenantEmailNotificationItemRequestBuilder
    */
    public function byManagedTenantEmailNotificationId(string $managedTenantEmailNotificationId): ManagedTenantEmailNotificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedTenantEmailNotification%2Did'] = $managedTenantEmailNotificationId;
        return new ManagedTenantEmailNotificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedTenantEmailNotificationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get managedTenantEmailNotifications from tenantRelationships
     * @param ManagedTenantEmailNotificationsRequestBuilderGetRequest_2e1d4354|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedTenantEmailNotificationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagedTenantEmailNotificationsRequestBuilderGetRequest_2e1d4354 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedTenantEmailNotificationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managedTenantEmailNotifications for tenantRelationships
     * @param ManagedTenantEmailNotification $body The request body
     * @param ManagedTenantEmailNotificationsRequestBuilderPostReques_c7adabd3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedTenantEmailNotification|null>
     * @throws Exception
    */
    public function post(ManagedTenantEmailNotification $body, ?ManagedTenantEmailNotificationsRequestBuilderPostReques_c7adabd3 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedTenantEmailNotification::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get managedTenantEmailNotifications from tenantRelationships
     * @param ManagedTenantEmailNotificationsRequestBuilderGetRequest_2e1d4354|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedTenantEmailNotificationsRequestBuilderGetRequest_2e1d4354 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/managedTenants/managedTenantEmailNotifications{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}';
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
     * Create new navigation property to managedTenantEmailNotifications for tenantRelationships
     * @param ManagedTenantEmailNotification $body The request body
     * @param ManagedTenantEmailNotificationsRequestBuilderPostReques_c7adabd3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedTenantEmailNotification $body, ?ManagedTenantEmailNotificationsRequestBuilderPostReques_c7adabd3 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/managedTenants/managedTenantEmailNotifications';
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
     * @return ManagedTenantEmailNotificationsRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedTenantEmailNotificationsRequestBuilder {
        return new ManagedTenantEmailNotificationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
