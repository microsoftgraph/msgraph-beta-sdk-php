<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleAccessPackages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleAccessPackages\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleAccessPackages\Item\AccessPackageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleAccessPackages\Ref\RefRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessPackageCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the incompatibleAccessPackages property of the microsoft.graph.accessPackage entity.
*/
class IncompatibleAccessPackagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of identityGovernance entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft/Graph/Beta/Generated.identityGovernance.entitlementManagement.accessPackageAssignments.item.accessPackage.incompatibleAccessPackages.item collection
     * @param string $accessPackageId The unique identifier of accessPackage
     * @return AccessPackageItemRequestBuilder
    */
    public function byAccessPackageId(string $accessPackageId): AccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did'] = $accessPackageId;
        return new AccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IncompatibleAccessPackagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageAssignments/{accessPackageAssignment%2Did}/accessPackage/incompatibleAccessPackages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The  access packages whose assigned users are ineligible to be assigned this access package.
     * @param IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The  access packages whose assigned users are ineligible to be assigned this access package.
     * @param IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IncompatibleAccessPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IncompatibleAccessPackagesRequestBuilder
    */
    public function withUrl(string $rawUrl): IncompatibleAccessPackagesRequestBuilder {
        return new IncompatibleAccessPackagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
