<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageResourceRoleScopes\Item\AccessPackageResourceRole\AccessPackageResource\UploadSessions\Item\Files;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageResourceRoleScopes\Item\AccessPackageResourceRole\AccessPackageResource\UploadSessions\Item\Files\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageResourceRoleScopes\Item\AccessPackageResourceRole\AccessPackageResource\UploadSessions\Item\Files\Item\CustomDataProvidedResourceFileNameItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\CustomDataProvidedResourceFile;
use Microsoft\\Graph\\Beta\\Generated\Models\CustomDataProvidedResourceFileCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the files property of the microsoft.graph.customDataProvidedResourceUploadSession entity.
*/
class FilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the files property of the microsoft.graph.customDataProvidedResourceUploadSession entity.
     * @param string $customDataProvidedResourceFileName The unique identifier of customDataProvidedResourceFile
     * @return CustomDataProvidedResourceFileNameItemRequestBuilder
    */
    public function byCustomDataProvidedResourceFileName(string $customDataProvidedResourceFileName): CustomDataProvidedResourceFileNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customDataProvidedResourceFile%2Dname'] = $customDataProvidedResourceFileName;
        return new CustomDataProvidedResourceFileNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackages/{accessPackage%2Did}/accessPackageResourceRoleScopes/{accessPackageResourceRoleScope%2Did}/accessPackageResourceRole/accessPackageResource/uploadSessions/{customDataProvidedResourceUploadSession%2Did}/files{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get files from identityGovernance
     * @param FilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomDataProvidedResourceFileCollectionResponse|null>
     * @throws Exception
    */
    public function get(?FilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomDataProvidedResourceFileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to files for identityGovernance
     * @param CustomDataProvidedResourceFile $body The request body
     * @param FilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomDataProvidedResourceFile|null>
     * @throws Exception
    */
    public function post(CustomDataProvidedResourceFile $body, ?FilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomDataProvidedResourceFile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get files from identityGovernance
     * @param FilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to files for identityGovernance
     * @param CustomDataProvidedResourceFile $body The request body
     * @param FilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomDataProvidedResourceFile $body, ?FilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FilesRequestBuilder
    */
    public function withUrl(string $rawUrl): FilesRequestBuilder {
        return new FilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
