<?php

namespace Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\StaffMembers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\StaffMembers\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\StaffMembers\Item\BookingStaffMemberItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\BookingStaffMember;
use Microsoft\Graph\Beta\Generated\Models\BookingStaffMemberCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the staffMembers property of the microsoft.graph.bookingBusiness entity.
*/
class StaffMembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the staffMembers property of the microsoft.graph.bookingBusiness entity.
     * @param string $bookingStaffMemberId The unique identifier of bookingStaffMember
     * @return BookingStaffMemberItemRequestBuilder
    */
    public function byBookingStaffMemberId(string $bookingStaffMemberId): BookingStaffMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingStaffMember%2Did'] = $bookingStaffMemberId;
        return new BookingStaffMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new StaffMembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bookingBusinesses/{bookingBusiness%2Did}/staffMembers{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of bookingStaffMember objects in the specified bookingBusiness.
     * @param StaffMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingStaffMemberCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/bookingbusiness-list-staffmembers?view=graph-rest-1.0 Find more info here
    */
    public function get(?StaffMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingStaffMemberCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new staff member in the specified bookingBusiness.
     * @param BookingStaffMember $body The request body
     * @param StaffMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingStaffMember|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/bookingbusiness-post-staffmembers?view=graph-rest-1.0 Find more info here
    */
    public function post(BookingStaffMember $body, ?StaffMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingStaffMember::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of bookingStaffMember objects in the specified bookingBusiness.
     * @param StaffMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?StaffMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new staff member in the specified bookingBusiness.
     * @param BookingStaffMember $body The request body
     * @param StaffMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BookingStaffMember $body, ?StaffMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return StaffMembersRequestBuilder
    */
    public function withUrl(string $rawUrl): StaffMembersRequestBuilder {
        return new StaffMembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
