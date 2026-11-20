<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\Item\MicrosoftGraphSecurityContentManagementModify;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\ContentManagementRepository;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the modify method.
*/
class MicrosoftGraphSecurityContentManagementModifyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityContentManagementModifyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/contentManagement/repositories/{contentManagementRepository%2Did}/microsoft.graph.security.contentManagement.modify');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Modify a connected repository.
     * @param ModifyPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityContentManagementModifyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentManagementRepository|null>
     * @throws Exception
    */
    public function post(ModifyPostRequestBody $body, ?MicrosoftGraphSecurityContentManagementModifyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentManagementRepository::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Modify a connected repository.
     * @param ModifyPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityContentManagementModifyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ModifyPostRequestBody $body, ?MicrosoftGraphSecurityContentManagementModifyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityContentManagementModifyRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityContentManagementModifyRequestBuilder {
        return new MicrosoftGraphSecurityContentManagementModifyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
