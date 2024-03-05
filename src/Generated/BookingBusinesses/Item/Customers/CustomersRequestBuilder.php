<?php

namespace Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Customers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Customers\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Customers\Item\BookingCustomerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\BookingCustomer;
use Microsoft\Graph\Beta\Generated\Models\BookingCustomerCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customers property of the microsoft.graph.bookingBusiness entity.
*/
class CustomersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customers property of the microsoft.graph.bookingBusiness entity.
     * @param string $bookingCustomerId The unique identifier of bookingCustomer
     * @return BookingCustomerItemRequestBuilder
    */
    public function byBookingCustomerId(string $bookingCustomerId): BookingCustomerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCustomer%2Did'] = $bookingCustomerId;
        return new BookingCustomerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bookingBusinesses/{bookingBusiness%2Did}/customers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of bookingCustomer objects.
     * @param CustomersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingCustomerCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/bookingbusiness-list-customers?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingCustomerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new bookingCustomer object.
     * @param BookingCustomer $body The request body
     * @param CustomersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BookingCustomer|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/bookingbusiness-post-customers?view=graph-rest-1.0 Find more info here
    */
    public function post(BookingCustomer $body, ?CustomersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BookingCustomer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of bookingCustomer objects.
     * @param CustomersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new bookingCustomer object.
     * @param BookingCustomer $body The request body
     * @param CustomersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BookingCustomer $body, ?CustomersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/bookingBusinesses/{bookingBusiness%2Did}/customers';
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
     * @return CustomersRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomersRequestBuilder {
        return new CustomersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
