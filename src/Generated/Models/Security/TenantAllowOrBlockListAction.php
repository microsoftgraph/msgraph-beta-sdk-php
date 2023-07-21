<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantAllowOrBlockListAction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new tenantAllowOrBlockListAction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantAllowOrBlockListAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantAllowOrBlockListAction {
        return new TenantAllowOrBlockListAction();
    }

    /**
     * Gets the action property value. Specifies whether the tenant allow block list is an allow or block. The possible values are: allow, block, and unkownFutureValue.
     * @return TenantAllowBlockListAction|null
    */
    public function getAction(): ?TenantAllowBlockListAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof TenantAllowBlockListAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
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
     * Gets the expirationDateTime property value. Specifies when the tenant allow-block-list expires in date time.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(TenantAllowBlockListAction::class)),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'results' => fn(ParseNode $n) => $o->setResults($n->getCollectionOfObjectValues([TenantAllowBlockListEntryResult::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the note property value. Specifies the note added to the tenant allow block list entry in the format of string.
     * @return string|null
    */
    public function getNote(): ?string {
        $val = $this->getBackingStore()->get('note');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'note'");
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
     * Gets the results property value. Contains the result of the submission that lead to the tenant allow-block-list entry creation.
     * @return array<TenantAllowBlockListEntryResult>|null
    */
    public function getResults(): ?array {
        $val = $this->getBackingStore()->get('results');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TenantAllowBlockListEntryResult::class);
            /** @var array<TenantAllowBlockListEntryResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'results'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('results', $this->getResults());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. Specifies whether the tenant allow block list is an allow or block. The possible values are: allow, block, and unkownFutureValue.
     * @param TenantAllowBlockListAction|null $value Value to set for the action property.
    */
    public function setAction(?TenantAllowBlockListAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the expirationDateTime property value. Specifies when the tenant allow-block-list expires in date time.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the note property value. Specifies the note added to the tenant allow block list entry in the format of string.
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->getBackingStore()->set('note', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the results property value. Contains the result of the submission that lead to the tenant allow-block-list entry creation.
     * @param array<TenantAllowBlockListEntryResult>|null $value Value to set for the results property.
    */
    public function setResults(?array $value): void {
        $this->getBackingStore()->set('results', $value);
    }

}
