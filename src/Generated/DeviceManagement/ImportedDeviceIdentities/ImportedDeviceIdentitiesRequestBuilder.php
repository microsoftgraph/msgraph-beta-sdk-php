<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\ImportDeviceIdentityList\ImportDeviceIdentityListRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\Item\ImportedDeviceIdentityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\SearchExistingIdentities\SearchExistingIdentitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ImportedDeviceIdentity;
use Microsoft\Graph\Beta\Generated\Models\ImportedDeviceIdentityCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the importedDeviceIdentities property of the microsoft.graph.deviceManagement entity.
*/
class ImportedDeviceIdentitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the importDeviceIdentityList method.
    */
    public function importDeviceIdentityList(): ImportDeviceIdentityListRequestBuilder {
        return new ImportDeviceIdentityListRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the searchExistingIdentities method.
    */
    public function searchExistingIdentities(): SearchExistingIdentitiesRequestBuilder {
        return new SearchExistingIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the importedDeviceIdentities property of the microsoft.graph.deviceManagement entity.
     * @param string $importedDeviceIdentityId The unique identifier of importedDeviceIdentity
     * @return ImportedDeviceIdentityItemRequestBuilder
    */
    public function byImportedDeviceIdentityId(string $importedDeviceIdentityId): ImportedDeviceIdentityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['importedDeviceIdentity%2Did'] = $importedDeviceIdentityId;
        return new ImportedDeviceIdentityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ImportedDeviceIdentitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/importedDeviceIdentities{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The imported device identities.
     * @param ImportedDeviceIdentitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ImportedDeviceIdentitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ImportedDeviceIdentityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to importedDeviceIdentities for deviceManagement
     * @param ImportedDeviceIdentity $body The request body
     * @param ImportedDeviceIdentitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(ImportedDeviceIdentity $body, ?ImportedDeviceIdentitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ImportedDeviceIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The imported device identities.
     * @param ImportedDeviceIdentitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ImportedDeviceIdentitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to importedDeviceIdentities for deviceManagement
     * @param ImportedDeviceIdentity $body The request body
     * @param ImportedDeviceIdentitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ImportedDeviceIdentity $body, ?ImportedDeviceIdentitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
