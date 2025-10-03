<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Accounts\AccountsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\AgedAccountsPayable\AgedAccountsPayableRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\AgedAccountsReceivable\AgedAccountsReceivableRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CompanyInformation\CompanyInformationRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CountriesRegions\CountriesRegionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Currencies\CurrenciesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CustomerPaymentJournals\CustomerPaymentJournalsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CustomerPayments\CustomerPaymentsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Customers\CustomersRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Dimensions\DimensionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\DimensionValues\DimensionValuesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Employees\EmployeesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\GeneralLedgerEntries\GeneralLedgerEntriesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\ItemCategories\ItemCategoriesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Items\ItemsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\JournalLines\JournalLinesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Journals\JournalsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\PaymentMethods\PaymentMethodsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\PaymentTerms\PaymentTermsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Picture\PictureRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\PurchaseInvoiceLines\PurchaseInvoiceLinesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\PurchaseInvoices\PurchaseInvoicesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesCreditMemoLines\SalesCreditMemoLinesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesCreditMemos\SalesCreditMemosRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesInvoiceLines\SalesInvoiceLinesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesInvoices\SalesInvoicesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesOrderLines\SalesOrderLinesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesOrders\SalesOrdersRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesQuoteLines\SalesQuoteLinesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesQuotes\SalesQuotesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\ShipmentMethods\ShipmentMethodsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\TaxAreas\TaxAreasRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\TaxGroups\TaxGroupsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\UnitsOfMeasure\UnitsOfMeasureRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\Vendors\VendorsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\Company;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the companies property of the microsoft.graph.financials entity.
*/
class CompanyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the accounts property of the microsoft.graph.company entity.
    */
    public function accounts(): AccountsRequestBuilder {
        return new AccountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agedAccountsPayable property of the microsoft.graph.company entity.
    */
    public function agedAccountsPayable(): AgedAccountsPayableRequestBuilder {
        return new AgedAccountsPayableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agedAccountsReceivable property of the microsoft.graph.company entity.
    */
    public function agedAccountsReceivable(): AgedAccountsReceivableRequestBuilder {
        return new AgedAccountsReceivableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the companyInformation property of the microsoft.graph.company entity.
    */
    public function companyInformation(): CompanyInformationRequestBuilder {
        return new CompanyInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the countriesRegions property of the microsoft.graph.company entity.
    */
    public function countriesRegions(): CountriesRegionsRequestBuilder {
        return new CountriesRegionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the currencies property of the microsoft.graph.company entity.
    */
    public function currencies(): CurrenciesRequestBuilder {
        return new CurrenciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customerPaymentJournals property of the microsoft.graph.company entity.
    */
    public function customerPaymentJournals(): CustomerPaymentJournalsRequestBuilder {
        return new CustomerPaymentJournalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customerPayments property of the microsoft.graph.company entity.
    */
    public function customerPayments(): CustomerPaymentsRequestBuilder {
        return new CustomerPaymentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customers property of the microsoft.graph.company entity.
    */
    public function customers(): CustomersRequestBuilder {
        return new CustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dimensions property of the microsoft.graph.company entity.
    */
    public function dimensions(): DimensionsRequestBuilder {
        return new DimensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dimensionValues property of the microsoft.graph.company entity.
    */
    public function dimensionValues(): DimensionValuesRequestBuilder {
        return new DimensionValuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the employees property of the microsoft.graph.company entity.
    */
    public function employees(): EmployeesRequestBuilder {
        return new EmployeesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the generalLedgerEntries property of the microsoft.graph.company entity.
    */
    public function generalLedgerEntries(): GeneralLedgerEntriesRequestBuilder {
        return new GeneralLedgerEntriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the itemCategories property of the microsoft.graph.company entity.
    */
    public function itemCategories(): ItemCategoriesRequestBuilder {
        return new ItemCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.company entity.
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the journalLines property of the microsoft.graph.company entity.
    */
    public function journalLines(): JournalLinesRequestBuilder {
        return new JournalLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the journals property of the microsoft.graph.company entity.
    */
    public function journals(): JournalsRequestBuilder {
        return new JournalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the paymentMethods property of the microsoft.graph.company entity.
    */
    public function paymentMethods(): PaymentMethodsRequestBuilder {
        return new PaymentMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the paymentTerms property of the microsoft.graph.company entity.
    */
    public function paymentTerms(): PaymentTermsRequestBuilder {
        return new PaymentTermsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the picture property of the microsoft.graph.company entity.
    */
    public function picture(): PictureRequestBuilder {
        return new PictureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the purchaseInvoiceLines property of the microsoft.graph.company entity.
    */
    public function purchaseInvoiceLines(): PurchaseInvoiceLinesRequestBuilder {
        return new PurchaseInvoiceLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the purchaseInvoices property of the microsoft.graph.company entity.
    */
    public function purchaseInvoices(): PurchaseInvoicesRequestBuilder {
        return new PurchaseInvoicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesCreditMemoLines property of the microsoft.graph.company entity.
    */
    public function salesCreditMemoLines(): SalesCreditMemoLinesRequestBuilder {
        return new SalesCreditMemoLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesCreditMemos property of the microsoft.graph.company entity.
    */
    public function salesCreditMemos(): SalesCreditMemosRequestBuilder {
        return new SalesCreditMemosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesInvoiceLines property of the microsoft.graph.company entity.
    */
    public function salesInvoiceLines(): SalesInvoiceLinesRequestBuilder {
        return new SalesInvoiceLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesInvoices property of the microsoft.graph.company entity.
    */
    public function salesInvoices(): SalesInvoicesRequestBuilder {
        return new SalesInvoicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesOrderLines property of the microsoft.graph.company entity.
    */
    public function salesOrderLines(): SalesOrderLinesRequestBuilder {
        return new SalesOrderLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesOrders property of the microsoft.graph.company entity.
    */
    public function salesOrders(): SalesOrdersRequestBuilder {
        return new SalesOrdersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesQuoteLines property of the microsoft.graph.company entity.
    */
    public function salesQuoteLines(): SalesQuoteLinesRequestBuilder {
        return new SalesQuoteLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesQuotes property of the microsoft.graph.company entity.
    */
    public function salesQuotes(): SalesQuotesRequestBuilder {
        return new SalesQuotesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the shipmentMethods property of the microsoft.graph.company entity.
    */
    public function shipmentMethods(): ShipmentMethodsRequestBuilder {
        return new ShipmentMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taxAreas property of the microsoft.graph.company entity.
    */
    public function taxAreas(): TaxAreasRequestBuilder {
        return new TaxAreasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taxGroups property of the microsoft.graph.company entity.
    */
    public function taxGroups(): TaxGroupsRequestBuilder {
        return new TaxGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the unitsOfMeasure property of the microsoft.graph.company entity.
    */
    public function unitsOfMeasure(): UnitsOfMeasureRequestBuilder {
        return new UnitsOfMeasureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the vendors property of the microsoft.graph.company entity.
    */
    public function vendors(): VendorsRequestBuilder {
        return new VendorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CompanyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/financials/companies/{company%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get companies from financials
     * @param CompanyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Company|null>
     * @throws Exception
    */
    public function get(?CompanyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Company::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get companies from financials
     * @param CompanyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CompanyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CompanyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CompanyItemRequestBuilder {
        return new CompanyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
