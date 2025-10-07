<?php

namespace Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Item\Connectors\Item\MemberOf;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ConnectorGroupCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Item\Connectors\Item\MemberOf\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Item\Connectors\Item\MemberOf\Item\ConnectorGroupItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Item\Connectors\Item\MemberOf\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the memberOf property of the microsoft.graph.connector entity.
*/
class MemberOfRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of onPremisesPublishingProfile entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft//Graph//Beta//Generated.onPremisesPublishingProfiles.item.connectors.item.memberOf.item collection
     * @param string $connectorGroupId The unique identifier of connectorGroup
     * @return ConnectorGroupItemRequestBuilder
    */
    public function byConnectorGroupId(string $connectorGroupId): ConnectorGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['connectorGroup%2Did'] = $connectorGroupId;
        return new ConnectorGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MemberOfRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/onPremisesPublishingProfiles/{onPremisesPublishingProfile%2Did}/connectors/{connector%2Did}/memberOf{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The connectorGroup that the connector is a member of. Read-only.
     * @param MemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConnectorGroupCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConnectorGroupCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The connectorGroup that the connector is a member of. Read-only.
     * @param MemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MemberOfRequestBuilder
    */
    public function withUrl(string $rawUrl): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
