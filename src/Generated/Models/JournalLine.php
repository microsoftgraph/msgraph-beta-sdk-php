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
use Microsoft\Kiota\Abstractions\Types\Date;

class JournalLine implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new journalLine and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JournalLine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JournalLine {
        return new JournalLine();
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
     * Gets the accountId property value. The accountId property
     * @return string|null
    */
    public function getAccountId(): ?string {
        $val = $this->getBackingStore()->get('accountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountId'");
    }

    /**
     * Gets the accountNumber property value. The accountNumber property
     * @return string|null
    */
    public function getAccountNumber(): ?string {
        $val = $this->getBackingStore()->get('accountNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountNumber'");
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
     * Gets the amount property value. The amount property
     * @return string|null
    */
    public function getAmount(): ?string {
        $val = $this->getBackingStore()->get('amount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'amount'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the comment property value. The comment property
     * @return string|null
    */
    public function getComment(): ?string {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the documentNumber property value. The documentNumber property
     * @return string|null
    */
    public function getDocumentNumber(): ?string {
        $val = $this->getBackingStore()->get('documentNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentNumber'");
    }

    /**
     * Gets the externalDocumentNumber property value. The externalDocumentNumber property
     * @return string|null
    */
    public function getExternalDocumentNumber(): ?string {
        $val = $this->getBackingStore()->get('externalDocumentNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalDocumentNumber'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([Account::class, 'createFromDiscriminatorValue'])),
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'accountNumber' => fn(ParseNode $n) => $o->setAccountNumber($n->getStringValue()),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getStringValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'documentNumber' => fn(ParseNode $n) => $o->setDocumentNumber($n->getStringValue()),
            'externalDocumentNumber' => fn(ParseNode $n) => $o->setExternalDocumentNumber($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'journalDisplayName' => fn(ParseNode $n) => $o->setJournalDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lineNumber' => fn(ParseNode $n) => $o->setLineNumber($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'postingDate' => fn(ParseNode $n) => $o->setPostingDate($n->getDateValue()),
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
     * Gets the journalDisplayName property value. The journalDisplayName property
     * @return string|null
    */
    public function getJournalDisplayName(): ?string {
        $val = $this->getBackingStore()->get('journalDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'journalDisplayName'");
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
     * Gets the lineNumber property value. The lineNumber property
     * @return int|null
    */
    public function getLineNumber(): ?int {
        $val = $this->getBackingStore()->get('lineNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lineNumber'");
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
     * Gets the postingDate property value. The postingDate property
     * @return Date|null
    */
    public function getPostingDate(): ?Date {
        $val = $this->getBackingStore()->get('postingDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postingDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('account', $this->getAccount());
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeStringValue('accountNumber', $this->getAccountNumber());
        $writer->writeStringValue('amount', $this->getAmount());
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('documentNumber', $this->getDocumentNumber());
        $writer->writeStringValue('externalDocumentNumber', $this->getExternalDocumentNumber());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('journalDisplayName', $this->getJournalDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeIntegerValue('lineNumber', $this->getLineNumber());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateValue('postingDate', $this->getPostingDate());
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
     * Sets the accountId property value. The accountId property
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the accountNumber property value. The accountNumber property
     * @param string|null $value Value to set for the accountNumber property.
    */
    public function setAccountNumber(?string $value): void {
        $this->getBackingStore()->set('accountNumber', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the amount property value. The amount property
     * @param string|null $value Value to set for the amount property.
    */
    public function setAmount(?string $value): void {
        $this->getBackingStore()->set('amount', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the comment property value. The comment property
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the documentNumber property value. The documentNumber property
     * @param string|null $value Value to set for the documentNumber property.
    */
    public function setDocumentNumber(?string $value): void {
        $this->getBackingStore()->set('documentNumber', $value);
    }

    /**
     * Sets the externalDocumentNumber property value. The externalDocumentNumber property
     * @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value): void {
        $this->getBackingStore()->set('externalDocumentNumber', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the journalDisplayName property value. The journalDisplayName property
     * @param string|null $value Value to set for the journalDisplayName property.
    */
    public function setJournalDisplayName(?string $value): void {
        $this->getBackingStore()->set('journalDisplayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lineNumber property value. The lineNumber property
     * @param int|null $value Value to set for the lineNumber property.
    */
    public function setLineNumber(?int $value): void {
        $this->getBackingStore()->set('lineNumber', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the postingDate property value. The postingDate property
     * @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value): void {
        $this->getBackingStore()->set('postingDate', $value);
    }

}
