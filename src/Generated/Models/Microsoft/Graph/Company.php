<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Company extends Entity 
{
    /** @var array<Account>|null $accounts  */
    private ?array $accounts = null;
    
    /** @var array<AgedAccountsPayable>|null $agedAccountsPayable  */
    private ?array $agedAccountsPayable = null;
    
    /** @var array<AgedAccountsReceivable>|null $agedAccountsReceivable  */
    private ?array $agedAccountsReceivable = null;
    
    /** @var string|null $businessProfileId  */
    private ?string $businessProfileId = null;
    
    /** @var array<CompanyInformation>|null $companyInformation  */
    private ?array $companyInformation = null;
    
    /** @var array<CountryRegion>|null $countriesRegions  */
    private ?array $countriesRegions = null;
    
    /** @var array<Currency>|null $currencies  */
    private ?array $currencies = null;
    
    /** @var array<CustomerPaymentJournal>|null $customerPaymentJournals  */
    private ?array $customerPaymentJournals = null;
    
    /** @var array<CustomerPayment>|null $customerPayments  */
    private ?array $customerPayments = null;
    
    /** @var array<Customer>|null $customers  */
    private ?array $customers = null;
    
    /** @var array<Dimension>|null $dimensions  */
    private ?array $dimensions = null;
    
    /** @var array<DimensionValue>|null $dimensionValues  */
    private ?array $dimensionValues = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var array<Employee>|null $employees  */
    private ?array $employees = null;
    
    /** @var array<GeneralLedgerEntry>|null $generalLedgerEntries  */
    private ?array $generalLedgerEntries = null;
    
    /** @var array<ItemCategory>|null $itemCategories  */
    private ?array $itemCategories = null;
    
    /** @var array<Item>|null $items  */
    private ?array $items = null;
    
    /** @var array<JournalLine>|null $journalLines  */
    private ?array $journalLines = null;
    
    /** @var array<Journal>|null $journals  */
    private ?array $journals = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var array<PaymentMethod>|null $paymentMethods  */
    private ?array $paymentMethods = null;
    
    /** @var array<PaymentTerm>|null $paymentTerms  */
    private ?array $paymentTerms = null;
    
    /** @var array<Picture>|null $picture  */
    private ?array $picture = null;
    
    /** @var array<PurchaseInvoiceLine>|null $purchaseInvoiceLines  */
    private ?array $purchaseInvoiceLines = null;
    
    /** @var array<PurchaseInvoice>|null $purchaseInvoices  */
    private ?array $purchaseInvoices = null;
    
    /** @var array<SalesCreditMemoLine>|null $salesCreditMemoLines  */
    private ?array $salesCreditMemoLines = null;
    
    /** @var array<SalesCreditMemo>|null $salesCreditMemos  */
    private ?array $salesCreditMemos = null;
    
    /** @var array<SalesInvoiceLine>|null $salesInvoiceLines  */
    private ?array $salesInvoiceLines = null;
    
    /** @var array<SalesInvoice>|null $salesInvoices  */
    private ?array $salesInvoices = null;
    
    /** @var array<SalesOrderLine>|null $salesOrderLines  */
    private ?array $salesOrderLines = null;
    
    /** @var array<SalesOrder>|null $salesOrders  */
    private ?array $salesOrders = null;
    
    /** @var array<SalesQuoteLine>|null $salesQuoteLines  */
    private ?array $salesQuoteLines = null;
    
    /** @var array<SalesQuote>|null $salesQuotes  */
    private ?array $salesQuotes = null;
    
    /** @var array<ShipmentMethod>|null $shipmentMethods  */
    private ?array $shipmentMethods = null;
    
    /** @var string|null $systemVersion  */
    private ?string $systemVersion = null;
    
    /** @var array<TaxArea>|null $taxAreas  */
    private ?array $taxAreas = null;
    
    /** @var array<TaxGroup>|null $taxGroups  */
    private ?array $taxGroups = null;
    
    /** @var array<UnitOfMeasure>|null $unitsOfMeasure  */
    private ?array $unitsOfMeasure = null;
    
    /** @var array<Vendor>|null $vendors  */
    private ?array $vendors = null;
    
    /**
     * Instantiates a new company and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Company
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Company {
        return new Company();
    }

    /**
     * Gets the accounts property value. 
     * @return array<Account>|null
    */
    public function getAccounts(): ?array {
        return $this->accounts;
    }

    /**
     * Gets the agedAccountsPayable property value. 
     * @return array<AgedAccountsPayable>|null
    */
    public function getAgedAccountsPayable(): ?array {
        return $this->agedAccountsPayable;
    }

    /**
     * Gets the agedAccountsReceivable property value. 
     * @return array<AgedAccountsReceivable>|null
    */
    public function getAgedAccountsReceivable(): ?array {
        return $this->agedAccountsReceivable;
    }

    /**
     * Gets the businessProfileId property value. 
     * @return string|null
    */
    public function getBusinessProfileId(): ?string {
        return $this->businessProfileId;
    }

    /**
     * Gets the companyInformation property value. 
     * @return array<CompanyInformation>|null
    */
    public function getCompanyInformation(): ?array {
        return $this->companyInformation;
    }

    /**
     * Gets the countriesRegions property value. 
     * @return array<CountryRegion>|null
    */
    public function getCountriesRegions(): ?array {
        return $this->countriesRegions;
    }

    /**
     * Gets the currencies property value. 
     * @return array<Currency>|null
    */
    public function getCurrencies(): ?array {
        return $this->currencies;
    }

    /**
     * Gets the customerPaymentJournals property value. 
     * @return array<CustomerPaymentJournal>|null
    */
    public function getCustomerPaymentJournals(): ?array {
        return $this->customerPaymentJournals;
    }

    /**
     * Gets the customerPayments property value. 
     * @return array<CustomerPayment>|null
    */
    public function getCustomerPayments(): ?array {
        return $this->customerPayments;
    }

    /**
     * Gets the customers property value. 
     * @return array<Customer>|null
    */
    public function getCustomers(): ?array {
        return $this->customers;
    }

    /**
     * Gets the dimensions property value. 
     * @return array<Dimension>|null
    */
    public function getDimensions(): ?array {
        return $this->dimensions;
    }

    /**
     * Gets the dimensionValues property value. 
     * @return array<DimensionValue>|null
    */
    public function getDimensionValues(): ?array {
        return $this->dimensionValues;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the employees property value. 
     * @return array<Employee>|null
    */
    public function getEmployees(): ?array {
        return $this->employees;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accounts' => function (self $o, ParseNode $n) { $o->setAccounts($n->getCollectionOfObjectValues(Account::class)); },
            'agedAccountsPayable' => function (self $o, ParseNode $n) { $o->setAgedAccountsPayable($n->getCollectionOfObjectValues(AgedAccountsPayable::class)); },
            'agedAccountsReceivable' => function (self $o, ParseNode $n) { $o->setAgedAccountsReceivable($n->getCollectionOfObjectValues(AgedAccountsReceivable::class)); },
            'businessProfileId' => function (self $o, ParseNode $n) { $o->setBusinessProfileId($n->getStringValue()); },
            'companyInformation' => function (self $o, ParseNode $n) { $o->setCompanyInformation($n->getCollectionOfObjectValues(CompanyInformation::class)); },
            'countriesRegions' => function (self $o, ParseNode $n) { $o->setCountriesRegions($n->getCollectionOfObjectValues(CountryRegion::class)); },
            'currencies' => function (self $o, ParseNode $n) { $o->setCurrencies($n->getCollectionOfObjectValues(Currency::class)); },
            'customerPaymentJournals' => function (self $o, ParseNode $n) { $o->setCustomerPaymentJournals($n->getCollectionOfObjectValues(CustomerPaymentJournal::class)); },
            'customerPayments' => function (self $o, ParseNode $n) { $o->setCustomerPayments($n->getCollectionOfObjectValues(CustomerPayment::class)); },
            'customers' => function (self $o, ParseNode $n) { $o->setCustomers($n->getCollectionOfObjectValues(Customer::class)); },
            'dimensions' => function (self $o, ParseNode $n) { $o->setDimensions($n->getCollectionOfObjectValues(Dimension::class)); },
            'dimensionValues' => function (self $o, ParseNode $n) { $o->setDimensionValues($n->getCollectionOfObjectValues(DimensionValue::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'employees' => function (self $o, ParseNode $n) { $o->setEmployees($n->getCollectionOfObjectValues(Employee::class)); },
            'generalLedgerEntries' => function (self $o, ParseNode $n) { $o->setGeneralLedgerEntries($n->getCollectionOfObjectValues(GeneralLedgerEntry::class)); },
            'itemCategories' => function (self $o, ParseNode $n) { $o->setItemCategories($n->getCollectionOfObjectValues(ItemCategory::class)); },
            'items' => function (self $o, ParseNode $n) { $o->setItems($n->getCollectionOfObjectValues(Item::class)); },
            'journalLines' => function (self $o, ParseNode $n) { $o->setJournalLines($n->getCollectionOfObjectValues(JournalLine::class)); },
            'journals' => function (self $o, ParseNode $n) { $o->setJournals($n->getCollectionOfObjectValues(Journal::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'paymentMethods' => function (self $o, ParseNode $n) { $o->setPaymentMethods($n->getCollectionOfObjectValues(PaymentMethod::class)); },
            'paymentTerms' => function (self $o, ParseNode $n) { $o->setPaymentTerms($n->getCollectionOfObjectValues(PaymentTerm::class)); },
            'picture' => function (self $o, ParseNode $n) { $o->setPicture($n->getCollectionOfObjectValues(Picture::class)); },
            'purchaseInvoiceLines' => function (self $o, ParseNode $n) { $o->setPurchaseInvoiceLines($n->getCollectionOfObjectValues(PurchaseInvoiceLine::class)); },
            'purchaseInvoices' => function (self $o, ParseNode $n) { $o->setPurchaseInvoices($n->getCollectionOfObjectValues(PurchaseInvoice::class)); },
            'salesCreditMemoLines' => function (self $o, ParseNode $n) { $o->setSalesCreditMemoLines($n->getCollectionOfObjectValues(SalesCreditMemoLine::class)); },
            'salesCreditMemos' => function (self $o, ParseNode $n) { $o->setSalesCreditMemos($n->getCollectionOfObjectValues(SalesCreditMemo::class)); },
            'salesInvoiceLines' => function (self $o, ParseNode $n) { $o->setSalesInvoiceLines($n->getCollectionOfObjectValues(SalesInvoiceLine::class)); },
            'salesInvoices' => function (self $o, ParseNode $n) { $o->setSalesInvoices($n->getCollectionOfObjectValues(SalesInvoice::class)); },
            'salesOrderLines' => function (self $o, ParseNode $n) { $o->setSalesOrderLines($n->getCollectionOfObjectValues(SalesOrderLine::class)); },
            'salesOrders' => function (self $o, ParseNode $n) { $o->setSalesOrders($n->getCollectionOfObjectValues(SalesOrder::class)); },
            'salesQuoteLines' => function (self $o, ParseNode $n) { $o->setSalesQuoteLines($n->getCollectionOfObjectValues(SalesQuoteLine::class)); },
            'salesQuotes' => function (self $o, ParseNode $n) { $o->setSalesQuotes($n->getCollectionOfObjectValues(SalesQuote::class)); },
            'shipmentMethods' => function (self $o, ParseNode $n) { $o->setShipmentMethods($n->getCollectionOfObjectValues(ShipmentMethod::class)); },
            'systemVersion' => function (self $o, ParseNode $n) { $o->setSystemVersion($n->getStringValue()); },
            'taxAreas' => function (self $o, ParseNode $n) { $o->setTaxAreas($n->getCollectionOfObjectValues(TaxArea::class)); },
            'taxGroups' => function (self $o, ParseNode $n) { $o->setTaxGroups($n->getCollectionOfObjectValues(TaxGroup::class)); },
            'unitsOfMeasure' => function (self $o, ParseNode $n) { $o->setUnitsOfMeasure($n->getCollectionOfObjectValues(UnitOfMeasure::class)); },
            'vendors' => function (self $o, ParseNode $n) { $o->setVendors($n->getCollectionOfObjectValues(Vendor::class)); },
        ]);
    }

    /**
     * Gets the generalLedgerEntries property value. 
     * @return array<GeneralLedgerEntry>|null
    */
    public function getGeneralLedgerEntries(): ?array {
        return $this->generalLedgerEntries;
    }

    /**
     * Gets the itemCategories property value. 
     * @return array<ItemCategory>|null
    */
    public function getItemCategories(): ?array {
        return $this->itemCategories;
    }

    /**
     * Gets the items property value. 
     * @return array<Item>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the journalLines property value. 
     * @return array<JournalLine>|null
    */
    public function getJournalLines(): ?array {
        return $this->journalLines;
    }

    /**
     * Gets the journals property value. 
     * @return array<Journal>|null
    */
    public function getJournals(): ?array {
        return $this->journals;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the paymentMethods property value. 
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->paymentMethods;
    }

    /**
     * Gets the paymentTerms property value. 
     * @return array<PaymentTerm>|null
    */
    public function getPaymentTerms(): ?array {
        return $this->paymentTerms;
    }

    /**
     * Gets the picture property value. 
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->picture;
    }

    /**
     * Gets the purchaseInvoiceLines property value. 
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        return $this->purchaseInvoiceLines;
    }

    /**
     * Gets the purchaseInvoices property value. 
     * @return array<PurchaseInvoice>|null
    */
    public function getPurchaseInvoices(): ?array {
        return $this->purchaseInvoices;
    }

    /**
     * Gets the salesCreditMemoLines property value. 
     * @return array<SalesCreditMemoLine>|null
    */
    public function getSalesCreditMemoLines(): ?array {
        return $this->salesCreditMemoLines;
    }

    /**
     * Gets the salesCreditMemos property value. 
     * @return array<SalesCreditMemo>|null
    */
    public function getSalesCreditMemos(): ?array {
        return $this->salesCreditMemos;
    }

    /**
     * Gets the salesInvoiceLines property value. 
     * @return array<SalesInvoiceLine>|null
    */
    public function getSalesInvoiceLines(): ?array {
        return $this->salesInvoiceLines;
    }

    /**
     * Gets the salesInvoices property value. 
     * @return array<SalesInvoice>|null
    */
    public function getSalesInvoices(): ?array {
        return $this->salesInvoices;
    }

    /**
     * Gets the salesOrderLines property value. 
     * @return array<SalesOrderLine>|null
    */
    public function getSalesOrderLines(): ?array {
        return $this->salesOrderLines;
    }

    /**
     * Gets the salesOrders property value. 
     * @return array<SalesOrder>|null
    */
    public function getSalesOrders(): ?array {
        return $this->salesOrders;
    }

    /**
     * Gets the salesQuoteLines property value. 
     * @return array<SalesQuoteLine>|null
    */
    public function getSalesQuoteLines(): ?array {
        return $this->salesQuoteLines;
    }

    /**
     * Gets the salesQuotes property value. 
     * @return array<SalesQuote>|null
    */
    public function getSalesQuotes(): ?array {
        return $this->salesQuotes;
    }

    /**
     * Gets the shipmentMethods property value. 
     * @return array<ShipmentMethod>|null
    */
    public function getShipmentMethods(): ?array {
        return $this->shipmentMethods;
    }

    /**
     * Gets the systemVersion property value. 
     * @return string|null
    */
    public function getSystemVersion(): ?string {
        return $this->systemVersion;
    }

    /**
     * Gets the taxAreas property value. 
     * @return array<TaxArea>|null
    */
    public function getTaxAreas(): ?array {
        return $this->taxAreas;
    }

    /**
     * Gets the taxGroups property value. 
     * @return array<TaxGroup>|null
    */
    public function getTaxGroups(): ?array {
        return $this->taxGroups;
    }

    /**
     * Gets the unitsOfMeasure property value. 
     * @return array<UnitOfMeasure>|null
    */
    public function getUnitsOfMeasure(): ?array {
        return $this->unitsOfMeasure;
    }

    /**
     * Gets the vendors property value. 
     * @return array<Vendor>|null
    */
    public function getVendors(): ?array {
        return $this->vendors;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accounts', $this->accounts);
        $writer->writeCollectionOfObjectValues('agedAccountsPayable', $this->agedAccountsPayable);
        $writer->writeCollectionOfObjectValues('agedAccountsReceivable', $this->agedAccountsReceivable);
        $writer->writeStringValue('businessProfileId', $this->businessProfileId);
        $writer->writeCollectionOfObjectValues('companyInformation', $this->companyInformation);
        $writer->writeCollectionOfObjectValues('countriesRegions', $this->countriesRegions);
        $writer->writeCollectionOfObjectValues('currencies', $this->currencies);
        $writer->writeCollectionOfObjectValues('customerPaymentJournals', $this->customerPaymentJournals);
        $writer->writeCollectionOfObjectValues('customerPayments', $this->customerPayments);
        $writer->writeCollectionOfObjectValues('customers', $this->customers);
        $writer->writeCollectionOfObjectValues('dimensions', $this->dimensions);
        $writer->writeCollectionOfObjectValues('dimensionValues', $this->dimensionValues);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('employees', $this->employees);
        $writer->writeCollectionOfObjectValues('generalLedgerEntries', $this->generalLedgerEntries);
        $writer->writeCollectionOfObjectValues('itemCategories', $this->itemCategories);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeCollectionOfObjectValues('journalLines', $this->journalLines);
        $writer->writeCollectionOfObjectValues('journals', $this->journals);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('paymentMethods', $this->paymentMethods);
        $writer->writeCollectionOfObjectValues('paymentTerms', $this->paymentTerms);
        $writer->writeCollectionOfObjectValues('picture', $this->picture);
        $writer->writeCollectionOfObjectValues('purchaseInvoiceLines', $this->purchaseInvoiceLines);
        $writer->writeCollectionOfObjectValues('purchaseInvoices', $this->purchaseInvoices);
        $writer->writeCollectionOfObjectValues('salesCreditMemoLines', $this->salesCreditMemoLines);
        $writer->writeCollectionOfObjectValues('salesCreditMemos', $this->salesCreditMemos);
        $writer->writeCollectionOfObjectValues('salesInvoiceLines', $this->salesInvoiceLines);
        $writer->writeCollectionOfObjectValues('salesInvoices', $this->salesInvoices);
        $writer->writeCollectionOfObjectValues('salesOrderLines', $this->salesOrderLines);
        $writer->writeCollectionOfObjectValues('salesOrders', $this->salesOrders);
        $writer->writeCollectionOfObjectValues('salesQuoteLines', $this->salesQuoteLines);
        $writer->writeCollectionOfObjectValues('salesQuotes', $this->salesQuotes);
        $writer->writeCollectionOfObjectValues('shipmentMethods', $this->shipmentMethods);
        $writer->writeStringValue('systemVersion', $this->systemVersion);
        $writer->writeCollectionOfObjectValues('taxAreas', $this->taxAreas);
        $writer->writeCollectionOfObjectValues('taxGroups', $this->taxGroups);
        $writer->writeCollectionOfObjectValues('unitsOfMeasure', $this->unitsOfMeasure);
        $writer->writeCollectionOfObjectValues('vendors', $this->vendors);
    }

    /**
     * Sets the accounts property value. 
     *  @param array<Account>|null $value Value to set for the accounts property.
    */
    public function setAccounts(?array $value ): void {
        $this->accounts = $value;
    }

    /**
     * Sets the agedAccountsPayable property value. 
     *  @param array<AgedAccountsPayable>|null $value Value to set for the agedAccountsPayable property.
    */
    public function setAgedAccountsPayable(?array $value ): void {
        $this->agedAccountsPayable = $value;
    }

    /**
     * Sets the agedAccountsReceivable property value. 
     *  @param array<AgedAccountsReceivable>|null $value Value to set for the agedAccountsReceivable property.
    */
    public function setAgedAccountsReceivable(?array $value ): void {
        $this->agedAccountsReceivable = $value;
    }

    /**
     * Sets the businessProfileId property value. 
     *  @param string|null $value Value to set for the businessProfileId property.
    */
    public function setBusinessProfileId(?string $value ): void {
        $this->businessProfileId = $value;
    }

    /**
     * Sets the companyInformation property value. 
     *  @param array<CompanyInformation>|null $value Value to set for the companyInformation property.
    */
    public function setCompanyInformation(?array $value ): void {
        $this->companyInformation = $value;
    }

    /**
     * Sets the countriesRegions property value. 
     *  @param array<CountryRegion>|null $value Value to set for the countriesRegions property.
    */
    public function setCountriesRegions(?array $value ): void {
        $this->countriesRegions = $value;
    }

    /**
     * Sets the currencies property value. 
     *  @param array<Currency>|null $value Value to set for the currencies property.
    */
    public function setCurrencies(?array $value ): void {
        $this->currencies = $value;
    }

    /**
     * Sets the customerPaymentJournals property value. 
     *  @param array<CustomerPaymentJournal>|null $value Value to set for the customerPaymentJournals property.
    */
    public function setCustomerPaymentJournals(?array $value ): void {
        $this->customerPaymentJournals = $value;
    }

    /**
     * Sets the customerPayments property value. 
     *  @param array<CustomerPayment>|null $value Value to set for the customerPayments property.
    */
    public function setCustomerPayments(?array $value ): void {
        $this->customerPayments = $value;
    }

    /**
     * Sets the customers property value. 
     *  @param array<Customer>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value ): void {
        $this->customers = $value;
    }

    /**
     * Sets the dimensions property value. 
     *  @param array<Dimension>|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?array $value ): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the dimensionValues property value. 
     *  @param array<DimensionValue>|null $value Value to set for the dimensionValues property.
    */
    public function setDimensionValues(?array $value ): void {
        $this->dimensionValues = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the employees property value. 
     *  @param array<Employee>|null $value Value to set for the employees property.
    */
    public function setEmployees(?array $value ): void {
        $this->employees = $value;
    }

    /**
     * Sets the generalLedgerEntries property value. 
     *  @param array<GeneralLedgerEntry>|null $value Value to set for the generalLedgerEntries property.
    */
    public function setGeneralLedgerEntries(?array $value ): void {
        $this->generalLedgerEntries = $value;
    }

    /**
     * Sets the itemCategories property value. 
     *  @param array<ItemCategory>|null $value Value to set for the itemCategories property.
    */
    public function setItemCategories(?array $value ): void {
        $this->itemCategories = $value;
    }

    /**
     * Sets the items property value. 
     *  @param array<Item>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the journalLines property value. 
     *  @param array<JournalLine>|null $value Value to set for the journalLines property.
    */
    public function setJournalLines(?array $value ): void {
        $this->journalLines = $value;
    }

    /**
     * Sets the journals property value. 
     *  @param array<Journal>|null $value Value to set for the journals property.
    */
    public function setJournals(?array $value ): void {
        $this->journals = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the paymentMethods property value. 
     *  @param array<PaymentMethod>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value ): void {
        $this->paymentMethods = $value;
    }

    /**
     * Sets the paymentTerms property value. 
     *  @param array<PaymentTerm>|null $value Value to set for the paymentTerms property.
    */
    public function setPaymentTerms(?array $value ): void {
        $this->paymentTerms = $value;
    }

    /**
     * Sets the picture property value. 
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the purchaseInvoiceLines property value. 
     *  @param array<PurchaseInvoiceLine>|null $value Value to set for the purchaseInvoiceLines property.
    */
    public function setPurchaseInvoiceLines(?array $value ): void {
        $this->purchaseInvoiceLines = $value;
    }

    /**
     * Sets the purchaseInvoices property value. 
     *  @param array<PurchaseInvoice>|null $value Value to set for the purchaseInvoices property.
    */
    public function setPurchaseInvoices(?array $value ): void {
        $this->purchaseInvoices = $value;
    }

    /**
     * Sets the salesCreditMemoLines property value. 
     *  @param array<SalesCreditMemoLine>|null $value Value to set for the salesCreditMemoLines property.
    */
    public function setSalesCreditMemoLines(?array $value ): void {
        $this->salesCreditMemoLines = $value;
    }

    /**
     * Sets the salesCreditMemos property value. 
     *  @param array<SalesCreditMemo>|null $value Value to set for the salesCreditMemos property.
    */
    public function setSalesCreditMemos(?array $value ): void {
        $this->salesCreditMemos = $value;
    }

    /**
     * Sets the salesInvoiceLines property value. 
     *  @param array<SalesInvoiceLine>|null $value Value to set for the salesInvoiceLines property.
    */
    public function setSalesInvoiceLines(?array $value ): void {
        $this->salesInvoiceLines = $value;
    }

    /**
     * Sets the salesInvoices property value. 
     *  @param array<SalesInvoice>|null $value Value to set for the salesInvoices property.
    */
    public function setSalesInvoices(?array $value ): void {
        $this->salesInvoices = $value;
    }

    /**
     * Sets the salesOrderLines property value. 
     *  @param array<SalesOrderLine>|null $value Value to set for the salesOrderLines property.
    */
    public function setSalesOrderLines(?array $value ): void {
        $this->salesOrderLines = $value;
    }

    /**
     * Sets the salesOrders property value. 
     *  @param array<SalesOrder>|null $value Value to set for the salesOrders property.
    */
    public function setSalesOrders(?array $value ): void {
        $this->salesOrders = $value;
    }

    /**
     * Sets the salesQuoteLines property value. 
     *  @param array<SalesQuoteLine>|null $value Value to set for the salesQuoteLines property.
    */
    public function setSalesQuoteLines(?array $value ): void {
        $this->salesQuoteLines = $value;
    }

    /**
     * Sets the salesQuotes property value. 
     *  @param array<SalesQuote>|null $value Value to set for the salesQuotes property.
    */
    public function setSalesQuotes(?array $value ): void {
        $this->salesQuotes = $value;
    }

    /**
     * Sets the shipmentMethods property value. 
     *  @param array<ShipmentMethod>|null $value Value to set for the shipmentMethods property.
    */
    public function setShipmentMethods(?array $value ): void {
        $this->shipmentMethods = $value;
    }

    /**
     * Sets the systemVersion property value. 
     *  @param string|null $value Value to set for the systemVersion property.
    */
    public function setSystemVersion(?string $value ): void {
        $this->systemVersion = $value;
    }

    /**
     * Sets the taxAreas property value. 
     *  @param array<TaxArea>|null $value Value to set for the taxAreas property.
    */
    public function setTaxAreas(?array $value ): void {
        $this->taxAreas = $value;
    }

    /**
     * Sets the taxGroups property value. 
     *  @param array<TaxGroup>|null $value Value to set for the taxGroups property.
    */
    public function setTaxGroups(?array $value ): void {
        $this->taxGroups = $value;
    }

    /**
     * Sets the unitsOfMeasure property value. 
     *  @param array<UnitOfMeasure>|null $value Value to set for the unitsOfMeasure property.
    */
    public function setUnitsOfMeasure(?array $value ): void {
        $this->unitsOfMeasure = $value;
    }

    /**
     * Sets the vendors property value. 
     *  @param array<Vendor>|null $value Value to set for the vendors property.
    */
    public function setVendors(?array $value ): void {
        $this->vendors = $value;
    }

}
