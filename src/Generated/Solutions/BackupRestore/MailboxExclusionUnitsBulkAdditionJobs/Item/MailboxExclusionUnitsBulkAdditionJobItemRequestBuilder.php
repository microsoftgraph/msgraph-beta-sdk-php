<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\MailboxExclusionUnitsBulkAdditionJobs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MailboxExclusionUnitsBulkAdditionJob;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxExclusionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
*/
class MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/mailboxExclusionUnitsBulkAdditionJobs/{mailboxExclusionUnitsBulkAdditionJob%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property mailboxExclusionUnitsBulkAdditionJobs for solutions
     * @param MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderD_e49281ae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderD_e49281ae $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of bulk addition jobs for mailbox exclusion units in the tenant.
     * @param MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_0df77069|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxExclusionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function get(?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_0df77069 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxExclusionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property mailboxExclusionUnitsBulkAdditionJobs in solutions
     * @param MailboxExclusionUnitsBulkAdditionJob $body The request body
     * @param MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderP_ee4b2559|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxExclusionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function patch(MailboxExclusionUnitsBulkAdditionJob $body, ?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderP_ee4b2559 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxExclusionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property mailboxExclusionUnitsBulkAdditionJobs for solutions
     * @param MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderD_e49281ae|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderD_e49281ae $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The list of bulk addition jobs for mailbox exclusion units in the tenant.
     * @param MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_0df77069|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_0df77069 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/solutions/backupRestore/mailboxExclusionUnitsBulkAdditionJobs/{mailboxExclusionUnitsBulkAdditionJob%2Did}{?%24expand,%24select}';
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
     * Update the navigation property mailboxExclusionUnitsBulkAdditionJobs in solutions
     * @param MailboxExclusionUnitsBulkAdditionJob $body The request body
     * @param MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderP_ee4b2559|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MailboxExclusionUnitsBulkAdditionJob $body, ?MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderP_ee4b2559 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder {
        return new MailboxExclusionUnitsBulkAdditionJobItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
