<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ConvertExternalToInternalMemberUser;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ConversionUserDetails;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the convertExternalToInternalMemberUser method.
*/
class ConvertExternalToInternalMemberUserRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConvertExternalToInternalMemberUserRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/convertExternalToInternalMemberUser');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Convert an externally authenticated user into an internal user. The user is able to sign into the host tenant as an internal user and access resources as a member. For more information about this conversion, see Convert external users to internal users.
     * @param ConvertExternalToInternalMemberUserPostRequestBody $body The request body
     * @param ConvertExternalToInternalMemberUserRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConversionUserDetails|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/user-convertexternaltointernalmemberuser?view=graph-rest-beta Find more info here
    */
    public function post(ConvertExternalToInternalMemberUserPostRequestBody $body, ?ConvertExternalToInternalMemberUserRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConversionUserDetails::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Convert an externally authenticated user into an internal user. The user is able to sign into the host tenant as an internal user and access resources as a member. For more information about this conversion, see Convert external users to internal users.
     * @param ConvertExternalToInternalMemberUserPostRequestBody $body The request body
     * @param ConvertExternalToInternalMemberUserRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConvertExternalToInternalMemberUserPostRequestBody $body, ?ConvertExternalToInternalMemberUserRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConvertExternalToInternalMemberUserRequestBuilder
    */
    public function withUrl(string $rawUrl): ConvertExternalToInternalMemberUserRequestBuilder {
        return new ConvertExternalToInternalMemberUserRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
