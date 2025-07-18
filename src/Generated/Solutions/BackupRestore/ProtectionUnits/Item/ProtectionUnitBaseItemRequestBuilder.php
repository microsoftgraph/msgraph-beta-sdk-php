<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ProtectionUnits\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ProtectionUnitBase;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ProtectionUnits\Item\CancelOffboard\CancelOffboardRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ProtectionUnits\Item\GraphDriveProtectionUnit\GraphDriveProtectionUnitRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ProtectionUnits\Item\GraphMailboxProtectionUnit\GraphMailboxProtectionUnitRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ProtectionUnits\Item\GraphSiteProtectionUnit\GraphSiteProtectionUnitRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ProtectionUnits\Item\Offboard\OffboardRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the protectionUnits property of the microsoft.graph.backupRestoreRoot entity.
*/
class ProtectionUnitBaseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the cancelOffboard method.
    */
    public function cancelOffboard(): CancelOffboardRequestBuilder {
        return new CancelOffboardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to driveProtectionUnit.
    */
    public function graphDriveProtectionUnit(): GraphDriveProtectionUnitRequestBuilder {
        return new GraphDriveProtectionUnitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to mailboxProtectionUnit.
    */
    public function graphMailboxProtectionUnit(): GraphMailboxProtectionUnitRequestBuilder {
        return new GraphMailboxProtectionUnitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to siteProtectionUnit.
    */
    public function graphSiteProtectionUnit(): GraphSiteProtectionUnitRequestBuilder {
        return new GraphSiteProtectionUnitRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the offboard method.
    */
    public function offboard(): OffboardRequestBuilder {
        return new OffboardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ProtectionUnitBaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/protectionUnits/{protectionUnitBase%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties and relationships of a protectionUnitBase object.
     * @param ProtectionUnitBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProtectionUnitBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/protectionunitbase-get?view=graph-rest-beta Find more info here
    */
    public function get(?ProtectionUnitBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProtectionUnitBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read the properties and relationships of a protectionUnitBase object.
     * @param ProtectionUnitBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProtectionUnitBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProtectionUnitBaseItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ProtectionUnitBaseItemRequestBuilder {
        return new ProtectionUnitBaseItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
