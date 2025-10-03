<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\Authentication\HardwareOathMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\HardwareOathAuthenticationMethod;
use Microsoft\\Graph\\Beta\\Generated\Models\HardwareOathAuthenticationMethodCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Users\Item\Authentication\HardwareOathMethods\AssignAndActivate\AssignAndActivateRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Users\Item\Authentication\HardwareOathMethods\AssignAndActivateBySerialNumber\AssignAndActivateBySerialNumberRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Users\Item\Authentication\HardwareOathMethods\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Users\Item\Authentication\HardwareOathMethods\Item\HardwareOathAuthenticationMethodItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the hardwareOathMethods property of the microsoft.graph.authentication entity.
*/
class HardwareOathMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assignAndActivate method.
    */
    public function assignAndActivate(): AssignAndActivateRequestBuilder {
        return new AssignAndActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignAndActivateBySerialNumber method.
    */
    public function assignAndActivateBySerialNumber(): AssignAndActivateBySerialNumberRequestBuilder {
        return new AssignAndActivateBySerialNumberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hardwareOathMethods property of the microsoft.graph.authentication entity.
     * @param string $hardwareOathAuthenticationMethodId The unique identifier of hardwareOathAuthenticationMethod
     * @return HardwareOathAuthenticationMethodItemRequestBuilder
    */
    public function byHardwareOathAuthenticationMethodId(string $hardwareOathAuthenticationMethodId): HardwareOathAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hardwareOathAuthenticationMethod%2Did'] = $hardwareOathAuthenticationMethodId;
        return new HardwareOathAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HardwareOathMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/hardwareOathMethods{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The hardware OATH time-based one-time password (TOTP) devices assigned to a user for authentication.
     * @param HardwareOathMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathAuthenticationMethodCollectionResponse|null>
     * @throws Exception
    */
    public function get(?HardwareOathMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathAuthenticationMethodCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to hardwareOathMethods for users
     * @param HardwareOathAuthenticationMethod $body The request body
     * @param HardwareOathMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathAuthenticationMethod|null>
     * @throws Exception
    */
    public function post(HardwareOathAuthenticationMethod $body, ?HardwareOathMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The hardware OATH time-based one-time password (TOTP) devices assigned to a user for authentication.
     * @param HardwareOathMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HardwareOathMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to hardwareOathMethods for users
     * @param HardwareOathAuthenticationMethod $body The request body
     * @param HardwareOathMethodsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(HardwareOathAuthenticationMethod $body, ?HardwareOathMethodsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return HardwareOathMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): HardwareOathMethodsRequestBuilder {
        return new HardwareOathMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
