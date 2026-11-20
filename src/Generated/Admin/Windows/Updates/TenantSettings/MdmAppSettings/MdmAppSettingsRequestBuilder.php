<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\TenantSettings\MdmAppSettings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\TenantSettings\MdmAppSettings\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\TenantSettings\MdmAppSettings\Item\MdmAppSettingMdmAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\MdmAppSetting;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\MdmAppSettingCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mdmAppSettings property of the microsoft.graph.windowsUpdates.tenantSetting entity.
*/
class MdmAppSettingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mdmAppSettings property of the microsoft.graph.windowsUpdates.tenantSetting entity.
     * @param string $mdmAppSettingMdmAppId The unique identifier of mdmAppSetting
     * @return MdmAppSettingMdmAppItemRequestBuilder
    */
    public function byMdmAppSettingMdmAppId(string $mdmAppSettingMdmAppId): MdmAppSettingMdmAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mdmAppSetting%2DmdmAppId'] = $mdmAppSettingMdmAppId;
        return new MdmAppSettingMdmAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MdmAppSettingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/tenantSettings/mdmAppSettings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the mdmAppSetting resources for the current tenant.
     * @param MdmAppSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MdmAppSettingCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-tenantsetting-list-mdmappsettings?view=graph-rest-beta Find more info here
    */
    public function get(?MdmAppSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MdmAppSettingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create an mdmAppSetting resource for an MDM application in the current tenant.
     * @param MdmAppSetting $body Per-MDM-application settings for a tenant, identified by a unique MDM app ID (GUID-formatted string).
     * @param MdmAppSettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MdmAppSetting|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-tenantsetting-post-mdmappsettings?view=graph-rest-beta Find more info here
    */
    public function post(MdmAppSetting $body, ?MdmAppSettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MdmAppSetting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the mdmAppSetting resources for the current tenant.
     * @param MdmAppSettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MdmAppSettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create an mdmAppSetting resource for an MDM application in the current tenant.
     * @param MdmAppSetting $body Per-MDM-application settings for a tenant, identified by a unique MDM app ID (GUID-formatted string).
     * @param MdmAppSettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MdmAppSetting $body, ?MdmAppSettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MdmAppSettingsRequestBuilder
    */
    public function withUrl(string $rawUrl): MdmAppSettingsRequestBuilder {
        return new MdmAppSettingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
