<?php

namespace Microsoft\Graph\Beta\Generated\Storage\FileStorage\DeletedContainers\GetByUserWithUserObjectIdWithRole;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getByUser method.
*/
class GetByUserWithUserObjectIdWithRoleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetByUserWithUserObjectIdWithRoleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $role Usage: role='{role}'
     * @param string|null $userObjectId Usage: userObjectId={userObjectId}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $role = null, ?string $userObjectId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/deletedContainers/getByUser(userObjectId={userObjectId},role=\'{role}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['role'] = $role;
            $urlTplParams['userObjectId'] = $userObjectId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getByUser
     * @param GetByUserWithUserObjectIdWithRoleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetByUserWithUserObjectIdWithRoleGetResponse|null>
     * @throws Exception
    */
    public function get(?GetByUserWithUserObjectIdWithRoleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetByUserWithUserObjectIdWithRoleGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getByUser
     * @param GetByUserWithUserObjectIdWithRoleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetByUserWithUserObjectIdWithRoleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetByUserWithUserObjectIdWithRoleRequestBuilder
    */
    public function withUrl(string $rawUrl): GetByUserWithUserObjectIdWithRoleRequestBuilder {
        return new GetByUserWithUserObjectIdWithRoleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
