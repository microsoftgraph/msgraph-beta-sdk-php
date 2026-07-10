<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxExclusionUnitsBulkAdditionJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MailboxExclusionUnitsBulkAdditionJobCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxExclusionUnitsBulkAdditionJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxExclusionUnitsBulkAdditionJobs\Item\MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxExclusionUnitsBulkAdditionJobs property of the microsoft.graph.exchangeProtectionPolicy entity.
*/
class MailboxExclusionUnitsBulkAdditionJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxExclusionUnitsBulkAdditionJobs property of the microsoft.graph.exchangeProtectionPolicy entity.
     * @param string $mailboxExclusionUnitsBulkAdditionJobId The unique identifier of mailboxExclusionUnitsBulkAdditionJob
     * @return MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function byMailboxExclusionUnitsBulkAdditionJobId(string $mailboxExclusionUnitsBulkAdditionJobId): MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailboxExclusionUnitsBulkAdditionJob%2Did'] = $mailboxExclusionUnitsBulkAdditionJobId;
        return new MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailboxExclusionUnitsBulkAdditionJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeProtectionPolicies/{exchangeProtectionPolicy%2Did}/mailboxExclusionUnitsBulkAdditionJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of mailbox exclusion units bulk addition jobs associated with an Exchange protection policy.
     * @param MailboxExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxExclusionUnitsBulkAdditionJobCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/exchangeprotectionpolicy-list-mailboxexclusionunitsbulkadditionjobs?view=graph-rest-beta Find more info here
    */
    public function get(?MailboxExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxExclusionUnitsBulkAdditionJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of mailbox exclusion units bulk addition jobs associated with an Exchange protection policy.
     * @param MailboxExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailboxExclusionUnitsBulkAdditionJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxExclusionUnitsBulkAdditionJobsRequestBuilder {
        return new MailboxExclusionUnitsBulkAdditionJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
