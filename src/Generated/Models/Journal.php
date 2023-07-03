<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Journal implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Journal and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Journal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Journal {
        return new Journal();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        $val = $this->getBackingStore()->get('account');
        if (is_null($val) || $val instanceof Account) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'account'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the balancingAccountId property value. The balancingAccountId property
     * @return string|null
    */
    public function getBalancingAccountId(): ?string {
        $val = $this->getBackingStore()->get('balancingAccountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'balancingAccountId'");
    }

    /**
     * Gets the balancingAccountNumber property value. The balancingAccountNumber property
     * @return string|null
    */
    public function getBalancingAccountNumber(): ?string {
        $val = $this->getBackingStore()->get('balancingAccountNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'balancingAccountNumber'");
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        $val = $this->getBackingStore()->get('code');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'code'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([Account::class, 'createFromDiscriminatorValue'])),
            'balancingAccountId' => fn(ParseNode $n) => $o->setBalancingAccountId($n->getStringValue()),
            'balancingAccountNumber' => fn(ParseNode $n) => $o->setBalancingAccountNumber($n->getStringValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'journalLines' => fn(ParseNode $n) => $o->setJournalLines($n->getCollectionOfObjectValues([JournalLine::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('account', $this->getAccount());
        $writer->writeStringValue('balancingAccountId', $this->getBalancingAccountId());
        $writer->writeStringValue('balancingAccountNumber', $this->getBalancingAccountNumber());
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('journalLines', $this->getJournalLines());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the account property value. The account property
     * @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value): void {
        $this->getBackingStore()->set('account', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the balancingAccountId property value. The balancingAccountId property
     * @param string|null $value Value to set for the balancingAccountId property.
    */
    public function setBalancingAccountId(?string $value): void {
        $this->getBackingStore()->set('balancingAccountId', $value);
    }

    /**
     * Sets the balancingAccountNumber property value. The balancingAccountNumber property
     * @param string|null $value Value to set for the balancingAccountNumber property.
    */
    public function setBalancingAccountNumber(?string $value): void {
        $this->getBackingStore()->set('balancingAccountNumber', $value);
    }

    /**
     * Sets the code property value. The code property
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the journalLines property value. The journalLines property
     * @param array<JournalLine>|null $value Value to set for the journalLines property.
    */
    public function setJournalLines(?array $value): void {
        $this->getBackingStore()->set('journalLines', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
