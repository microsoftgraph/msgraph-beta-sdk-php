<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedApproval\Item\RoleInfo\SelfActivate;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SelfActivatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new selfActivatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelfActivatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelfActivatePostRequestBody {
        return new SelfActivatePostRequestBody();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the duration property value. The duration property
     * @return string|null
    */
    public function getDuration(): ?string {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'ticketNumber' => fn(ParseNode $n) => $o->setTicketNumber($n->getStringValue()),
            'ticketSystem' => fn(ParseNode $n) => $o->setTicketSystem($n->getStringValue()),
        ];
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the ticketNumber property value. The ticketNumber property
     * @return string|null
    */
    public function getTicketNumber(): ?string {
        $val = $this->getBackingStore()->get('ticketNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketNumber'");
    }

    /**
     * Gets the ticketSystem property value. The ticketSystem property
     * @return string|null
    */
    public function getTicketSystem(): ?string {
        $val = $this->getBackingStore()->get('ticketSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketSystem'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('duration', $this->getDuration());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('ticketNumber', $this->getTicketNumber());
        $writer->writeStringValue('ticketSystem', $this->getTicketSystem());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the duration property value. The duration property
     * @param string|null $value Value to set for the duration property.
    */
    public function setDuration(?string $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the ticketNumber property value. The ticketNumber property
     * @param string|null $value Value to set for the ticketNumber property.
    */
    public function setTicketNumber(?string $value): void {
        $this->getBackingStore()->set('ticketNumber', $value);
    }

    /**
     * Sets the ticketSystem property value. The ticketSystem property
     * @param string|null $value Value to set for the ticketSystem property.
    */
    public function setTicketSystem(?string $value): void {
        $this->getBackingStore()->set('ticketSystem', $value);
    }

}
