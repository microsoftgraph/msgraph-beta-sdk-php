<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\HasPayloadLinks\HasPayloadLinksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\Item\MdmWindowsInformationProtectionPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MdmWindowsInformationProtectionPolicy;
use Microsoft\Graph\Beta\Generated\Models\MdmWindowsInformationProtectionPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mdmWindowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
*/
class MdmWindowsInformationProtectionPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hasPayloadLinks method.
    */
    public function hasPayloadLinks(): HasPayloadLinksRequestBuilder {
        return new HasPayloadLinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mdmWindowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $mdmWindowsInformationProtectionPolicyId The unique identifier of mdmWindowsInformationProtectionPolicy
     * @return MdmWindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function byMdmWindowsInformationProtectionPolicyId(string $mdmWindowsInformationProtectionPolicyId): MdmWindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mdmWindowsInformationProtectionPolicy%2Did'] = $mdmWindowsInformationProtectionPolicyId;
        return new MdmWindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MdmWindowsInformationProtectionPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mdmWindowsInformationProtectionPolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Windows information protection for apps running on devices which are MDM enrolled.
     * @param MdmWindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MdmWindowsInformationProtectionPolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MdmWindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MdmWindowsInformationProtectionPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mdmWindowsInformationProtectionPolicies for deviceAppManagement
     * @param MdmWindowsInformationProtectionPolicy $body The request body
     * @param MdmWindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MdmWindowsInformationProtectionPolicy|null>
     * @throws Exception
    */
    public function post(MdmWindowsInformationProtectionPolicy $body, ?MdmWindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MdmWindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Windows information protection for apps running on devices which are MDM enrolled.
     * @param MdmWindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MdmWindowsInformationProtectionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to mdmWindowsInformationProtectionPolicies for deviceAppManagement
     * @param MdmWindowsInformationProtectionPolicy $body The request body
     * @param MdmWindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MdmWindowsInformationProtectionPolicy $body, ?MdmWindowsInformationProtectionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MdmWindowsInformationProtectionPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): MdmWindowsInformationProtectionPoliciesRequestBuilder {
        return new MdmWindowsInformationProtectionPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
