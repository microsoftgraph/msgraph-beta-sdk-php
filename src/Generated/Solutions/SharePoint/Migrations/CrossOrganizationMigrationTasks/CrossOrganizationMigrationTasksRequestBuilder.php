<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SharePointMigrationTask;
use Microsoft\Graph\Beta\Generated\Models\SharePointMigrationTaskCollectionResponse;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks\GetBySourceGroupMailNicknameWithSourceGroupMailNickname\GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks\GetBySourceSiteUrlWithSourceSiteUrl\GetBySourceSiteUrlWithSourceSiteUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks\GetBySourceUserPrincipalNameWithSourcePrincipalName\GetBySourceUserPrincipalNameWithSourcePrincipalNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks\Item\SharePointMigrationTaskItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossOrganizationMigrationTasks property of the microsoft.graph.sharePointMigrationsRoot entity.
*/
class CrossOrganizationMigrationTasksRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the crossOrganizationMigrationTasks property of the microsoft.graph.sharePointMigrationsRoot entity.
     * @param string $sharePointMigrationTaskId The unique identifier of sharePointMigrationTask
     * @return SharePointMigrationTaskItemRequestBuilder
    */
    public function bySharePointMigrationTaskId(string $sharePointMigrationTaskId): SharePointMigrationTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharePointMigrationTask%2Did'] = $sharePointMigrationTaskId;
        return new SharePointMigrationTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CrossOrganizationMigrationTasksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/sharePoint/migrations/crossOrganizationMigrationTasks{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get crossOrganizationMigrationTasks from solutions
     * @param CrossOrganizationMigrationTasksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointMigrationTaskCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CrossOrganizationMigrationTasksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointMigrationTaskCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getBySourceGroupMailNickname method.
     * @param string $sourceGroupMailNickname Usage: sourceGroupMailNickname='{sourceGroupMailNickname}'
     * @return GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder
    */
    public function getBySourceGroupMailNicknameWithSourceGroupMailNickname(string $sourceGroupMailNickname): GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder {
        return new GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder($this->pathParameters, $this->requestAdapter, $sourceGroupMailNickname);
    }

    /**
     * Provides operations to call the getBySourceSiteUrl method.
     * @param string $sourceSiteUrl Usage: sourceSiteUrl='{sourceSiteUrl}'
     * @return GetBySourceSiteUrlWithSourceSiteUrlRequestBuilder
    */
    public function getBySourceSiteUrlWithSourceSiteUrl(string $sourceSiteUrl): GetBySourceSiteUrlWithSourceSiteUrlRequestBuilder {
        return new GetBySourceSiteUrlWithSourceSiteUrlRequestBuilder($this->pathParameters, $this->requestAdapter, $sourceSiteUrl);
    }

    /**
     * Provides operations to call the getBySourceUserPrincipalName method.
     * @param string $sourcePrincipalName Usage: sourcePrincipalName='{sourcePrincipalName}'
     * @return GetBySourceUserPrincipalNameWithSourcePrincipalNameRequestBuilder
    */
    public function getBySourceUserPrincipalNameWithSourcePrincipalName(string $sourcePrincipalName): GetBySourceUserPrincipalNameWithSourcePrincipalNameRequestBuilder {
        return new GetBySourceUserPrincipalNameWithSourcePrincipalNameRequestBuilder($this->pathParameters, $this->requestAdapter, $sourcePrincipalName);
    }

    /**
     * Create new navigation property to crossOrganizationMigrationTasks for solutions
     * @param SharePointMigrationTask $body The request body
     * @param CrossOrganizationMigrationTasksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointMigrationTask|null>
     * @throws Exception
    */
    public function post(SharePointMigrationTask $body, ?CrossOrganizationMigrationTasksRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointMigrationTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get crossOrganizationMigrationTasks from solutions
     * @param CrossOrganizationMigrationTasksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossOrganizationMigrationTasksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to crossOrganizationMigrationTasks for solutions
     * @param SharePointMigrationTask $body The request body
     * @param CrossOrganizationMigrationTasksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharePointMigrationTask $body, ?CrossOrganizationMigrationTasksRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossOrganizationMigrationTasksRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossOrganizationMigrationTasksRequestBuilder {
        return new CrossOrganizationMigrationTasksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
