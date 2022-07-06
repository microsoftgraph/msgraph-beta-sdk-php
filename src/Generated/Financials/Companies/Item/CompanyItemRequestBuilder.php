<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Accounts\AccountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Accounts\Item\AccountItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\AgedAccountsPayable\AgedAccountsPayableRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\AgedAccountsPayable\Item\AgedAccountsPayableItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\AgedAccountsReceivable\AgedAccountsReceivableRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\AgedAccountsReceivable\Item\AgedAccountsReceivableItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CompanyInformation\CompanyInformationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CompanyInformation\Item\CompanyInformationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CountriesRegions\CountriesRegionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CountriesRegions\Item\CountryRegionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Currencies\CurrenciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Currencies\Item\CurrencyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CustomerPaymentJournals\CustomerPaymentJournalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CustomerPaymentJournals\Item\CustomerPaymentJournalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CustomerPayments\CustomerPaymentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\CustomerPayments\Item\CustomerPaymentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Customers\CustomersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Customers\Item\CustomerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Dimensions\DimensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Dimensions\Item\DimensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\DimensionValues\DimensionValuesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\DimensionValues\Item\DimensionValueItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Employees\EmployeesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Employees\Item\EmployeeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\GeneralLedgerEntries\GeneralLedgerEntriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\GeneralLedgerEntries\Item\GeneralLedgerEntryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\ItemCategories\Item\ItemCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\ItemCategories\ItemCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Items\Item\ItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\JournalLines\Item\JournalLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\JournalLines\JournalLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Journals\Item\JournalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Journals\JournalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PaymentMethods\Item\PaymentMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PaymentMethods\PaymentMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PaymentTerms\Item\PaymentTermItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PaymentTerms\PaymentTermsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Picture\Item\PictureItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Picture\PictureRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoiceLines\Item\PurchaseInvoiceLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoiceLines\PurchaseInvoiceLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\PurchaseInvoicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesCreditMemoLines\Item\SalesCreditMemoLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesCreditMemoLines\SalesCreditMemoLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesCreditMemos\Item\SalesCreditMemoItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesCreditMemos\SalesCreditMemosRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoiceLines\Item\SalesInvoiceLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoiceLines\SalesInvoiceLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\SalesInvoicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesOrderLines\Item\SalesOrderLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesOrderLines\SalesOrderLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesOrders\Item\SalesOrderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesOrders\SalesOrdersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuoteLines\Item\SalesQuoteLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuoteLines\SalesQuoteLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\SalesQuoteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\SalesQuotesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\ShipmentMethods\Item\ShipmentMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\ShipmentMethods\ShipmentMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\TaxAreas\Item\TaxAreaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\TaxAreas\TaxAreasRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\TaxGroups\Item\TaxGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\TaxGroups\TaxGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\UnitsOfMeasure\Item\UnitOfMeasureItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\UnitsOfMeasure\UnitsOfMeasureRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Vendors\Item\VendorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Vendors\VendorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Company;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class CompanyItemRequestBuilder 
{
    /**
     * The accounts property
    */
    public function accounts(): AccountsRequestBuilder {
        return new AccountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agedAccountsPayable property
    */
    public function agedAccountsPayable(): AgedAccountsPayableRequestBuilder {
        return new AgedAccountsPayableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agedAccountsReceivable property
    */
    public function agedAccountsReceivable(): AgedAccountsReceivableRequestBuilder {
        return new AgedAccountsReceivableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The companyInformation property
    */
    public function companyInformation(): CompanyInformationRequestBuilder {
        return new CompanyInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The countriesRegions property
    */
    public function countriesRegions(): CountriesRegionsRequestBuilder {
        return new CountriesRegionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The currencies property
    */
    public function currencies(): CurrenciesRequestBuilder {
        return new CurrenciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customerPaymentJournals property
    */
    public function customerPaymentJournals(): CustomerPaymentJournalsRequestBuilder {
        return new CustomerPaymentJournalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customerPayments property
    */
    public function customerPayments(): CustomerPaymentsRequestBuilder {
        return new CustomerPaymentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customers property
    */
    public function customers(): CustomersRequestBuilder {
        return new CustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dimensions property
    */
    public function dimensions(): DimensionsRequestBuilder {
        return new DimensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dimensionValues property
    */
    public function dimensionValues(): DimensionValuesRequestBuilder {
        return new DimensionValuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The employees property
    */
    public function employees(): EmployeesRequestBuilder {
        return new EmployeesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The generalLedgerEntries property
    */
    public function generalLedgerEntries(): GeneralLedgerEntriesRequestBuilder {
        return new GeneralLedgerEntriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The itemCategories property
    */
    public function itemCategories(): ItemCategoriesRequestBuilder {
        return new ItemCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The items property
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The journalLines property
    */
    public function journalLines(): JournalLinesRequestBuilder {
        return new JournalLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The journals property
    */
    public function journals(): JournalsRequestBuilder {
        return new JournalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The paymentMethods property
    */
    public function paymentMethods(): PaymentMethodsRequestBuilder {
        return new PaymentMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The paymentTerms property
    */
    public function paymentTerms(): PaymentTermsRequestBuilder {
        return new PaymentTermsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The picture property
    */
    public function picture(): PictureRequestBuilder {
        return new PictureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The purchaseInvoiceLines property
    */
    public function purchaseInvoiceLines(): PurchaseInvoiceLinesRequestBuilder {
        return new PurchaseInvoiceLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The purchaseInvoices property
    */
    public function purchaseInvoices(): PurchaseInvoicesRequestBuilder {
        return new PurchaseInvoicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The salesCreditMemoLines property
    */
    public function salesCreditMemoLines(): SalesCreditMemoLinesRequestBuilder {
        return new SalesCreditMemoLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The salesCreditMemos property
    */
    public function salesCreditMemos(): SalesCreditMemosRequestBuilder {
        return new SalesCreditMemosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The salesInvoiceLines property
    */
    public function salesInvoiceLines(): SalesInvoiceLinesRequestBuilder {
        return new SalesInvoiceLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The salesInvoices property
    */
    public function salesInvoices(): SalesInvoicesRequestBuilder {
        return new SalesInvoicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The salesOrderLines property
    */
    public function salesOrderLines(): SalesOrderLinesRequestBuilder {
        return new SalesOrderLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The salesOrders property
    */
    public function salesOrders(): SalesOrdersRequestBuilder {
        return new SalesOrdersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The salesQuoteLines property
    */
    public function salesQuoteLines(): SalesQuoteLinesRequestBuilder {
        return new SalesQuoteLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The salesQuotes property
    */
    public function salesQuotes(): SalesQuotesRequestBuilder {
        return new SalesQuotesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shipmentMethods property
    */
    public function shipmentMethods(): ShipmentMethodsRequestBuilder {
        return new ShipmentMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The taxAreas property
    */
    public function taxAreas(): TaxAreasRequestBuilder {
        return new TaxAreasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The taxGroups property
    */
    public function taxGroups(): TaxGroupsRequestBuilder {
        return new TaxGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unitsOfMeasure property
    */
    public function unitsOfMeasure(): UnitsOfMeasureRequestBuilder {
        return new UnitsOfMeasureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The vendors property
    */
    public function vendors(): VendorsRequestBuilder {
        return new VendorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.accounts.item collection
     * @param string $id Unique identifier of the item
     * @return AccountItemRequestBuilder
    */
    public function accountsById(string $id): AccountItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['account%2Did'] = $id;
        return new AccountItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.agedAccountsPayable.item collection
     * @param string $id Unique identifier of the item
     * @return AgedAccountsPayableItemRequestBuilder
    */
    public function agedAccountsPayableById(string $id): AgedAccountsPayableItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agedAccountsPayable%2Did'] = $id;
        return new AgedAccountsPayableItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.agedAccountsReceivable.item collection
     * @param string $id Unique identifier of the item
     * @return AgedAccountsReceivableItemRequestBuilder
    */
    public function agedAccountsReceivableById(string $id): AgedAccountsReceivableItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agedAccountsReceivable%2Did'] = $id;
        return new AgedAccountsReceivableItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.companyInformation.item collection
     * @param string $id Unique identifier of the item
     * @return CompanyInformationItemRequestBuilder
    */
    public function companyInformationById(string $id): CompanyInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['companyInformation%2Did'] = $id;
        return new CompanyInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CompanyItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/financials/companies/{company%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.countriesRegions.item collection
     * @param string $id Unique identifier of the item
     * @return CountryRegionItemRequestBuilder
    */
    public function countriesRegionsById(string $id): CountryRegionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['countryRegion%2Did'] = $id;
        return new CountryRegionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get companies from financials
     * @param CompanyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?CompanyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.currencies.item collection
     * @param string $id Unique identifier of the item
     * @return CurrencyItemRequestBuilder
    */
    public function currenciesById(string $id): CurrencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['currency%2Did'] = $id;
        return new CurrencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.customerPaymentJournals.item collection
     * @param string $id Unique identifier of the item
     * @return CustomerPaymentJournalItemRequestBuilder
    */
    public function customerPaymentJournalsById(string $id): CustomerPaymentJournalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customerPaymentJournal%2Did'] = $id;
        return new CustomerPaymentJournalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.customerPayments.item collection
     * @param string $id Unique identifier of the item
     * @return CustomerPaymentItemRequestBuilder
    */
    public function customerPaymentsById(string $id): CustomerPaymentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customerPayment%2Did'] = $id;
        return new CustomerPaymentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.customers.item collection
     * @param string $id Unique identifier of the item
     * @return CustomerItemRequestBuilder
    */
    public function customersById(string $id): CustomerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customer%2Did'] = $id;
        return new CustomerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.dimensions.item collection
     * @param string $id Unique identifier of the item
     * @return DimensionItemRequestBuilder
    */
    public function dimensionsById(string $id): DimensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dimension%2Did'] = $id;
        return new DimensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.dimensionValues.item collection
     * @param string $id Unique identifier of the item
     * @return DimensionValueItemRequestBuilder
    */
    public function dimensionValuesById(string $id): DimensionValueItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dimensionValue%2Did'] = $id;
        return new DimensionValueItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.employees.item collection
     * @param string $id Unique identifier of the item
     * @return EmployeeItemRequestBuilder
    */
    public function employeesById(string $id): EmployeeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['employee%2Did'] = $id;
        return new EmployeeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.generalLedgerEntries.item collection
     * @param string $id Unique identifier of the item
     * @return GeneralLedgerEntryItemRequestBuilder
    */
    public function generalLedgerEntriesById(string $id): GeneralLedgerEntryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['generalLedgerEntry%2Did'] = $id;
        return new GeneralLedgerEntryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get companies from financials
     * @param CompanyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?CompanyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Company::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.itemCategories.item collection
     * @param string $id Unique identifier of the item
     * @return ItemCategoryItemRequestBuilder
    */
    public function itemCategoriesById(string $id): ItemCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemCategory%2Did'] = $id;
        return new ItemCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.items.item collection
     * @param string $id Unique identifier of the item
     * @return ItemItemRequestBuilder
    */
    public function itemsById(string $id): ItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['item%2Did'] = $id;
        return new ItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.journalLines.item collection
     * @param string $id Unique identifier of the item
     * @return JournalLineItemRequestBuilder
    */
    public function journalLinesById(string $id): JournalLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['journalLine%2Did'] = $id;
        return new JournalLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.journals.item collection
     * @param string $id Unique identifier of the item
     * @return JournalItemRequestBuilder
    */
    public function journalsById(string $id): JournalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['journal%2Did'] = $id;
        return new JournalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.paymentMethods.item collection
     * @param string $id Unique identifier of the item
     * @return PaymentMethodItemRequestBuilder
    */
    public function paymentMethodsById(string $id): PaymentMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['paymentMethod%2Did'] = $id;
        return new PaymentMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.paymentTerms.item collection
     * @param string $id Unique identifier of the item
     * @return PaymentTermItemRequestBuilder
    */
    public function paymentTermsById(string $id): PaymentTermItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['paymentTerm%2Did'] = $id;
        return new PaymentTermItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.picture.item collection
     * @param string $id Unique identifier of the item
     * @return PictureItemRequestBuilder
    */
    public function pictureById(string $id): PictureItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['picture%2Did'] = $id;
        return new PictureItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.purchaseInvoiceLines.item collection
     * @param string $id Unique identifier of the item
     * @return PurchaseInvoiceLineItemRequestBuilder
    */
    public function purchaseInvoiceLinesById(string $id): PurchaseInvoiceLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['purchaseInvoiceLine%2Did'] = $id;
        return new PurchaseInvoiceLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.purchaseInvoices.item collection
     * @param string $id Unique identifier of the item
     * @return PurchaseInvoiceItemRequestBuilder
    */
    public function purchaseInvoicesById(string $id): PurchaseInvoiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['purchaseInvoice%2Did'] = $id;
        return new PurchaseInvoiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesCreditMemoLines.item collection
     * @param string $id Unique identifier of the item
     * @return SalesCreditMemoLineItemRequestBuilder
    */
    public function salesCreditMemoLinesById(string $id): SalesCreditMemoLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesCreditMemoLine%2Did'] = $id;
        return new SalesCreditMemoLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesCreditMemos.item collection
     * @param string $id Unique identifier of the item
     * @return SalesCreditMemoItemRequestBuilder
    */
    public function salesCreditMemosById(string $id): SalesCreditMemoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesCreditMemo%2Did'] = $id;
        return new SalesCreditMemoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesInvoiceLines.item collection
     * @param string $id Unique identifier of the item
     * @return SalesInvoiceLineItemRequestBuilder
    */
    public function salesInvoiceLinesById(string $id): SalesInvoiceLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesInvoiceLine%2Did'] = $id;
        return new SalesInvoiceLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesInvoices.item collection
     * @param string $id Unique identifier of the item
     * @return SalesInvoiceItemRequestBuilder
    */
    public function salesInvoicesById(string $id): SalesInvoiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesInvoice%2Did'] = $id;
        return new SalesInvoiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesOrderLines.item collection
     * @param string $id Unique identifier of the item
     * @return SalesOrderLineItemRequestBuilder
    */
    public function salesOrderLinesById(string $id): SalesOrderLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesOrderLine%2Did'] = $id;
        return new SalesOrderLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesOrders.item collection
     * @param string $id Unique identifier of the item
     * @return SalesOrderItemRequestBuilder
    */
    public function salesOrdersById(string $id): SalesOrderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesOrder%2Did'] = $id;
        return new SalesOrderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesQuoteLines.item collection
     * @param string $id Unique identifier of the item
     * @return SalesQuoteLineItemRequestBuilder
    */
    public function salesQuoteLinesById(string $id): SalesQuoteLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesQuoteLine%2Did'] = $id;
        return new SalesQuoteLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.salesQuotes.item collection
     * @param string $id Unique identifier of the item
     * @return SalesQuoteItemRequestBuilder
    */
    public function salesQuotesById(string $id): SalesQuoteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesQuote%2Did'] = $id;
        return new SalesQuoteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.shipmentMethods.item collection
     * @param string $id Unique identifier of the item
     * @return ShipmentMethodItemRequestBuilder
    */
    public function shipmentMethodsById(string $id): ShipmentMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['shipmentMethod%2Did'] = $id;
        return new ShipmentMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.taxAreas.item collection
     * @param string $id Unique identifier of the item
     * @return TaxAreaItemRequestBuilder
    */
    public function taxAreasById(string $id): TaxAreaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['taxArea%2Did'] = $id;
        return new TaxAreaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.taxGroups.item collection
     * @param string $id Unique identifier of the item
     * @return TaxGroupItemRequestBuilder
    */
    public function taxGroupsById(string $id): TaxGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['taxGroup%2Did'] = $id;
        return new TaxGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.unitsOfMeasure.item collection
     * @param string $id Unique identifier of the item
     * @return UnitOfMeasureItemRequestBuilder
    */
    public function unitsOfMeasureById(string $id): UnitOfMeasureItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unitOfMeasure%2Did'] = $id;
        return new UnitOfMeasureItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.financials.companies.item.vendors.item collection
     * @param string $id Unique identifier of the item
     * @return VendorItemRequestBuilder
    */
    public function vendorsById(string $id): VendorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vendor%2Did'] = $id;
        return new VendorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
