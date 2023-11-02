<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Company implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new company and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
        $val = $this->getBackingStore()->get('accounts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Account::class);
            /** @var array<Account>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accounts'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the agedAccountsPayable property value. The agedAccountsPayable property
     * @return array<AgedAccountsPayable>|null
    */
    public function getAgedAccountsPayable(): ?array {
        $val = $this->getBackingStore()->get('agedAccountsPayable');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgedAccountsPayable::class);
            /** @var array<AgedAccountsPayable>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agedAccountsPayable'");
    }

    /**
     * Gets the agedAccountsReceivable property value. The agedAccountsReceivable property
     * @return array<AgedAccountsReceivable>|null
    */
    public function getAgedAccountsReceivable(): ?array {
        $val = $this->getBackingStore()->get('agedAccountsReceivable');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgedAccountsReceivable::class);
            /** @var array<AgedAccountsReceivable>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agedAccountsReceivable'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the businessProfileId property value. The businessProfileId property
     * @return string|null
    */
    public function getBusinessProfileId(): ?string {
        $val = $this->getBackingStore()->get('businessProfileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessProfileId'");
    }

    /**
     * Gets the companyInformation property value. The companyInformation property
     * @return array<CompanyInformation>|null
    */
    public function getCompanyInformation(): ?array {
        $val = $this->getBackingStore()->get('companyInformation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CompanyInformation::class);
            /** @var array<CompanyInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyInformation'");
    }

    /**
     * Gets the countriesRegions property value. The countriesRegions property
     * @return array<CountryRegion>|null
    */
    public function getCountriesRegions(): ?array {
        $val = $this->getBackingStore()->get('countriesRegions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CountryRegion::class);
            /** @var array<CountryRegion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countriesRegions'");
    }

    /**
     * Gets the currencies property value. The currencies property
     * @return array<Currency>|null
    */
    public function getCurrencies(): ?array {
        $val = $this->getBackingStore()->get('currencies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Currency::class);
            /** @var array<Currency>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currencies'");
    }

    /**
     * Gets the customerPaymentJournals property value. The customerPaymentJournals property
     * @return array<CustomerPaymentJournal>|null
    */
    public function getCustomerPaymentJournals(): ?array {
        $val = $this->getBackingStore()->get('customerPaymentJournals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomerPaymentJournal::class);
            /** @var array<CustomerPaymentJournal>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerPaymentJournals'");
    }

    /**
     * Gets the customerPayments property value. The customerPayments property
     * @return array<CustomerPayment>|null
    */
    public function getCustomerPayments(): ?array {
        $val = $this->getBackingStore()->get('customerPayments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomerPayment::class);
            /** @var array<CustomerPayment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerPayments'");
    }

    /**
     * Gets the customers property value. The customers property
     * @return array<Customer>|null
    */
    public function getCustomers(): ?array {
        $val = $this->getBackingStore()->get('customers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Customer::class);
            /** @var array<Customer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customers'");
    }

    /**
     * Gets the dimensions property value. The dimensions property
     * @return array<Dimension>|null
    */
    public function getDimensions(): ?array {
        $val = $this->getBackingStore()->get('dimensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Dimension::class);
            /** @var array<Dimension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dimensions'");
    }

    /**
     * Gets the dimensionValues property value. The dimensionValues property
     * @return array<DimensionValue>|null
    */
    public function getDimensionValues(): ?array {
        $val = $this->getBackingStore()->get('dimensionValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DimensionValue::class);
            /** @var array<DimensionValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dimensionValues'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the employees property value. The employees property
     * @return array<Employee>|null
    */
    public function getEmployees(): ?array {
        $val = $this->getBackingStore()->get('employees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Employee::class);
            /** @var array<Employee>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employees'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'itemCategories' => fn(ParseNode $n) => $o->setItemCategories($n->getCollectionOfObjectValues([ItemCategory::class, 'createFromDiscriminatorValue'])),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([Item::class, 'createFromDiscriminatorValue'])),
            'journalLines' => fn(ParseNode $n) => $o->setJournalLines($n->getCollectionOfObjectValues([JournalLine::class, 'createFromDiscriminatorValue'])),
            'journals' => fn(ParseNode $n) => $o->setJournals($n->getCollectionOfObjectValues([Journal::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
        ];
    }

    /**
     * Gets the generalLedgerEntries property value. The generalLedgerEntries property
     * @return array<GeneralLedgerEntry>|null
    */
    public function getGeneralLedgerEntries(): ?array {
        $val = $this->getBackingStore()->get('generalLedgerEntries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GeneralLedgerEntry::class);
            /** @var array<GeneralLedgerEntry>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'generalLedgerEntries'");
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the itemCategories property value. The itemCategories property
     * @return array<ItemCategory>|null
    */
    public function getItemCategories(): ?array {
        $val = $this->getBackingStore()->get('itemCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ItemCategory::class);
            /** @var array<ItemCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemCategories'");
    }

    /**
     * Gets the items property value. The items property
     * @return array<Item>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Item::class);
            /** @var array<Item>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the journalLines property value. The journalLines property
     * @return array<JournalLine>|null
    */
    public function getJournalLines(): ?array {
        $val = $this->getBackingStore()->get('journalLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, JournalLine::class);
            /** @var array<JournalLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'journalLines'");
    }

    /**
     * Gets the journals property value. The journals property
     * @return array<Journal>|null
    */
    public function getJournals(): ?array {
        $val = $this->getBackingStore()->get('journals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Journal::class);
            /** @var array<Journal>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'journals'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the paymentMethods property value. The paymentMethods property
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        $val = $this->getBackingStore()->get('paymentMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PaymentMethod::class);
            /** @var array<PaymentMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentMethods'");
    }

    /**
     * Gets the paymentTerms property value. The paymentTerms property
     * @return array<PaymentTerm>|null
    */
    public function getPaymentTerms(): ?array {
        $val = $this->getBackingStore()->get('paymentTerms');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PaymentTerm::class);
            /** @var array<PaymentTerm>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentTerms'");
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        $val = $this->getBackingStore()->get('picture');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Picture::class);
            /** @var array<Picture>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'picture'");
    }

    /**
     * Gets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        $val = $this->getBackingStore()->get('purchaseInvoiceLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PurchaseInvoiceLine::class);
            /** @var array<PurchaseInvoiceLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purchaseInvoiceLines'");
    }

    /**
     * Gets the purchaseInvoices property value. The purchaseInvoices property
     * @return array<PurchaseInvoice>|null
    */
    public function getPurchaseInvoices(): ?array {
        $val = $this->getBackingStore()->get('purchaseInvoices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PurchaseInvoice::class);
            /** @var array<PurchaseInvoice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purchaseInvoices'");
    }

    /**
     * Gets the salesCreditMemoLines property value. The salesCreditMemoLines property
     * @return array<SalesCreditMemoLine>|null
    */
    public function getSalesCreditMemoLines(): ?array {
        $val = $this->getBackingStore()->get('salesCreditMemoLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesCreditMemoLine::class);
            /** @var array<SalesCreditMemoLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesCreditMemoLines'");
    }

    /**
     * Gets the salesCreditMemos property value. The salesCreditMemos property
     * @return array<SalesCreditMemo>|null
    */
    public function getSalesCreditMemos(): ?array {
        $val = $this->getBackingStore()->get('salesCreditMemos');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesCreditMemo::class);
            /** @var array<SalesCreditMemo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesCreditMemos'");
    }

    /**
     * Gets the salesInvoiceLines property value. The salesInvoiceLines property
     * @return array<SalesInvoiceLine>|null
    */
    public function getSalesInvoiceLines(): ?array {
        $val = $this->getBackingStore()->get('salesInvoiceLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesInvoiceLine::class);
            /** @var array<SalesInvoiceLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesInvoiceLines'");
    }

    /**
     * Gets the salesInvoices property value. The salesInvoices property
     * @return array<SalesInvoice>|null
    */
    public function getSalesInvoices(): ?array {
        $val = $this->getBackingStore()->get('salesInvoices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesInvoice::class);
            /** @var array<SalesInvoice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesInvoices'");
    }

    /**
     * Gets the salesOrderLines property value. The salesOrderLines property
     * @return array<SalesOrderLine>|null
    */
    public function getSalesOrderLines(): ?array {
        $val = $this->getBackingStore()->get('salesOrderLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesOrderLine::class);
            /** @var array<SalesOrderLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesOrderLines'");
    }

    /**
     * Gets the salesOrders property value. The salesOrders property
     * @return array<SalesOrder>|null
    */
    public function getSalesOrders(): ?array {
        $val = $this->getBackingStore()->get('salesOrders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesOrder::class);
            /** @var array<SalesOrder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesOrders'");
    }

    /**
     * Gets the salesQuoteLines property value. The salesQuoteLines property
     * @return array<SalesQuoteLine>|null
    */
    public function getSalesQuoteLines(): ?array {
        $val = $this->getBackingStore()->get('salesQuoteLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesQuoteLine::class);
            /** @var array<SalesQuoteLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesQuoteLines'");
    }

    /**
     * Gets the salesQuotes property value. The salesQuotes property
     * @return array<SalesQuote>|null
    */
    public function getSalesQuotes(): ?array {
        $val = $this->getBackingStore()->get('salesQuotes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesQuote::class);
            /** @var array<SalesQuote>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesQuotes'");
    }

    /**
     * Gets the shipmentMethods property value. The shipmentMethods property
     * @return array<ShipmentMethod>|null
    */
    public function getShipmentMethods(): ?array {
        $val = $this->getBackingStore()->get('shipmentMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ShipmentMethod::class);
            /** @var array<ShipmentMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shipmentMethods'");
    }

    /**
     * Gets the systemVersion property value. The systemVersion property
     * @return string|null
    */
    public function getSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('systemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemVersion'");
    }

    /**
     * Gets the taxAreas property value. The taxAreas property
     * @return array<TaxArea>|null
    */
    public function getTaxAreas(): ?array {
        $val = $this->getBackingStore()->get('taxAreas');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TaxArea::class);
            /** @var array<TaxArea>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxAreas'");
    }

    /**
     * Gets the taxGroups property value. The taxGroups property
     * @return array<TaxGroup>|null
    */
    public function getTaxGroups(): ?array {
        $val = $this->getBackingStore()->get('taxGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TaxGroup::class);
            /** @var array<TaxGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxGroups'");
    }

    /**
     * Gets the unitsOfMeasure property value. The unitsOfMeasure property
     * @return array<UnitOfMeasure>|null
    */
    public function getUnitsOfMeasure(): ?array {
        $val = $this->getBackingStore()->get('unitsOfMeasure');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnitOfMeasure::class);
            /** @var array<UnitOfMeasure>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unitsOfMeasure'");
    }

    /**
     * Gets the vendors property value. The vendors property
     * @return array<Vendor>|null
    */
    public function getVendors(): ?array {
        $val = $this->getBackingStore()->get('vendors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Vendor::class);
            /** @var array<Vendor>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendors'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('itemCategories', $this->getItemCategories());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeCollectionOfObjectValues('journalLines', $this->getJournalLines());
        $writer->writeCollectionOfObjectValues('journals', $this->getJournals());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accounts property value. The accounts property
     * @param array<Account>|null $value Value to set for the accounts property.
    */
    public function setAccounts(?array $value): void {
        $this->getBackingStore()->set('accounts', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the agedAccountsPayable property value. The agedAccountsPayable property
     * @param array<AgedAccountsPayable>|null $value Value to set for the agedAccountsPayable property.
    */
    public function setAgedAccountsPayable(?array $value): void {
        $this->getBackingStore()->set('agedAccountsPayable', $value);
    }

    /**
     * Sets the agedAccountsReceivable property value. The agedAccountsReceivable property
     * @param array<AgedAccountsReceivable>|null $value Value to set for the agedAccountsReceivable property.
    */
    public function setAgedAccountsReceivable(?array $value): void {
        $this->getBackingStore()->set('agedAccountsReceivable', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the businessProfileId property value. The businessProfileId property
     * @param string|null $value Value to set for the businessProfileId property.
    */
    public function setBusinessProfileId(?string $value): void {
        $this->getBackingStore()->set('businessProfileId', $value);
    }

    /**
     * Sets the companyInformation property value. The companyInformation property
     * @param array<CompanyInformation>|null $value Value to set for the companyInformation property.
    */
    public function setCompanyInformation(?array $value): void {
        $this->getBackingStore()->set('companyInformation', $value);
    }

    /**
     * Sets the countriesRegions property value. The countriesRegions property
     * @param array<CountryRegion>|null $value Value to set for the countriesRegions property.
    */
    public function setCountriesRegions(?array $value): void {
        $this->getBackingStore()->set('countriesRegions', $value);
    }

    /**
     * Sets the currencies property value. The currencies property
     * @param array<Currency>|null $value Value to set for the currencies property.
    */
    public function setCurrencies(?array $value): void {
        $this->getBackingStore()->set('currencies', $value);
    }

    /**
     * Sets the customerPaymentJournals property value. The customerPaymentJournals property
     * @param array<CustomerPaymentJournal>|null $value Value to set for the customerPaymentJournals property.
    */
    public function setCustomerPaymentJournals(?array $value): void {
        $this->getBackingStore()->set('customerPaymentJournals', $value);
    }

    /**
     * Sets the customerPayments property value. The customerPayments property
     * @param array<CustomerPayment>|null $value Value to set for the customerPayments property.
    */
    public function setCustomerPayments(?array $value): void {
        $this->getBackingStore()->set('customerPayments', $value);
    }

    /**
     * Sets the customers property value. The customers property
     * @param array<Customer>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value): void {
        $this->getBackingStore()->set('customers', $value);
    }

    /**
     * Sets the dimensions property value. The dimensions property
     * @param array<Dimension>|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?array $value): void {
        $this->getBackingStore()->set('dimensions', $value);
    }

    /**
     * Sets the dimensionValues property value. The dimensionValues property
     * @param array<DimensionValue>|null $value Value to set for the dimensionValues property.
    */
    public function setDimensionValues(?array $value): void {
        $this->getBackingStore()->set('dimensionValues', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the employees property value. The employees property
     * @param array<Employee>|null $value Value to set for the employees property.
    */
    public function setEmployees(?array $value): void {
        $this->getBackingStore()->set('employees', $value);
    }

    /**
     * Sets the generalLedgerEntries property value. The generalLedgerEntries property
     * @param array<GeneralLedgerEntry>|null $value Value to set for the generalLedgerEntries property.
    */
    public function setGeneralLedgerEntries(?array $value): void {
        $this->getBackingStore()->set('generalLedgerEntries', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the itemCategories property value. The itemCategories property
     * @param array<ItemCategory>|null $value Value to set for the itemCategories property.
    */
    public function setItemCategories(?array $value): void {
        $this->getBackingStore()->set('itemCategories', $value);
    }

    /**
     * Sets the items property value. The items property
     * @param array<Item>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the journalLines property value. The journalLines property
     * @param array<JournalLine>|null $value Value to set for the journalLines property.
    */
    public function setJournalLines(?array $value): void {
        $this->getBackingStore()->set('journalLines', $value);
    }

    /**
     * Sets the journals property value. The journals property
     * @param array<Journal>|null $value Value to set for the journals property.
    */
    public function setJournals(?array $value): void {
        $this->getBackingStore()->set('journals', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the paymentMethods property value. The paymentMethods property
     * @param array<PaymentMethod>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value): void {
        $this->getBackingStore()->set('paymentMethods', $value);
    }

    /**
     * Sets the paymentTerms property value. The paymentTerms property
     * @param array<PaymentTerm>|null $value Value to set for the paymentTerms property.
    */
    public function setPaymentTerms(?array $value): void {
        $this->getBackingStore()->set('paymentTerms', $value);
    }

    /**
     * Sets the picture property value. The picture property
     * @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @param array<PurchaseInvoiceLine>|null $value Value to set for the purchaseInvoiceLines property.
    */
    public function setPurchaseInvoiceLines(?array $value): void {
        $this->getBackingStore()->set('purchaseInvoiceLines', $value);
    }

    /**
     * Sets the purchaseInvoices property value. The purchaseInvoices property
     * @param array<PurchaseInvoice>|null $value Value to set for the purchaseInvoices property.
    */
    public function setPurchaseInvoices(?array $value): void {
        $this->getBackingStore()->set('purchaseInvoices', $value);
    }

    /**
     * Sets the salesCreditMemoLines property value. The salesCreditMemoLines property
     * @param array<SalesCreditMemoLine>|null $value Value to set for the salesCreditMemoLines property.
    */
    public function setSalesCreditMemoLines(?array $value): void {
        $this->getBackingStore()->set('salesCreditMemoLines', $value);
    }

    /**
     * Sets the salesCreditMemos property value. The salesCreditMemos property
     * @param array<SalesCreditMemo>|null $value Value to set for the salesCreditMemos property.
    */
    public function setSalesCreditMemos(?array $value): void {
        $this->getBackingStore()->set('salesCreditMemos', $value);
    }

    /**
     * Sets the salesInvoiceLines property value. The salesInvoiceLines property
     * @param array<SalesInvoiceLine>|null $value Value to set for the salesInvoiceLines property.
    */
    public function setSalesInvoiceLines(?array $value): void {
        $this->getBackingStore()->set('salesInvoiceLines', $value);
    }

    /**
     * Sets the salesInvoices property value. The salesInvoices property
     * @param array<SalesInvoice>|null $value Value to set for the salesInvoices property.
    */
    public function setSalesInvoices(?array $value): void {
        $this->getBackingStore()->set('salesInvoices', $value);
    }

    /**
     * Sets the salesOrderLines property value. The salesOrderLines property
     * @param array<SalesOrderLine>|null $value Value to set for the salesOrderLines property.
    */
    public function setSalesOrderLines(?array $value): void {
        $this->getBackingStore()->set('salesOrderLines', $value);
    }

    /**
     * Sets the salesOrders property value. The salesOrders property
     * @param array<SalesOrder>|null $value Value to set for the salesOrders property.
    */
    public function setSalesOrders(?array $value): void {
        $this->getBackingStore()->set('salesOrders', $value);
    }

    /**
     * Sets the salesQuoteLines property value. The salesQuoteLines property
     * @param array<SalesQuoteLine>|null $value Value to set for the salesQuoteLines property.
    */
    public function setSalesQuoteLines(?array $value): void {
        $this->getBackingStore()->set('salesQuoteLines', $value);
    }

    /**
     * Sets the salesQuotes property value. The salesQuotes property
     * @param array<SalesQuote>|null $value Value to set for the salesQuotes property.
    */
    public function setSalesQuotes(?array $value): void {
        $this->getBackingStore()->set('salesQuotes', $value);
    }

    /**
     * Sets the shipmentMethods property value. The shipmentMethods property
     * @param array<ShipmentMethod>|null $value Value to set for the shipmentMethods property.
    */
    public function setShipmentMethods(?array $value): void {
        $this->getBackingStore()->set('shipmentMethods', $value);
    }

    /**
     * Sets the systemVersion property value. The systemVersion property
     * @param string|null $value Value to set for the systemVersion property.
    */
    public function setSystemVersion(?string $value): void {
        $this->getBackingStore()->set('systemVersion', $value);
    }

    /**
     * Sets the taxAreas property value. The taxAreas property
     * @param array<TaxArea>|null $value Value to set for the taxAreas property.
    */
    public function setTaxAreas(?array $value): void {
        $this->getBackingStore()->set('taxAreas', $value);
    }

    /**
     * Sets the taxGroups property value. The taxGroups property
     * @param array<TaxGroup>|null $value Value to set for the taxGroups property.
    */
    public function setTaxGroups(?array $value): void {
        $this->getBackingStore()->set('taxGroups', $value);
    }

    /**
     * Sets the unitsOfMeasure property value. The unitsOfMeasure property
     * @param array<UnitOfMeasure>|null $value Value to set for the unitsOfMeasure property.
    */
    public function setUnitsOfMeasure(?array $value): void {
        $this->getBackingStore()->set('unitsOfMeasure', $value);
    }

    /**
     * Sets the vendors property value. The vendors property
     * @param array<Vendor>|null $value Value to set for the vendors property.
    */
    public function setVendors(?array $value): void {
        $this->getBackingStore()->set('vendors', $value);
    }

}
