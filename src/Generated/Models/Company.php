<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Company extends Entity implements Parsable 
{
    /**
     * @var array<Account>|null $accounts The accounts property
    */
    private ?array $accounts = null;
    
    /**
     * @var array<AgedAccountsPayable>|null $agedAccountsPayable The agedAccountsPayable property
    */
    private ?array $agedAccountsPayable = null;
    
    /**
     * @var array<AgedAccountsReceivable>|null $agedAccountsReceivable The agedAccountsReceivable property
    */
    private ?array $agedAccountsReceivable = null;
    
    /**
     * @var string|null $businessProfileId The businessProfileId property
    */
    private ?string $businessProfileId = null;
    
    /**
     * @var array<CompanyInformation>|null $companyInformation The companyInformation property
    */
    private ?array $companyInformation = null;
    
    /**
     * @var array<CountryRegion>|null $countriesRegions The countriesRegions property
    */
    private ?array $countriesRegions = null;
    
    /**
     * @var array<Currency>|null $currencies The currencies property
    */
    private ?array $currencies = null;
    
    /**
     * @var array<CustomerPaymentJournal>|null $customerPaymentJournals The customerPaymentJournals property
    */
    private ?array $customerPaymentJournals = null;
    
    /**
     * @var array<CustomerPayment>|null $customerPayments The customerPayments property
    */
    private ?array $customerPayments = null;
    
    /**
     * @var array<Customer>|null $customers The customers property
    */
    private ?array $customers = null;
    
    /**
     * @var array<Dimension>|null $dimensions The dimensions property
    */
    private ?array $dimensions = null;
    
    /**
     * @var array<DimensionValue>|null $dimensionValues The dimensionValues property
    */
    private ?array $dimensionValues = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Employee>|null $employees The employees property
    */
    private ?array $employees = null;
    
    /**
     * @var array<GeneralLedgerEntry>|null $generalLedgerEntries The generalLedgerEntries property
    */
    private ?array $generalLedgerEntries = null;
    
    /**
     * @var array<ItemCategory>|null $itemCategories The itemCategories property
    */
    private ?array $itemCategories = null;
    
    /**
     * @var array<Item>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * @var array<JournalLine>|null $journalLines The journalLines property
    */
    private ?array $journalLines = null;
    
    /**
     * @var array<Journal>|null $journals The journals property
    */
    private ?array $journals = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<PaymentMethod>|null $paymentMethods The paymentMethods property
    */
    private ?array $paymentMethods = null;
    
    /**
     * @var array<PaymentTerm>|null $paymentTerms The paymentTerms property
    */
    private ?array $paymentTerms = null;
    
    /**
     * @var array<Picture>|null $picture The picture property
    */
    private ?array $picture = null;
    
    /**
     * @var array<PurchaseInvoiceLine>|null $purchaseInvoiceLines The purchaseInvoiceLines property
    */
    private ?array $purchaseInvoiceLines = null;
    
    /**
     * @var array<PurchaseInvoice>|null $purchaseInvoices The purchaseInvoices property
    */
    private ?array $purchaseInvoices = null;
    
    /**
     * @var array<SalesCreditMemoLine>|null $salesCreditMemoLines The salesCreditMemoLines property
    */
    private ?array $salesCreditMemoLines = null;
    
    /**
     * @var array<SalesCreditMemo>|null $salesCreditMemos The salesCreditMemos property
    */
    private ?array $salesCreditMemos = null;
    
    /**
     * @var array<SalesInvoiceLine>|null $salesInvoiceLines The salesInvoiceLines property
    */
    private ?array $salesInvoiceLines = null;
    
    /**
     * @var array<SalesInvoice>|null $salesInvoices The salesInvoices property
    */
    private ?array $salesInvoices = null;
    
    /**
     * @var array<SalesOrderLine>|null $salesOrderLines The salesOrderLines property
    */
    private ?array $salesOrderLines = null;
    
    /**
     * @var array<SalesOrder>|null $salesOrders The salesOrders property
    */
    private ?array $salesOrders = null;
    
    /**
     * @var array<SalesQuoteLine>|null $salesQuoteLines The salesQuoteLines property
    */
    private ?array $salesQuoteLines = null;
    
    /**
     * @var array<SalesQuote>|null $salesQuotes The salesQuotes property
    */
    private ?array $salesQuotes = null;
    
    /**
     * @var array<ShipmentMethod>|null $shipmentMethods The shipmentMethods property
    */
    private ?array $shipmentMethods = null;
    
    /**
     * @var string|null $systemVersion The systemVersion property
    */
    private ?string $systemVersion = null;
    
    /**
     * @var array<TaxArea>|null $taxAreas The taxAreas property
    */
    private ?array $taxAreas = null;
    
    /**
     * @var array<TaxGroup>|null $taxGroups The taxGroups property
    */
    private ?array $taxGroups = null;
    
    /**
     * @var array<UnitOfMeasure>|null $unitsOfMeasure The unitsOfMeasure property
    */
    private ?array $unitsOfMeasure = null;
    
    /**
     * @var array<Vendor>|null $vendors The vendors property
    */
    private ?array $vendors = null;
    
    /**
     * Instantiates a new Company and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Company
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Company {
        return new Company();
    }

    /**
     * Gets the accounts property value. The accounts property
     * @return array<Account>|null
    */
    public function getAccounts(): ?array {
        return $this->accounts;
    }

    /**
     * Gets the agedAccountsPayable property value. The agedAccountsPayable property
     * @return array<AgedAccountsPayable>|null
    */
    public function getAgedAccountsPayable(): ?array {
        return $this->agedAccountsPayable;
    }

    /**
     * Gets the agedAccountsReceivable property value. The agedAccountsReceivable property
     * @return array<AgedAccountsReceivable>|null
    */
    public function getAgedAccountsReceivable(): ?array {
        return $this->agedAccountsReceivable;
    }

    /**
     * Gets the businessProfileId property value. The businessProfileId property
     * @return string|null
    */
    public function getBusinessProfileId(): ?string {
        return $this->businessProfileId;
    }

    /**
     * Gets the companyInformation property value. The companyInformation property
     * @return array<CompanyInformation>|null
    */
    public function getCompanyInformation(): ?array {
        return $this->companyInformation;
    }

    /**
     * Gets the countriesRegions property value. The countriesRegions property
     * @return array<CountryRegion>|null
    */
    public function getCountriesRegions(): ?array {
        return $this->countriesRegions;
    }

    /**
     * Gets the currencies property value. The currencies property
     * @return array<Currency>|null
    */
    public function getCurrencies(): ?array {
        return $this->currencies;
    }

    /**
     * Gets the customerPaymentJournals property value. The customerPaymentJournals property
     * @return array<CustomerPaymentJournal>|null
    */
    public function getCustomerPaymentJournals(): ?array {
        return $this->customerPaymentJournals;
    }

    /**
     * Gets the customerPayments property value. The customerPayments property
     * @return array<CustomerPayment>|null
    */
    public function getCustomerPayments(): ?array {
        return $this->customerPayments;
    }

    /**
     * Gets the customers property value. The customers property
     * @return array<Customer>|null
    */
    public function getCustomers(): ?array {
        return $this->customers;
    }

    /**
     * Gets the dimensions property value. The dimensions property
     * @return array<Dimension>|null
    */
    public function getDimensions(): ?array {
        return $this->dimensions;
    }

    /**
     * Gets the dimensionValues property value. The dimensionValues property
     * @return array<DimensionValue>|null
    */
    public function getDimensionValues(): ?array {
        return $this->dimensionValues;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the employees property value. The employees property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accounts' => function (ParseNode $n) use ($o) { $o->setAccounts($n->getCollectionOfObjectValues(array(Account::class, 'createFromDiscriminatorValue'))); },
            'agedAccountsPayable' => function (ParseNode $n) use ($o) { $o->setAgedAccountsPayable($n->getCollectionOfObjectValues(array(AgedAccountsPayable::class, 'createFromDiscriminatorValue'))); },
            'agedAccountsReceivable' => function (ParseNode $n) use ($o) { $o->setAgedAccountsReceivable($n->getCollectionOfObjectValues(array(AgedAccountsReceivable::class, 'createFromDiscriminatorValue'))); },
            'businessProfileId' => function (ParseNode $n) use ($o) { $o->setBusinessProfileId($n->getStringValue()); },
            'companyInformation' => function (ParseNode $n) use ($o) { $o->setCompanyInformation($n->getCollectionOfObjectValues(array(CompanyInformation::class, 'createFromDiscriminatorValue'))); },
            'countriesRegions' => function (ParseNode $n) use ($o) { $o->setCountriesRegions($n->getCollectionOfObjectValues(array(CountryRegion::class, 'createFromDiscriminatorValue'))); },
            'currencies' => function (ParseNode $n) use ($o) { $o->setCurrencies($n->getCollectionOfObjectValues(array(Currency::class, 'createFromDiscriminatorValue'))); },
            'customerPaymentJournals' => function (ParseNode $n) use ($o) { $o->setCustomerPaymentJournals($n->getCollectionOfObjectValues(array(CustomerPaymentJournal::class, 'createFromDiscriminatorValue'))); },
            'customerPayments' => function (ParseNode $n) use ($o) { $o->setCustomerPayments($n->getCollectionOfObjectValues(array(CustomerPayment::class, 'createFromDiscriminatorValue'))); },
            'customers' => function (ParseNode $n) use ($o) { $o->setCustomers($n->getCollectionOfObjectValues(array(Customer::class, 'createFromDiscriminatorValue'))); },
            'dimensions' => function (ParseNode $n) use ($o) { $o->setDimensions($n->getCollectionOfObjectValues(array(Dimension::class, 'createFromDiscriminatorValue'))); },
            'dimensionValues' => function (ParseNode $n) use ($o) { $o->setDimensionValues($n->getCollectionOfObjectValues(array(DimensionValue::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'employees' => function (ParseNode $n) use ($o) { $o->setEmployees($n->getCollectionOfObjectValues(array(Employee::class, 'createFromDiscriminatorValue'))); },
            'generalLedgerEntries' => function (ParseNode $n) use ($o) { $o->setGeneralLedgerEntries($n->getCollectionOfObjectValues(array(GeneralLedgerEntry::class, 'createFromDiscriminatorValue'))); },
            'itemCategories' => function (ParseNode $n) use ($o) { $o->setItemCategories($n->getCollectionOfObjectValues(array(ItemCategory::class, 'createFromDiscriminatorValue'))); },
            'items' => function (ParseNode $n) use ($o) { $o->setItems($n->getCollectionOfObjectValues(array(Item::class, 'createFromDiscriminatorValue'))); },
            'journalLines' => function (ParseNode $n) use ($o) { $o->setJournalLines($n->getCollectionOfObjectValues(array(JournalLine::class, 'createFromDiscriminatorValue'))); },
            'journals' => function (ParseNode $n) use ($o) { $o->setJournals($n->getCollectionOfObjectValues(array(Journal::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'paymentMethods' => function (ParseNode $n) use ($o) { $o->setPaymentMethods($n->getCollectionOfObjectValues(array(PaymentMethod::class, 'createFromDiscriminatorValue'))); },
            'paymentTerms' => function (ParseNode $n) use ($o) { $o->setPaymentTerms($n->getCollectionOfObjectValues(array(PaymentTerm::class, 'createFromDiscriminatorValue'))); },
            'picture' => function (ParseNode $n) use ($o) { $o->setPicture($n->getCollectionOfObjectValues(array(Picture::class, 'createFromDiscriminatorValue'))); },
            'purchaseInvoiceLines' => function (ParseNode $n) use ($o) { $o->setPurchaseInvoiceLines($n->getCollectionOfObjectValues(array(PurchaseInvoiceLine::class, 'createFromDiscriminatorValue'))); },
            'purchaseInvoices' => function (ParseNode $n) use ($o) { $o->setPurchaseInvoices($n->getCollectionOfObjectValues(array(PurchaseInvoice::class, 'createFromDiscriminatorValue'))); },
            'salesCreditMemoLines' => function (ParseNode $n) use ($o) { $o->setSalesCreditMemoLines($n->getCollectionOfObjectValues(array(SalesCreditMemoLine::class, 'createFromDiscriminatorValue'))); },
            'salesCreditMemos' => function (ParseNode $n) use ($o) { $o->setSalesCreditMemos($n->getCollectionOfObjectValues(array(SalesCreditMemo::class, 'createFromDiscriminatorValue'))); },
            'salesInvoiceLines' => function (ParseNode $n) use ($o) { $o->setSalesInvoiceLines($n->getCollectionOfObjectValues(array(SalesInvoiceLine::class, 'createFromDiscriminatorValue'))); },
            'salesInvoices' => function (ParseNode $n) use ($o) { $o->setSalesInvoices($n->getCollectionOfObjectValues(array(SalesInvoice::class, 'createFromDiscriminatorValue'))); },
            'salesOrderLines' => function (ParseNode $n) use ($o) { $o->setSalesOrderLines($n->getCollectionOfObjectValues(array(SalesOrderLine::class, 'createFromDiscriminatorValue'))); },
            'salesOrders' => function (ParseNode $n) use ($o) { $o->setSalesOrders($n->getCollectionOfObjectValues(array(SalesOrder::class, 'createFromDiscriminatorValue'))); },
            'salesQuoteLines' => function (ParseNode $n) use ($o) { $o->setSalesQuoteLines($n->getCollectionOfObjectValues(array(SalesQuoteLine::class, 'createFromDiscriminatorValue'))); },
            'salesQuotes' => function (ParseNode $n) use ($o) { $o->setSalesQuotes($n->getCollectionOfObjectValues(array(SalesQuote::class, 'createFromDiscriminatorValue'))); },
            'shipmentMethods' => function (ParseNode $n) use ($o) { $o->setShipmentMethods($n->getCollectionOfObjectValues(array(ShipmentMethod::class, 'createFromDiscriminatorValue'))); },
            'systemVersion' => function (ParseNode $n) use ($o) { $o->setSystemVersion($n->getStringValue()); },
            'taxAreas' => function (ParseNode $n) use ($o) { $o->setTaxAreas($n->getCollectionOfObjectValues(array(TaxArea::class, 'createFromDiscriminatorValue'))); },
            'taxGroups' => function (ParseNode $n) use ($o) { $o->setTaxGroups($n->getCollectionOfObjectValues(array(TaxGroup::class, 'createFromDiscriminatorValue'))); },
            'unitsOfMeasure' => function (ParseNode $n) use ($o) { $o->setUnitsOfMeasure($n->getCollectionOfObjectValues(array(UnitOfMeasure::class, 'createFromDiscriminatorValue'))); },
            'vendors' => function (ParseNode $n) use ($o) { $o->setVendors($n->getCollectionOfObjectValues(array(Vendor::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the generalLedgerEntries property value. The generalLedgerEntries property
     * @return array<GeneralLedgerEntry>|null
    */
    public function getGeneralLedgerEntries(): ?array {
        return $this->generalLedgerEntries;
    }

    /**
     * Gets the itemCategories property value. The itemCategories property
     * @return array<ItemCategory>|null
    */
    public function getItemCategories(): ?array {
        return $this->itemCategories;
    }

    /**
     * Gets the items property value. The items property
     * @return array<Item>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the journalLines property value. The journalLines property
     * @return array<JournalLine>|null
    */
    public function getJournalLines(): ?array {
        return $this->journalLines;
    }

    /**
     * Gets the journals property value. The journals property
     * @return array<Journal>|null
    */
    public function getJournals(): ?array {
        return $this->journals;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the paymentMethods property value. The paymentMethods property
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->paymentMethods;
    }

    /**
     * Gets the paymentTerms property value. The paymentTerms property
     * @return array<PaymentTerm>|null
    */
    public function getPaymentTerms(): ?array {
        return $this->paymentTerms;
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->picture;
    }

    /**
     * Gets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        return $this->purchaseInvoiceLines;
    }

    /**
     * Gets the purchaseInvoices property value. The purchaseInvoices property
     * @return array<PurchaseInvoice>|null
    */
    public function getPurchaseInvoices(): ?array {
        return $this->purchaseInvoices;
    }

    /**
     * Gets the salesCreditMemoLines property value. The salesCreditMemoLines property
     * @return array<SalesCreditMemoLine>|null
    */
    public function getSalesCreditMemoLines(): ?array {
        return $this->salesCreditMemoLines;
    }

    /**
     * Gets the salesCreditMemos property value. The salesCreditMemos property
     * @return array<SalesCreditMemo>|null
    */
    public function getSalesCreditMemos(): ?array {
        return $this->salesCreditMemos;
    }

    /**
     * Gets the salesInvoiceLines property value. The salesInvoiceLines property
     * @return array<SalesInvoiceLine>|null
    */
    public function getSalesInvoiceLines(): ?array {
        return $this->salesInvoiceLines;
    }

    /**
     * Gets the salesInvoices property value. The salesInvoices property
     * @return array<SalesInvoice>|null
    */
    public function getSalesInvoices(): ?array {
        return $this->salesInvoices;
    }

    /**
     * Gets the salesOrderLines property value. The salesOrderLines property
     * @return array<SalesOrderLine>|null
    */
    public function getSalesOrderLines(): ?array {
        return $this->salesOrderLines;
    }

    /**
     * Gets the salesOrders property value. The salesOrders property
     * @return array<SalesOrder>|null
    */
    public function getSalesOrders(): ?array {
        return $this->salesOrders;
    }

    /**
     * Gets the salesQuoteLines property value. The salesQuoteLines property
     * @return array<SalesQuoteLine>|null
    */
    public function getSalesQuoteLines(): ?array {
        return $this->salesQuoteLines;
    }

    /**
     * Gets the salesQuotes property value. The salesQuotes property
     * @return array<SalesQuote>|null
    */
    public function getSalesQuotes(): ?array {
        return $this->salesQuotes;
    }

    /**
     * Gets the shipmentMethods property value. The shipmentMethods property
     * @return array<ShipmentMethod>|null
    */
    public function getShipmentMethods(): ?array {
        return $this->shipmentMethods;
    }

    /**
     * Gets the systemVersion property value. The systemVersion property
     * @return string|null
    */
    public function getSystemVersion(): ?string {
        return $this->systemVersion;
    }

    /**
     * Gets the taxAreas property value. The taxAreas property
     * @return array<TaxArea>|null
    */
    public function getTaxAreas(): ?array {
        return $this->taxAreas;
    }

    /**
     * Gets the taxGroups property value. The taxGroups property
     * @return array<TaxGroup>|null
    */
    public function getTaxGroups(): ?array {
        return $this->taxGroups;
    }

    /**
     * Gets the unitsOfMeasure property value. The unitsOfMeasure property
     * @return array<UnitOfMeasure>|null
    */
    public function getUnitsOfMeasure(): ?array {
        return $this->unitsOfMeasure;
    }

    /**
     * Gets the vendors property value. The vendors property
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
     * Sets the accounts property value. The accounts property
     *  @param array<Account>|null $value Value to set for the accounts property.
    */
    public function setAccounts(?array $value ): void {
        $this->accounts = $value;
    }

    /**
     * Sets the agedAccountsPayable property value. The agedAccountsPayable property
     *  @param array<AgedAccountsPayable>|null $value Value to set for the agedAccountsPayable property.
    */
    public function setAgedAccountsPayable(?array $value ): void {
        $this->agedAccountsPayable = $value;
    }

    /**
     * Sets the agedAccountsReceivable property value. The agedAccountsReceivable property
     *  @param array<AgedAccountsReceivable>|null $value Value to set for the agedAccountsReceivable property.
    */
    public function setAgedAccountsReceivable(?array $value ): void {
        $this->agedAccountsReceivable = $value;
    }

    /**
     * Sets the businessProfileId property value. The businessProfileId property
     *  @param string|null $value Value to set for the businessProfileId property.
    */
    public function setBusinessProfileId(?string $value ): void {
        $this->businessProfileId = $value;
    }

    /**
     * Sets the companyInformation property value. The companyInformation property
     *  @param array<CompanyInformation>|null $value Value to set for the companyInformation property.
    */
    public function setCompanyInformation(?array $value ): void {
        $this->companyInformation = $value;
    }

    /**
     * Sets the countriesRegions property value. The countriesRegions property
     *  @param array<CountryRegion>|null $value Value to set for the countriesRegions property.
    */
    public function setCountriesRegions(?array $value ): void {
        $this->countriesRegions = $value;
    }

    /**
     * Sets the currencies property value. The currencies property
     *  @param array<Currency>|null $value Value to set for the currencies property.
    */
    public function setCurrencies(?array $value ): void {
        $this->currencies = $value;
    }

    /**
     * Sets the customerPaymentJournals property value. The customerPaymentJournals property
     *  @param array<CustomerPaymentJournal>|null $value Value to set for the customerPaymentJournals property.
    */
    public function setCustomerPaymentJournals(?array $value ): void {
        $this->customerPaymentJournals = $value;
    }

    /**
     * Sets the customerPayments property value. The customerPayments property
     *  @param array<CustomerPayment>|null $value Value to set for the customerPayments property.
    */
    public function setCustomerPayments(?array $value ): void {
        $this->customerPayments = $value;
    }

    /**
     * Sets the customers property value. The customers property
     *  @param array<Customer>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value ): void {
        $this->customers = $value;
    }

    /**
     * Sets the dimensions property value. The dimensions property
     *  @param array<Dimension>|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?array $value ): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the dimensionValues property value. The dimensionValues property
     *  @param array<DimensionValue>|null $value Value to set for the dimensionValues property.
    */
    public function setDimensionValues(?array $value ): void {
        $this->dimensionValues = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the employees property value. The employees property
     *  @param array<Employee>|null $value Value to set for the employees property.
    */
    public function setEmployees(?array $value ): void {
        $this->employees = $value;
    }

    /**
     * Sets the generalLedgerEntries property value. The generalLedgerEntries property
     *  @param array<GeneralLedgerEntry>|null $value Value to set for the generalLedgerEntries property.
    */
    public function setGeneralLedgerEntries(?array $value ): void {
        $this->generalLedgerEntries = $value;
    }

    /**
     * Sets the itemCategories property value. The itemCategories property
     *  @param array<ItemCategory>|null $value Value to set for the itemCategories property.
    */
    public function setItemCategories(?array $value ): void {
        $this->itemCategories = $value;
    }

    /**
     * Sets the items property value. The items property
     *  @param array<Item>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the journalLines property value. The journalLines property
     *  @param array<JournalLine>|null $value Value to set for the journalLines property.
    */
    public function setJournalLines(?array $value ): void {
        $this->journalLines = $value;
    }

    /**
     * Sets the journals property value. The journals property
     *  @param array<Journal>|null $value Value to set for the journals property.
    */
    public function setJournals(?array $value ): void {
        $this->journals = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the paymentMethods property value. The paymentMethods property
     *  @param array<PaymentMethod>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value ): void {
        $this->paymentMethods = $value;
    }

    /**
     * Sets the paymentTerms property value. The paymentTerms property
     *  @param array<PaymentTerm>|null $value Value to set for the paymentTerms property.
    */
    public function setPaymentTerms(?array $value ): void {
        $this->paymentTerms = $value;
    }

    /**
     * Sets the picture property value. The picture property
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     *  @param array<PurchaseInvoiceLine>|null $value Value to set for the purchaseInvoiceLines property.
    */
    public function setPurchaseInvoiceLines(?array $value ): void {
        $this->purchaseInvoiceLines = $value;
    }

    /**
     * Sets the purchaseInvoices property value. The purchaseInvoices property
     *  @param array<PurchaseInvoice>|null $value Value to set for the purchaseInvoices property.
    */
    public function setPurchaseInvoices(?array $value ): void {
        $this->purchaseInvoices = $value;
    }

    /**
     * Sets the salesCreditMemoLines property value. The salesCreditMemoLines property
     *  @param array<SalesCreditMemoLine>|null $value Value to set for the salesCreditMemoLines property.
    */
    public function setSalesCreditMemoLines(?array $value ): void {
        $this->salesCreditMemoLines = $value;
    }

    /**
     * Sets the salesCreditMemos property value. The salesCreditMemos property
     *  @param array<SalesCreditMemo>|null $value Value to set for the salesCreditMemos property.
    */
    public function setSalesCreditMemos(?array $value ): void {
        $this->salesCreditMemos = $value;
    }

    /**
     * Sets the salesInvoiceLines property value. The salesInvoiceLines property
     *  @param array<SalesInvoiceLine>|null $value Value to set for the salesInvoiceLines property.
    */
    public function setSalesInvoiceLines(?array $value ): void {
        $this->salesInvoiceLines = $value;
    }

    /**
     * Sets the salesInvoices property value. The salesInvoices property
     *  @param array<SalesInvoice>|null $value Value to set for the salesInvoices property.
    */
    public function setSalesInvoices(?array $value ): void {
        $this->salesInvoices = $value;
    }

    /**
     * Sets the salesOrderLines property value. The salesOrderLines property
     *  @param array<SalesOrderLine>|null $value Value to set for the salesOrderLines property.
    */
    public function setSalesOrderLines(?array $value ): void {
        $this->salesOrderLines = $value;
    }

    /**
     * Sets the salesOrders property value. The salesOrders property
     *  @param array<SalesOrder>|null $value Value to set for the salesOrders property.
    */
    public function setSalesOrders(?array $value ): void {
        $this->salesOrders = $value;
    }

    /**
     * Sets the salesQuoteLines property value. The salesQuoteLines property
     *  @param array<SalesQuoteLine>|null $value Value to set for the salesQuoteLines property.
    */
    public function setSalesQuoteLines(?array $value ): void {
        $this->salesQuoteLines = $value;
    }

    /**
     * Sets the salesQuotes property value. The salesQuotes property
     *  @param array<SalesQuote>|null $value Value to set for the salesQuotes property.
    */
    public function setSalesQuotes(?array $value ): void {
        $this->salesQuotes = $value;
    }

    /**
     * Sets the shipmentMethods property value. The shipmentMethods property
     *  @param array<ShipmentMethod>|null $value Value to set for the shipmentMethods property.
    */
    public function setShipmentMethods(?array $value ): void {
        $this->shipmentMethods = $value;
    }

    /**
     * Sets the systemVersion property value. The systemVersion property
     *  @param string|null $value Value to set for the systemVersion property.
    */
    public function setSystemVersion(?string $value ): void {
        $this->systemVersion = $value;
    }

    /**
     * Sets the taxAreas property value. The taxAreas property
     *  @param array<TaxArea>|null $value Value to set for the taxAreas property.
    */
    public function setTaxAreas(?array $value ): void {
        $this->taxAreas = $value;
    }

    /**
     * Sets the taxGroups property value. The taxGroups property
     *  @param array<TaxGroup>|null $value Value to set for the taxGroups property.
    */
    public function setTaxGroups(?array $value ): void {
        $this->taxGroups = $value;
    }

    /**
     * Sets the unitsOfMeasure property value. The unitsOfMeasure property
     *  @param array<UnitOfMeasure>|null $value Value to set for the unitsOfMeasure property.
    */
    public function setUnitsOfMeasure(?array $value ): void {
        $this->unitsOfMeasure = $value;
    }

    /**
     * Sets the vendors property value. The vendors property
     *  @param array<Vendor>|null $value Value to set for the vendors property.
    */
    public function setVendors(?array $value ): void {
        $this->vendors = $value;
    }

}
