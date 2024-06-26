<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CartToClassAssociations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CartToClassAssociations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CartToClassAssociations\Item\CartToClassAssociationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CartToClassAssociation;
use Microsoft\Graph\Beta\Generated\Models\CartToClassAssociationCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cartToClassAssociations property of the microsoft.graph.deviceManagement entity.
*/
class CartToClassAssociationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cartToClassAssociations property of the microsoft.graph.deviceManagement entity.
     * @param string $cartToClassAssociationId The unique identifier of cartToClassAssociation
     * @return CartToClassAssociationItemRequestBuilder
    */
    public function byCartToClassAssociationId(string $cartToClassAssociationId): CartToClassAssociationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cartToClassAssociation%2Did'] = $cartToClassAssociationId;
        return new CartToClassAssociationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CartToClassAssociationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/cartToClassAssociations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The Cart To Class Associations.
     * @param CartToClassAssociationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CartToClassAssociationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CartToClassAssociationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CartToClassAssociationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to cartToClassAssociations for deviceManagement
     * @param CartToClassAssociation $body The request body
     * @param CartToClassAssociationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CartToClassAssociation|null>
     * @throws Exception
    */
    public function post(CartToClassAssociation $body, ?CartToClassAssociationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CartToClassAssociation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The Cart To Class Associations.
     * @param CartToClassAssociationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CartToClassAssociationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to cartToClassAssociations for deviceManagement
     * @param CartToClassAssociation $body The request body
     * @param CartToClassAssociationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CartToClassAssociation $body, ?CartToClassAssociationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CartToClassAssociationsRequestBuilder
    */
    public function withUrl(string $rawUrl): CartToClassAssociationsRequestBuilder {
        return new CartToClassAssociationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
