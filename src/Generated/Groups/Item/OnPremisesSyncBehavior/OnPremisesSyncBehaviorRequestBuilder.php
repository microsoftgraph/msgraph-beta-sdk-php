<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\OnPremisesSyncBehavior;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OnPremisesSyncBehavior;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onPremisesSyncBehavior property of the microsoft.graph.group entity.
*/
class OnPremisesSyncBehaviorRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new OnPremisesSyncBehaviorRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/onPremisesSyncBehavior{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property onPremisesSyncBehavior for groups
     * @param OnPremisesSyncBehaviorRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?OnPremisesSyncBehaviorRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties of an onPremisesSyncBehavior object. The isCloudManaged property indicates whether the object's source of authority is set to the cloud. If true, updates from on-premises Active Directory are blocked in the cloud; if false, updates from on-premises Active Directory are allowed in the cloud and the object can be taken over by on-premises Active Directory.
     * @param OnPremisesSyncBehaviorRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremisesSyncBehavior|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onpremisessyncbehavior-get?view=graph-rest-beta Find more info here
    */
    public function get(?OnPremisesSyncBehaviorRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremisesSyncBehavior::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an onPremisesSyncBehavior object.
     * @param OnPremisesSyncBehavior $body The request body
     * @param OnPremisesSyncBehaviorRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremisesSyncBehavior|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onpremisessyncbehavior-update?view=graph-rest-beta Find more info here
    */
    public function patch(OnPremisesSyncBehavior $body, ?OnPremisesSyncBehaviorRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremisesSyncBehavior::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property onPremisesSyncBehavior for groups
     * @param OnPremisesSyncBehaviorRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OnPremisesSyncBehaviorRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties of an onPremisesSyncBehavior object. The isCloudManaged property indicates whether the object's source of authority is set to the cloud. If true, updates from on-premises Active Directory are blocked in the cloud; if false, updates from on-premises Active Directory are allowed in the cloud and the object can be taken over by on-premises Active Directory.
     * @param OnPremisesSyncBehaviorRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnPremisesSyncBehaviorRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an onPremisesSyncBehavior object.
     * @param OnPremisesSyncBehavior $body The request body
     * @param OnPremisesSyncBehaviorRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OnPremisesSyncBehavior $body, ?OnPremisesSyncBehaviorRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnPremisesSyncBehaviorRequestBuilder
    */
    public function withUrl(string $rawUrl): OnPremisesSyncBehaviorRequestBuilder {
        return new OnPremisesSyncBehaviorRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
