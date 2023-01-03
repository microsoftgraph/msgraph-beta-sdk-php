<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Company extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('accounts');
    }

    /**
     * Gets the agedAccountsPayable property value. The agedAccountsPayable property
     * @return array<AgedAccountsPayable>|null
    */
    public function getAgedAccountsPayable(): ?array {
        return $this->getBackingStore()->get('agedAccountsPayable');
    }

    /**
     * Gets the agedAccountsReceivable property value. The agedAccountsReceivable property
     * @return array<AgedAccountsReceivable>|null
    */
    public function getAgedAccountsReceivable(): ?array {
        return $this->getBackingStore()->get('agedAccountsReceivable');
    }

    /**
     * Gets the businessProfileId property value. The businessProfileId property
     * @return string|null
    */
    public function getBusinessProfileId(): ?string {
        return $this->getBackingStore()->get('businessProfileId');
    }

    /**
     * Gets the companyInformation property value. The companyInformation property
     * @return array<CompanyInformation>|null
    */
    public function getCompanyInformation(): ?array {
        return $this->getBackingStore()->get('companyInformation');
    }

    /**
     * Gets the countriesRegions property value. The countriesRegions property
     * @return array<CountryRegion>|null
    */
    public function getCountriesRegions(): ?array {
        return $this->getBackingStore()->get('countriesRegions');
    }

    /**
     * Gets the currencies property value. The currencies property
     * @return array<Currency>|null
    */
    public function getCurrencies(): ?array {
        return $this->getBackingStore()->get('currencies');
    }

    /**
     * Gets the customerPaymentJournals property value. The customerPaymentJournals property
     * @return array<CustomerPaymentJournal>|null
    */
    public function getCustomerPaymentJournals(): ?array {
        return $this->getBackingStore()->get('customerPaymentJournals');
    }

    /**
     * Gets the customerPayments property value. The customerPayments property
     * @return array<CustomerPayment>|null
    */
    public function getCustomerPayments(): ?array {
        return $this->getBackingStore()->get('customerPayments');
    }

    /**
     * Gets the customers property value. The customers property
     * @return array<Customer>|null
    */
    public function getCustomers(): ?array {
        return $this->getBackingStore()->get('customers');
    }

    /**
     * Gets the dimensions property value. The dimensions property
     * @return array<Dimension>|null
    */
    public function getDimensions(): ?array {
        return $this->getBackingStore()->get('dimensions');
    }

    /**
     * Gets the dimensionValues property value. The dimensionValues property
     * @return array<DimensionValue>|null
    */
    public function getDimensionValues(): ?array {
        return $this->getBackingStore()->get('dimensionValues');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the employees property value. The employees property
     * @return array<Employee>|null
    */
    public function getEmployees(): ?array {
        return $this->getBackingStore()->get('employees');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accounts' => fn(ParseNode $n) => $o->setAccounts($n->getCollectionOfObjectValues([Account::class, 'createFromDiscriminatorValue'])),
            'agedAccountsPayable' => fn(ParseNode $n) => $o->setAgedAccountsPayable($n->getCollectionOfObjectValues([AgedAccountsPayable::class, 'createFromDiscriminatorValue'])),
            'agedAccountsReceivable' => fn(ParseNode $n) => $o->setAgedAccountsReceivable($n->getCollectionOfObjectValues([AgedAccountsReceivable::class, 'createFromDiscriminatorValue'])),
            'businessProfileId' => fn(ParseNode $n) => $o->setBusinessProfileId($n->getStringValue()),
            'companyInformation' => fn(ParseNode $n) => $o->setCompanyInformation($n->getCollectionOfObjectValues([CompanyInformation::class, 'createFromDiscriminatorValue'])),
            'countriesRegions' => fn(ParseNode $n) => $o->setCountriesRegions($n->getCollectionOfObjectValues([CountryRegion::class, 'createFromDiscriminatorValue'])),
            'currencies' => fn(ParseNode $n) => $o->setCurrencies($n->getCollectionOfObjectValues([Currency::class, 'createFromDiscriminatorValue'])),
            'customerPaymentJournals' => fn(ParseNode $n) => $o->setCustomerPaymentJournals($n->getCollectionOfObjectValues([CustomerPaymentJournal::class, 'createFromDiscriminatorValue'])),
            'customerPayments' => fn(ParseNode $n) => $o->setCustomerPayments($n->getCollectionOfObjectValues([CustomerPayment::class, 'createFromDiscriminatorValue'])),
            'customers' => fn(ParseNode $n) => $o->setCustomers($n->getCollectionOfObjectValues([Customer::class, 'createFromDiscriminatorValue'])),
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getCollectionOfObjectValues([Dimension::class, 'createFromDiscriminatorValue'])),
            'dimensionValues' => fn(ParseNode $n) => $o->setDimensionValues($n->getCollectionOfObjectValues([DimensionValue::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'employees' => fn(ParseNode $n) => $o->setEmployees($n->getCollectionOfObjectValues([Employee::class, 'createFromDiscriminatorValue'])),
            'generalLedgerEntries' => fn(ParseNode $n) => $o->setGeneralLedgerEntries($n->getCollectionOfObjectValues([GeneralLedgerEntry::class, 'createFromDiscriminatorValue'])),
            'itemCategories' => fn(ParseNode $n) => $o->setItemCategories($n->getCollectionOfObjectValues([ItemCategory::class, 'createFromDiscriminatorValue'])),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([Item::class, 'createFromDiscriminatorValue'])),
            'journalLines' => fn(ParseNode $n) => $o->setJournalLines($n->getCollectionOfObjectValues([JournalLine::class, 'createFromDiscriminatorValue'])),
            'journals' => fn(ParseNode $n) => $o->setJournals($n->getCollectionOfObjectValues([Journal::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'paymentMethods' => fn(ParseNode $n) => $o->setPaymentMethods($n->getCollectionOfObjectValues([PaymentMethod::class, 'createFromDiscriminatorValue'])),
            'paymentTerms' => fn(ParseNode $n) => $o->setPaymentTerms($n->getCollectionOfObjectValues([PaymentTerm::class, 'createFromDiscriminatorValue'])),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getCollectionOfObjectValues([Picture::class, 'createFromDiscriminatorValue'])),
            'purchaseInvoiceLines' => fn(ParseNode $n) => $o->setPurchaseInvoiceLines($n->getCollectionOfObjectValues([PurchaseInvoiceLine::class, 'createFromDiscriminatorValue'])),
            'purchaseInvoices' => fn(ParseNode $n) => $o->setPurchaseInvoices($n->getCollectionOfObjectValues([PurchaseInvoice::class, 'createFromDiscriminatorValue'])),
            'salesCreditMemoLines' => fn(ParseNode $n) => $o->setSalesCreditMemoLines($n->getCollectionOfObjectValues([SalesCreditMemoLine::class, 'createFromDiscriminatorValue'])),
            'salesCreditMemos' => fn(ParseNode $n) => $o->setSalesCreditMemos($n->getCollectionOfObjectValues([SalesCreditMemo::class, 'createFromDiscriminatorValue'])),
            'salesInvoiceLines' => fn(ParseNode $n) => $o->setSalesInvoiceLines($n->getCollectionOfObjectValues([SalesInvoiceLine::class, 'createFromDiscriminatorValue'])),
            'salesInvoices' => fn(ParseNode $n) => $o->setSalesInvoices($n->getCollectionOfObjectValues([SalesInvoice::class, 'createFromDiscriminatorValue'])),
            'salesOrderLines' => fn(ParseNode $n) => $o->setSalesOrderLines($n->getCollectionOfObjectValues([SalesOrderLine::class, 'createFromDiscriminatorValue'])),
            'salesOrders' => fn(ParseNode $n) => $o->setSalesOrders($n->getCollectionOfObjectValues([SalesOrder::class, 'createFromDiscriminatorValue'])),
            'salesQuoteLines' => fn(ParseNode $n) => $o->setSalesQuoteLines($n->getCollectionOfObjectValues([SalesQuoteLine::class, 'createFromDiscriminatorValue'])),
            'salesQuotes' => fn(ParseNode $n) => $o->setSalesQuotes($n->getCollectionOfObjectValues([SalesQuote::class, 'createFromDiscriminatorValue'])),
            'shipmentMethods' => fn(ParseNode $n) => $o->setShipmentMethods($n->getCollectionOfObjectValues([ShipmentMethod::class, 'createFromDiscriminatorValue'])),
            'systemVersion' => fn(ParseNode $n) => $o->setSystemVersion($n->getStringValue()),
            'taxAreas' => fn(ParseNode $n) => $o->setTaxAreas($n->getCollectionOfObjectValues([TaxArea::class, 'createFromDiscriminatorValue'])),
            'taxGroups' => fn(ParseNode $n) => $o->setTaxGroups($n->getCollectionOfObjectValues([TaxGroup::class, 'createFromDiscriminatorValue'])),
            'unitsOfMeasure' => fn(ParseNode $n) => $o->setUnitsOfMeasure($n->getCollectionOfObjectValues([UnitOfMeasure::class, 'createFromDiscriminatorValue'])),
            'vendors' => fn(ParseNode $n) => $o->setVendors($n->getCollectionOfObjectValues([Vendor::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the generalLedgerEntries property value. The generalLedgerEntries property
     * @return array<GeneralLedgerEntry>|null
    */
    public function getGeneralLedgerEntries(): ?array {
        return $this->getBackingStore()->get('generalLedgerEntries');
    }

    /**
     * Gets the itemCategories property value. The itemCategories property
     * @return array<ItemCategory>|null
    */
    public function getItemCategories(): ?array {
        return $this->getBackingStore()->get('itemCategories');
    }

    /**
     * Gets the items property value. The items property
     * @return array<Item>|null
    */
    public function getItems(): ?array {
        return $this->getBackingStore()->get('items');
    }

    /**
     * Gets the journalLines property value. The journalLines property
     * @return array<JournalLine>|null
    */
    public function getJournalLines(): ?array {
        return $this->getBackingStore()->get('journalLines');
    }

    /**
     * Gets the journals property value. The journals property
     * @return array<Journal>|null
    */
    public function getJournals(): ?array {
        return $this->getBackingStore()->get('journals');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the paymentMethods property value. The paymentMethods property
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->getBackingStore()->get('paymentMethods');
    }

    /**
     * Gets the paymentTerms property value. The paymentTerms property
     * @return array<PaymentTerm>|null
    */
    public function getPaymentTerms(): ?array {
        return $this->getBackingStore()->get('paymentTerms');
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->getBackingStore()->get('picture');
    }

    /**
     * Gets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        return $this->getBackingStore()->get('purchaseInvoiceLines');
    }

    /**
     * Gets the purchaseInvoices property value. The purchaseInvoices property
     * @return array<PurchaseInvoice>|null
    */
    public function getPurchaseInvoices(): ?array {
        return $this->getBackingStore()->get('purchaseInvoices');
    }

    /**
     * Gets the salesCreditMemoLines property value. The salesCreditMemoLines property
     * @return array<SalesCreditMemoLine>|null
    */
    public function getSalesCreditMemoLines(): ?array {
        return $this->getBackingStore()->get('salesCreditMemoLines');
    }

    /**
     * Gets the salesCreditMemos property value. The salesCreditMemos property
     * @return array<SalesCreditMemo>|null
    */
    public function getSalesCreditMemos(): ?array {
        return $this->getBackingStore()->get('salesCreditMemos');
    }

    /**
     * Gets the salesInvoiceLines property value. The salesInvoiceLines property
     * @return array<SalesInvoiceLine>|null
    */
    public function getSalesInvoiceLines(): ?array {
        return $this->getBackingStore()->get('salesInvoiceLines');
    }

    /**
     * Gets the salesInvoices property value. The salesInvoices property
     * @return array<SalesInvoice>|null
    */
    public function getSalesInvoices(): ?array {
        return $this->getBackingStore()->get('salesInvoices');
    }

    /**
     * Gets the salesOrderLines property value. The salesOrderLines property
     * @return array<SalesOrderLine>|null
    */
    public function getSalesOrderLines(): ?array {
        return $this->getBackingStore()->get('salesOrderLines');
    }

    /**
     * Gets the salesOrders property value. The salesOrders property
     * @return array<SalesOrder>|null
    */
    public function getSalesOrders(): ?array {
        return $this->getBackingStore()->get('salesOrders');
    }

    /**
     * Gets the salesQuoteLines property value. The salesQuoteLines property
     * @return array<SalesQuoteLine>|null
    */
    public function getSalesQuoteLines(): ?array {
        return $this->getBackingStore()->get('salesQuoteLines');
    }

    /**
     * Gets the salesQuotes property value. The salesQuotes property
     * @return array<SalesQuote>|null
    */
    public function getSalesQuotes(): ?array {
        return $this->getBackingStore()->get('salesQuotes');
    }

    /**
     * Gets the shipmentMethods property value. The shipmentMethods property
     * @return array<ShipmentMethod>|null
    */
    public function getShipmentMethods(): ?array {
        return $this->getBackingStore()->get('shipmentMethods');
    }

    /**
     * Gets the systemVersion property value. The systemVersion property
     * @return string|null
    */
    public function getSystemVersion(): ?string {
        return $this->getBackingStore()->get('systemVersion');
    }

    /**
     * Gets the taxAreas property value. The taxAreas property
     * @return array<TaxArea>|null
    */
    public function getTaxAreas(): ?array {
        return $this->getBackingStore()->get('taxAreas');
    }

    /**
     * Gets the taxGroups property value. The taxGroups property
     * @return array<TaxGroup>|null
    */
    public function getTaxGroups(): ?array {
        return $this->getBackingStore()->get('taxGroups');
    }

    /**
     * Gets the unitsOfMeasure property value. The unitsOfMeasure property
     * @return array<UnitOfMeasure>|null
    */
    public function getUnitsOfMeasure(): ?array {
        return $this->getBackingStore()->get('unitsOfMeasure');
    }

    /**
     * Gets the vendors property value. The vendors property
     * @return array<Vendor>|null
    */
    public function getVendors(): ?array {
        return $this->getBackingStore()->get('vendors');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accounts', $this->getAccounts());
        $writer->writeCollectionOfObjectValues('agedAccountsPayable', $this->getAgedAccountsPayable());
        $writer->writeCollectionOfObjectValues('agedAccountsReceivable', $this->getAgedAccountsReceivable());
        $writer->writeStringValue('businessProfileId', $this->getBusinessProfileId());
        $writer->writeCollectionOfObjectValues('companyInformation', $this->getCompanyInformation());
        $writer->writeCollectionOfObjectValues('countriesRegions', $this->getCountriesRegions());
        $writer->writeCollectionOfObjectValues('currencies', $this->getCurrencies());
        $writer->writeCollectionOfObjectValues('customerPaymentJournals', $this->getCustomerPaymentJournals());
        $writer->writeCollectionOfObjectValues('customerPayments', $this->getCustomerPayments());
        $writer->writeCollectionOfObjectValues('customers', $this->getCustomers());
        $writer->writeCollectionOfObjectValues('dimensions', $this->getDimensions());
        $writer->writeCollectionOfObjectValues('dimensionValues', $this->getDimensionValues());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('employees', $this->getEmployees());
        $writer->writeCollectionOfObjectValues('generalLedgerEntries', $this->getGeneralLedgerEntries());
        $writer->writeCollectionOfObjectValues('itemCategories', $this->getItemCategories());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeCollectionOfObjectValues('journalLines', $this->getJournalLines());
        $writer->writeCollectionOfObjectValues('journals', $this->getJournals());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('paymentMethods', $this->getPaymentMethods());
        $writer->writeCollectionOfObjectValues('paymentTerms', $this->getPaymentTerms());
        $writer->writeCollectionOfObjectValues('picture', $this->getPicture());
        $writer->writeCollectionOfObjectValues('purchaseInvoiceLines', $this->getPurchaseInvoiceLines());
        $writer->writeCollectionOfObjectValues('purchaseInvoices', $this->getPurchaseInvoices());
        $writer->writeCollectionOfObjectValues('salesCreditMemoLines', $this->getSalesCreditMemoLines());
        $writer->writeCollectionOfObjectValues('salesCreditMemos', $this->getSalesCreditMemos());
        $writer->writeCollectionOfObjectValues('salesInvoiceLines', $this->getSalesInvoiceLines());
        $writer->writeCollectionOfObjectValues('salesInvoices', $this->getSalesInvoices());
        $writer->writeCollectionOfObjectValues('salesOrderLines', $this->getSalesOrderLines());
        $writer->writeCollectionOfObjectValues('salesOrders', $this->getSalesOrders());
        $writer->writeCollectionOfObjectValues('salesQuoteLines', $this->getSalesQuoteLines());
        $writer->writeCollectionOfObjectValues('salesQuotes', $this->getSalesQuotes());
        $writer->writeCollectionOfObjectValues('shipmentMethods', $this->getShipmentMethods());
        $writer->writeStringValue('systemVersion', $this->getSystemVersion());
        $writer->writeCollectionOfObjectValues('taxAreas', $this->getTaxAreas());
        $writer->writeCollectionOfObjectValues('taxGroups', $this->getTaxGroups());
        $writer->writeCollectionOfObjectValues('unitsOfMeasure', $this->getUnitsOfMeasure());
        $writer->writeCollectionOfObjectValues('vendors', $this->getVendors());
    }

    /**
     * Sets the accounts property value. The accounts property
     *  @param array<Account>|null $value Value to set for the accounts property.
    */
    public function setAccounts(?array $value): void {
        $this->getBackingStore()->set('accounts', $value);
    }

    /**
     * Sets the agedAccountsPayable property value. The agedAccountsPayable property
     *  @param array<AgedAccountsPayable>|null $value Value to set for the agedAccountsPayable property.
    */
    public function setAgedAccountsPayable(?array $value): void {
        $this->getBackingStore()->set('agedAccountsPayable', $value);
    }

    /**
     * Sets the agedAccountsReceivable property value. The agedAccountsReceivable property
     *  @param array<AgedAccountsReceivable>|null $value Value to set for the agedAccountsReceivable property.
    */
    public function setAgedAccountsReceivable(?array $value): void {
        $this->getBackingStore()->set('agedAccountsReceivable', $value);
    }

    /**
     * Sets the businessProfileId property value. The businessProfileId property
     *  @param string|null $value Value to set for the businessProfileId property.
    */
    public function setBusinessProfileId(?string $value): void {
        $this->getBackingStore()->set('businessProfileId', $value);
    }

    /**
     * Sets the companyInformation property value. The companyInformation property
     *  @param array<CompanyInformation>|null $value Value to set for the companyInformation property.
    */
    public function setCompanyInformation(?array $value): void {
        $this->getBackingStore()->set('companyInformation', $value);
    }

    /**
     * Sets the countriesRegions property value. The countriesRegions property
     *  @param array<CountryRegion>|null $value Value to set for the countriesRegions property.
    */
    public function setCountriesRegions(?array $value): void {
        $this->getBackingStore()->set('countriesRegions', $value);
    }

    /**
     * Sets the currencies property value. The currencies property
     *  @param array<Currency>|null $value Value to set for the currencies property.
    */
    public function setCurrencies(?array $value): void {
        $this->getBackingStore()->set('currencies', $value);
    }

    /**
     * Sets the customerPaymentJournals property value. The customerPaymentJournals property
     *  @param array<CustomerPaymentJournal>|null $value Value to set for the customerPaymentJournals property.
    */
    public function setCustomerPaymentJournals(?array $value): void {
        $this->getBackingStore()->set('customerPaymentJournals', $value);
    }

    /**
     * Sets the customerPayments property value. The customerPayments property
     *  @param array<CustomerPayment>|null $value Value to set for the customerPayments property.
    */
    public function setCustomerPayments(?array $value): void {
        $this->getBackingStore()->set('customerPayments', $value);
    }

    /**
     * Sets the customers property value. The customers property
     *  @param array<Customer>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value): void {
        $this->getBackingStore()->set('customers', $value);
    }

    /**
     * Sets the dimensions property value. The dimensions property
     *  @param array<Dimension>|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?array $value): void {
        $this->getBackingStore()->set('dimensions', $value);
    }

    /**
     * Sets the dimensionValues property value. The dimensionValues property
     *  @param array<DimensionValue>|null $value Value to set for the dimensionValues property.
    */
    public function setDimensionValues(?array $value): void {
        $this->getBackingStore()->set('dimensionValues', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the employees property value. The employees property
     *  @param array<Employee>|null $value Value to set for the employees property.
    */
    public function setEmployees(?array $value): void {
        $this->getBackingStore()->set('employees', $value);
    }

    /**
     * Sets the generalLedgerEntries property value. The generalLedgerEntries property
     *  @param array<GeneralLedgerEntry>|null $value Value to set for the generalLedgerEntries property.
    */
    public function setGeneralLedgerEntries(?array $value): void {
        $this->getBackingStore()->set('generalLedgerEntries', $value);
    }

    /**
     * Sets the itemCategories property value. The itemCategories property
     *  @param array<ItemCategory>|null $value Value to set for the itemCategories property.
    */
    public function setItemCategories(?array $value): void {
        $this->getBackingStore()->set('itemCategories', $value);
    }

    /**
     * Sets the items property value. The items property
     *  @param array<Item>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the journalLines property value. The journalLines property
     *  @param array<JournalLine>|null $value Value to set for the journalLines property.
    */
    public function setJournalLines(?array $value): void {
        $this->getBackingStore()->set('journalLines', $value);
    }

    /**
     * Sets the journals property value. The journals property
     *  @param array<Journal>|null $value Value to set for the journals property.
    */
    public function setJournals(?array $value): void {
        $this->getBackingStore()->set('journals', $value);
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the paymentMethods property value. The paymentMethods property
     *  @param array<PaymentMethod>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value): void {
        $this->getBackingStore()->set('paymentMethods', $value);
    }

    /**
     * Sets the paymentTerms property value. The paymentTerms property
     *  @param array<PaymentTerm>|null $value Value to set for the paymentTerms property.
    */
    public function setPaymentTerms(?array $value): void {
        $this->getBackingStore()->set('paymentTerms', $value);
    }

    /**
     * Sets the picture property value. The picture property
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     *  @param array<PurchaseInvoiceLine>|null $value Value to set for the purchaseInvoiceLines property.
    */
    public function setPurchaseInvoiceLines(?array $value): void {
        $this->getBackingStore()->set('purchaseInvoiceLines', $value);
    }

    /**
     * Sets the purchaseInvoices property value. The purchaseInvoices property
     *  @param array<PurchaseInvoice>|null $value Value to set for the purchaseInvoices property.
    */
    public function setPurchaseInvoices(?array $value): void {
        $this->getBackingStore()->set('purchaseInvoices', $value);
    }

    /**
     * Sets the salesCreditMemoLines property value. The salesCreditMemoLines property
     *  @param array<SalesCreditMemoLine>|null $value Value to set for the salesCreditMemoLines property.
    */
    public function setSalesCreditMemoLines(?array $value): void {
        $this->getBackingStore()->set('salesCreditMemoLines', $value);
    }

    /**
     * Sets the salesCreditMemos property value. The salesCreditMemos property
     *  @param array<SalesCreditMemo>|null $value Value to set for the salesCreditMemos property.
    */
    public function setSalesCreditMemos(?array $value): void {
        $this->getBackingStore()->set('salesCreditMemos', $value);
    }

    /**
     * Sets the salesInvoiceLines property value. The salesInvoiceLines property
     *  @param array<SalesInvoiceLine>|null $value Value to set for the salesInvoiceLines property.
    */
    public function setSalesInvoiceLines(?array $value): void {
        $this->getBackingStore()->set('salesInvoiceLines', $value);
    }

    /**
     * Sets the salesInvoices property value. The salesInvoices property
     *  @param array<SalesInvoice>|null $value Value to set for the salesInvoices property.
    */
    public function setSalesInvoices(?array $value): void {
        $this->getBackingStore()->set('salesInvoices', $value);
    }

    /**
     * Sets the salesOrderLines property value. The salesOrderLines property
     *  @param array<SalesOrderLine>|null $value Value to set for the salesOrderLines property.
    */
    public function setSalesOrderLines(?array $value): void {
        $this->getBackingStore()->set('salesOrderLines', $value);
    }

    /**
     * Sets the salesOrders property value. The salesOrders property
     *  @param array<SalesOrder>|null $value Value to set for the salesOrders property.
    */
    public function setSalesOrders(?array $value): void {
        $this->getBackingStore()->set('salesOrders', $value);
    }

    /**
     * Sets the salesQuoteLines property value. The salesQuoteLines property
     *  @param array<SalesQuoteLine>|null $value Value to set for the salesQuoteLines property.
    */
    public function setSalesQuoteLines(?array $value): void {
        $this->getBackingStore()->set('salesQuoteLines', $value);
    }

    /**
     * Sets the salesQuotes property value. The salesQuotes property
     *  @param array<SalesQuote>|null $value Value to set for the salesQuotes property.
    */
    public function setSalesQuotes(?array $value): void {
        $this->getBackingStore()->set('salesQuotes', $value);
    }

    /**
     * Sets the shipmentMethods property value. The shipmentMethods property
     *  @param array<ShipmentMethod>|null $value Value to set for the shipmentMethods property.
    */
    public function setShipmentMethods(?array $value): void {
        $this->getBackingStore()->set('shipmentMethods', $value);
    }

    /**
     * Sets the systemVersion property value. The systemVersion property
     *  @param string|null $value Value to set for the systemVersion property.
    */
    public function setSystemVersion(?string $value): void {
        $this->getBackingStore()->set('systemVersion', $value);
    }

    /**
     * Sets the taxAreas property value. The taxAreas property
     *  @param array<TaxArea>|null $value Value to set for the taxAreas property.
    */
    public function setTaxAreas(?array $value): void {
        $this->getBackingStore()->set('taxAreas', $value);
    }

    /**
     * Sets the taxGroups property value. The taxGroups property
     *  @param array<TaxGroup>|null $value Value to set for the taxGroups property.
    */
    public function setTaxGroups(?array $value): void {
        $this->getBackingStore()->set('taxGroups', $value);
    }

    /**
     * Sets the unitsOfMeasure property value. The unitsOfMeasure property
     *  @param array<UnitOfMeasure>|null $value Value to set for the unitsOfMeasure property.
    */
    public function setUnitsOfMeasure(?array $value): void {
        $this->getBackingStore()->set('unitsOfMeasure', $value);
    }

    /**
     * Sets the vendors property value. The vendors property
     *  @param array<Vendor>|null $value Value to set for the vendors property.
    */
    public function setVendors(?array $value): void {
        $this->getBackingStore()->set('vendors', $value);
    }

}
